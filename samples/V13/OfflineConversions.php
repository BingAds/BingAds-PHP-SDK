<?php

namespace Microsoft\BingAds\Samples\V13;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V13\CampaignManagement classes that will be used.
use Microsoft\BingAds\V13\CampaignManagement\AccountPropertyName;
use Microsoft\BingAds\V13\CampaignManagement\ConversionGoal;
use Microsoft\BingAds\V13\CampaignManagement\OfflineConversionGoal;
use Microsoft\BingAds\V13\CampaignManagement\OfflineConversion;
use Microsoft\BingAds\V13\CampaignManagement\ConversionGoalRevenue;
use Microsoft\BingAds\V13\CampaignManagement\ConversionGoalType;
use Microsoft\BingAds\V13\CampaignManagement\ConversionGoalRevenueType;
use Microsoft\BingAds\V13\CampaignManagement\ConversionGoalCountType;
use Microsoft\BingAds\V13\CampaignManagement\ConversionGoalStatus;
use Microsoft\BingAds\V13\CampaignManagement\EntityScope;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V13\AuthHelper;
use Microsoft\BingAds\Samples\V13\CampaignManagementExampleHelper;

try
{
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    // A conversion goal cannot be deleted, so even if this is a test
    // please choose an appropriate name accordingly. 
    $offlineConversionGoalName = "My Offline Conversion Goal";
    
    $conversionGoals = array();
    $offlineConversionGoal = new OfflineConversionGoal();
    $offlineConversionGoal->GoalCategory = ConversionGoalCategory::Purchase;
    // Determines how long after a click that you want to count offline conversions.
    $offlineConversionGoal->ConversionWindowInMinutes = 43200;
    // If the count type is 'Unique' then only the first offline conversion will be counted.
    // By setting the count type to 'All', then all offline conversions for the same
    // MicrosoftClickId with different conversion times will be added cumulatively. 
    $offlineConversionGoal->CountType = ConversionGoalCountType::All;
    $offlineConversionGoal->Name = $offlineConversionGoalName;
    // The default conversion currency code and value. Each offline conversion can override it.
    $offlineConversionGoalRevenue = new ConversionGoalRevenue();
    $offlineConversionGoalRevenue->Type = ConversionGoalRevenueType::FixedValue;
    $offlineConversionGoalRevenue->Value = 5.00;
    $offlineConversionGoalRevenue->CurrencyCode = null;
    $offlineConversionGoal->Revenue = $offlineConversionGoalRevenue;
    $offlineConversionGoal->Scope = EntityScope::Account;
    $offlineConversionGoal->Status = ConversionGoalStatus::Active;
    $offlineConversionGoal->TagId = null;
    $encodedOfflineConversionGoal = new SoapVar(
        $offlineConversionGoal, 
        SOAP_ENC_OBJECT, 
        'OfflineConversionGoal', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $conversionGoals[] = $encodedOfflineConversionGoal;

    print("-----\r\nAddConversionGoals:\r\n");
    $addConversionGoalsResponse = CampaignManagementExampleHelper::AddConversionGoals(
        $conversionGoals
    );
    $conversionGoalIds = $addConversionGoalsResponse->ConversionGoalIds;
    print("ConversionGoalIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($conversionGoalIds);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($addConversionGoalsResponse->PartialErrors);

    $conversionGoalTypes = array(ConversionGoalType::OfflineConversion);

    print("-----\r\nGetConversionGoalsByIds:\r\n");
    $getConversionGoalsResponse = CampaignManagementExampleHelper::GetConversionGoalsByIds(
        $conversionGoalIds, 
        $conversionGoalTypes
    );
    $getConversionGoals = $getConversionGoalsResponse->ConversionGoals;
    print("ConversionGoals:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfConversionGoal($getConversionGoals);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($getConversionGoalsResponse->PartialErrors);

    // Every time you create a new OfflineConversionGoal via either the Bing Ads web application or Campaign Management API, 
    // the MSCLKIDAutoTaggingEnabled value of the corresponding AccountProperty is set to 'true' automatically.
    // We can confirm the setting now.

    $accountPropertyNames = array(AccountPropertyName::MSCLKIDAutoTaggingEnabled);

    print("-----\r\nGetAccountProperties:\r\n");
    $getAccountPropertiesResponse = CampaignManagementExampleHelper::GetAccountProperties(
        $accountPropertyNames
    );
    print("AccountProperties:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfAccountProperty($getAccountPropertiesResponse->AccountProperties);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($getAccountPropertiesResponse->PartialErrors);
    
    $offlineConversions = array();
    $offlineConversion = new OfflineConversion();
    // If you do not specify an offline conversion currency code, 
    // then the 'CurrencyCode' element of the goal's 'ConversionGoalRevenue' is used.
    $offlineConversion->ConversionCurrencyCode = "USD";
    // The conversion name must match the 'Name' of the 'OfflineConversionGoal'.
    // If it does not match you won't observe any error, although the offline
    // conversion will not be counted.
    $offlineConversion->ConversionName = $offlineConversionGoalName;
    // The date and time must be in UTC, should align to the date and time of the 
    // recorded click (MicrosoftClickId), and cannot be in the future.
    $offlineConversion->ConversionTime = $_SERVER['REQUEST_TIME'];
    // If you do not specify an offline conversion value, 
    // then the 'Value' element of the goal's 'ConversionGoalRevenue' is used.
    $offlineConversion->ConversionValue = 10;
    $offlineConversion->MicrosoftClickId = "f894f652ea334e739002f7167ab8f8e3";
    $offlineConversions[] = $offlineConversion;

    // After the OfflineConversionGoal is set up, wait two hours before sending Bing Ads the offline conversions. 
    // This example would not succeed in production because we created the goal very recently i.e., 
    // please see above call to AddConversionGoalsAsync. 

    print("-----\r\nApplyOfflineConversions:\r\n");
    $applyOfflineConversionsResponse = CampaignManagementExampleHelper::ApplyOfflineConversions(
        $offlineConversions
    );
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($applyOfflineConversionsResponse->PartialErrors);
}
catch (SoapFault $e)
{
	printf("-----\r\nFault Code: %s\r\nFault String: %s\r\nFault Detail: \r\n", $e->faultcode, $e->faultstring);
    var_dump($e->detail);
	print "-----\r\nLast SOAP request/response:\r\n";
    print $GLOBALS['Proxy']->GetWsdl() . "\r\n";
	print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\r\n";
    print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\r\n";
}
catch (Exception $e)
{
    // Ignore fault exceptions that we already caught.
    if ($e->getPrevious())
    { ; }
    else
    {
        print $e->getCode()." ".$e->getMessage()."\n\n";
        print $e->getTraceAsString()."\n\n";
    }
}
