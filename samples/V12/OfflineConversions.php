<?php

namespace Microsoft\BingAds\Samples\V12;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V12\CampaignManagement classes that will be used.
use Microsoft\BingAds\V12\CampaignManagement\AccountPropertyName;
use Microsoft\BingAds\V12\CampaignManagement\ConversionGoal;
use Microsoft\BingAds\V12\CampaignManagement\OfflineConversionGoal;
use Microsoft\BingAds\V12\CampaignManagement\OfflineConversion;
use Microsoft\BingAds\V12\CampaignManagement\ConversionGoalRevenue;
use Microsoft\BingAds\V12\CampaignManagement\ConversionGoalType;
use Microsoft\BingAds\V12\CampaignManagement\ConversionGoalRevenueType;
use Microsoft\BingAds\V12\CampaignManagement\ConversionGoalCountType;
use Microsoft\BingAds\V12\CampaignManagement\ConversionGoalStatus;
use Microsoft\BingAds\V12\CampaignManagement\EntityScope;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V12\AuthHelper;
use Microsoft\BingAds\Samples\V12\CampaignManagementExampleHelper;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CampaignManagementProxy'] = null; 

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

try
{
    // Authenticate for Bing Ads services with a Microsoft Account.
    
    AuthHelper::Authenticate();

    $GLOBALS['CampaignManagementProxy'] = new ServiceClient(
        ServiceClientType::CampaignManagementVersion12, 
        $GLOBALS['AuthorizationData'], 
        AuthHelper::GetApiEnvironment());

    $offlineConversionGoalName = "My Offline Conversion Goal " . $_SERVER['REQUEST_TIME'];

    
    $conversionGoals = array();
    $offlineConversionGoal = new OfflineConversionGoal();
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
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    $conversionGoals[] = $encodedOfflineConversionGoal;

    print("Add conversion goal...\n\n");
    $addConversionGoalsResponse = CampaignManagementExampleHelper::AddConversionGoals($conversionGoals);
    $conversionGoalIds = $addConversionGoalsResponse->ConversionGoalIds;
    CampaignManagementExampleHelper::OutputArrayOfLong($conversionGoalIds);
    if(isset($addConversionGoalsResponse->PartialErrors->BatchError)){
        CampaignManagementExampleHelper::OutputArrayOfBatchError($addConversionGoalsResponse->PartialErrors);
    }

    $conversionGoalTypes = array(ConversionGoalType::OfflineConversion);
    $getConversionGoals = CampaignManagementExampleHelper::GetConversionGoalsByIds(
        $conversionGoalIds, 
        $conversionGoalTypes)->ConversionGoals;
    CampaignManagementExampleHelper::OutputArrayOfConversionGoal($getConversionGoals);

    // Every time you create a new OfflineConversionGoal via either the Bing Ads web application or Campaign Management API, 
    // the MSCLKIDAutoTaggingEnabled value of the corresponding AccountProperty is set to 'true' automatically.
    // We can confirm the setting now.

    $accountPropertyNames = array(AccountPropertyName::MSCLKIDAutoTaggingEnabled);

    print("Get account properties...\n\n");
    $getAccountPropertiesResponse = CampaignManagementExampleHelper::GetAccountProperties($accountPropertyNames);
    CampaignManagementExampleHelper::OutputArrayOfAccountProperty($getAccountPropertiesResponse->AccountProperties);

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

    print("Apply the offline conversion...\n\n");
    $applyOfflineConversionsResponse = CampaignManagementExampleHelper::ApplyOfflineConversions($offlineConversions);
    var_dump($offlineConversions);
    
    print("Program execution completed\n"); 
}
catch (SoapFault $e)
{
	print "\nLast SOAP request/response:\n";
    printf("Fault Code: %s\nFault String: %s\n", $e->faultcode, $e->faultstring);
	print $GLOBALS['Proxy']->GetWsdl() . "\n";
	print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\n";
	print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\n";
	
    if (isset($e->detail->AdApiFaultDetail))
    {
        CampaignManagementExampleHelper::OutputAdApiFaultDetail($e->detail->AdApiFaultDetail);
        
    }
    elseif (isset($e->detail->ApiFaultDetail))
    {
        CampaignManagementExampleHelper::OutputApiFaultDetail($e->detail->ApiFaultDetail);
    }
    elseif (isset($e->detail->EditorialApiFaultDetail))
    {
        CampaignManagementExampleHelper::OutputEditorialApiFaultDetail($e->detail->EditorialApiFaultDetail);
    }
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
