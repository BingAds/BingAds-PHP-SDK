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
use Microsoft\BingAds\V13\CampaignManagement\ConversionGoal;
use Microsoft\BingAds\V13\CampaignManagement\AppInstallGoal;
use Microsoft\BingAds\V13\CampaignManagement\DurationGoal;
use Microsoft\BingAds\V13\CampaignManagement\EventGoal;
use Microsoft\BingAds\V13\CampaignManagement\PagesViewedPerVisitGoal;
use Microsoft\BingAds\V13\CampaignManagement\UrlGoal;
use Microsoft\BingAds\V13\CampaignManagement\ExpressionOperator;
use Microsoft\BingAds\V13\CampaignManagement\ValueOperator;
use Microsoft\BingAds\V13\CampaignManagement\UetTag;
use Microsoft\BingAds\V13\CampaignManagement\ConversionGoalAdditionalField;
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

    // Before you can track conversions or target audiences using a remarketing list 
    // you need to create a UET tag, and then add the UET tag tracking code to every page of your website.
    // For more information, please see Universal Event Tracking at https://go.microsoft.com/fwlink/?linkid=829965.

    // First you should call the GetUetTagsByIds operation to check whether a tag has already been created. 
    // You can leave the TagIds element null or empty to request all UET tags available for the customer.

    print("-----\r\nGetUetTagsByIds:\r\n");
    $getUetTagsByIdsResponse = CampaignManagementExampleHelper::GetUetTagsByIds(
        null
    );
    $uetTags = $getUetTagsByIdsResponse->UetTags;
    print("UetTags:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfUetTag($uetTags);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($getUetTagsByIdsResponse->PartialErrors);
    
    // If you do not already have a UET tag that can be used, or if you need another UET tag, 
    // call the AddUetTags service operation to create a new UET tag. If the call is successful, 
    // the tracking script that you should add to your website is included in a corresponding 
    // UetTag within the response message. 

    if(count((array)$uetTags) == 0 || !isset($uetTags->UetTag))
    //if ($uetTags == null || count($uetTags->UetTag) < 1)
    {
        $addUetTags = array();
        $uetTag = new UetTag();
        $uetTag->Description = "My First Uet Tag";
        $uetTag->Name = "New Uet Tag";
        $addUetTags[] = $uetTag;
                
        print("-----\r\nAddUetTags:\r\n");
        $addUetTagsResponse = CampaignManagementExampleHelper::AddUetTags(
            $addUetTags
        );
        $uetTags = $addUetTagsResponse->UetTags;
        print("UetTags:\r\n");
        CampaignManagementExampleHelper::OutputArrayOfUetTag($uetTags);
        print("PartialErrors:\r\n");
        CampaignManagementExampleHelper::OutputArrayOfBatchError($addUetTagsResponse->PartialErrors);
    }

    if ($uetTags == null || count($uetTags->UetTag) < 1)
    {
        printf(
            "You do not have any UET tags registered for CustomerId %s.\r\n", 
            $CustomerId
        );
        return;
    }

    // After you retreive the tracking script from the AddUetTags or GetUetTagsByIds operation, 
    // the next step is to add the UET tag tracking code to your website.
    // We will use the same UET tag for the remainder of this example.

    $tagId = $uetTags->UetTag[0]->Id;                              
    
    // Add conversion goals that depend on the UET Tag Id retreived above.
    // Please note that you cannot delete conversion goals. If you want to stop 
    // tracking conversions for the goal, you can set the goal status to Paused.

    $addConversionGoals = array();
    
    $addDurationGoal = new DurationGoal();
    $addDurationGoal->ConversionWindowInMinutes = 30;
    $addDurationGoal->CountType = ConversionGoalCountType::All;
    $addDurationGoal->MinimumDurationInSeconds = 60;
    $addDurationGoal->Name = "My Duration Goal";
    $addDurationGoalRevenue = new ConversionGoalRevenue();
    $addDurationGoalRevenue->Type = ConversionGoalRevenueType::FixedValue;
    $addDurationGoalRevenue->Value = 5.00;
    $addDurationGoalRevenue->CurrencyCode = null;
    $addDurationGoal->Revenue = $addDurationGoalRevenue;
    $addDurationGoal->Scope = EntityScope::Account;
    $addDurationGoal->Status = ConversionGoalStatus::Active;
    $addDurationGoal->TagId = $tagId;
    $encodedDurationGoal = new SoapVar(
        $addDurationGoal, 
        SOAP_ENC_OBJECT, 
        'DurationGoal', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $addConversionGoals[] = $encodedDurationGoal;    
    
    $addEventGoal = new EventGoal();
    $addEventGoal->GoalCategory = ConversionGoalCategory::Purchase;
    // The type of user interaction you want to track.
    $addEventGoal->ActionExpression = "play";
    $addEventGoal->ActionOperator = ExpressionOperator::Contains;
    // The category of event you want to track. 
    $addEventGoal->CategoryExpression = "video";
    $addEventGoal->CategoryOperator = ExpressionOperator::Contains;
    $addEventGoal->ConversionWindowInMinutes = 30;
    $addEventGoal->CountType = ConversionGoalCountType::All;
    // The name of the element that caused the action.
    $addEventGoal->LabelExpression = "trailer";
    $addEventGoal->LabelOperator = ExpressionOperator::Contains;
    $addEventGoal->Name = "My Event Goal";
    $addEventGoalRevenue = new ConversionGoalRevenue();
    $addEventGoalRevenue->Type = ConversionGoalRevenueType::FixedValue;
    $addEventGoalRevenue->Value = 5.00;
    $addEventGoalRevenue->CurrencyCode = null;
    $addEventGoal->Revenue = $addEventGoalRevenue;
    $addEventGoal->Scope = EntityScope::Account;
    $addEventGoal->Status = ConversionGoalStatus::Active;
    $addEventGoal->TagId = $tagId;
    // A numerical value associated with that event. 
    // Could be length of the video played etc.
    $addEventGoal->Value = 5.00;
    $addEventGoal->ValueOperator = ValueOperator::Equals;
    $encodedEventGoal = new SoapVar(
        $addEventGoal, 
        SOAP_ENC_OBJECT, 
        'EventGoal', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $addConversionGoals[] = $encodedEventGoal;
        
    $addPagesViewedPerVisitGoal = new PagesViewedPerVisitGoal();
    $addPagesViewedPerVisitGoal->ConversionWindowInMinutes = 30;
    $addPagesViewedPerVisitGoal->CountType = ConversionGoalCountType::All;
    $addPagesViewedPerVisitGoal->MinimumPagesViewed = 5;
    $addPagesViewedPerVisitGoal->Name = "My Pages Viewed Per Visit Goal";
    $addPagesViewedPerVisitGoalRevenue = new ConversionGoalRevenue();
    $addPagesViewedPerVisitGoalRevenue->Type = ConversionGoalRevenueType::FixedValue;
    $addPagesViewedPerVisitGoalRevenue->Value = 5.00;
    $addPagesViewedPerVisitGoalRevenue->CurrencyCode = null;
    $addPagesViewedPerVisitGoal->Revenue = $addPagesViewedPerVisitGoalRevenue;
    $addPagesViewedPerVisitGoal->Scope = EntityScope::Account;
    $addPagesViewedPerVisitGoal->Status = ConversionGoalStatus::Active;
    $addPagesViewedPerVisitGoal->TagId = $tagId;
    $encodedPagesViewedPerVisitGoal = new SoapVar(
        $addPagesViewedPerVisitGoal, 
        SOAP_ENC_OBJECT, 
        'PagesViewedPerVisitGoal', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $addConversionGoals[] = $encodedPagesViewedPerVisitGoal;
    
    $addUrlGoal = new UrlGoal();
    $addUrlGoal->GoalCategory = ConversionGoalCategory::Purchase;
    $addUrlGoal->ConversionWindowInMinutes = 30;
    $addUrlGoal->CountType = ConversionGoalCountType::All;
    $addUrlGoal->Name = "My Url Goal";
    $addUrlGoalRevenue = new ConversionGoalRevenue();
    $addUrlGoalRevenue->Type = ConversionGoalRevenueType::FixedValue;
    $addUrlGoalRevenue->Value = 5.00;
    $addUrlGoalRevenue->CurrencyCode = null;
    $addUrlGoal->Revenue = $addUrlGoalRevenue;
    $addUrlGoal->Scope = EntityScope::Account;
    $addUrlGoal->Status = ConversionGoalStatus::Active;
    $addUrlGoal->UrlExpression = "contoso";
    $addUrlGoal->UrlOperator = ExpressionOperator::Contains;
    $addUrlGoal->TagId = $tagId;
    $encodedUrlGoal = new SoapVar(
        $addUrlGoal, 
        SOAP_ENC_OBJECT, 
        'UrlGoal', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $addConversionGoals[] = $encodedUrlGoal;
    
    $addAppInstallGoal = new AppInstallGoal();
    // You must provide a valid app platform and app store identifier, 
    // otherwise this goal will not be added successfully. 
    $addAppInstallGoal->AppPlatform = "Windows";
    $addAppInstallGoal->AppStoreId = "AppStoreIdGoesHere";
    $addAppInstallGoal->ConversionWindowInMinutes = 30;
    $addAppInstallGoal->CountType = ConversionGoalCountType::All;
    $addAppInstallGoal->Name = "My App Install Goal";
    $addAppInstallGoalRevenue = new ConversionGoalRevenue();
    $addAppInstallGoalRevenue->Type = ConversionGoalRevenueType::FixedValue;
    $addAppInstallGoalRevenue->Value = 5.00;
    $addAppInstallGoalRevenue->CurrencyCode = null;
    $addAppInstallGoal->Revenue = $addAppInstallGoalRevenue;
    // Account scope is not supported for app install goals. You can
    // set scope to Customer or don't set it for the same result.
    $addAppInstallGoal->Scope = EntityScope::Customer;
    $addAppInstallGoal->Status = ConversionGoalStatus::Active;
    // The TagId is inherited from the ConversionGoal base class,
    // however, App Install goals do not use a UET tag.
    $addAppInstallGoal->TagId = null;
    $encodedAppInstallGoal = new SoapVar(
        $addAppInstallGoal, 
        SOAP_ENC_OBJECT, 
        'AppInstallGoal', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $addConversionGoals[] = $encodedAppInstallGoal;
    
    print("-----\r\nAddConversionGoals:\r\n");
    $addConversionGoalsResponse = CampaignManagementExampleHelper::AddConversionGoals(
        $addConversionGoals
    );
    print("ConversionGoalIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($addConversionGoalsResponse->ConversionGoalIds);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($addConversionGoalsResponse->PartialErrors);

    // Find the conversion goals that were added successfully. 

    $conversionGoalIds = array();
    foreach ($addConversionGoalsResponse->ConversionGoalIds->long as $goalId)
    {
        if (!empty($goalId))
        {
            $conversionGoalIds[] = $goalId;
        }
    }

    $conversionGoalTypes = array(
        ConversionGoalType::AppInstall,
    	ConversionGoalType::Duration,
        ConversionGoalType::Event,
    	ConversionGoalType::PagesViewedPerVisit,
        ConversionGoalType::Url
    );
    
    $returnAdditionalFields = array(
        ConversionGoalAdditionalField::ViewThroughConversionWindowInMinutes,
    	ConversionGoalAdditionalField::IsExternallyAttributed,
        ConversionGoalAdditionalField::GoalCategory
    );

    print("-----\r\nGetConversionGoalsByIds:\r\n");
    $getConversionGoalsByIdsResponse = CampaignManagementExampleHelper::GetConversionGoalsByIds(
        $conversionGoalIds, 
        $conversionGoalTypes,
        $returnAdditionalFields
    );
    $getConversionGoals = $getConversionGoalsByIdsResponse->ConversionGoals;
    print("ConversionGoals:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfConversionGoal($getConversionGoals);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($getConversionGoalsByIdsResponse->PartialErrors);    

    // Update the conversion goals
    
    $updateConversionGoals = array();
    
    $updateDurationGoal = new DurationGoal();
    $updateDurationGoal->ConversionWindowInMinutes = 60;
    $updateDurationGoal->CountType = ConversionGoalCountType::Unique;
    // You can change the conversion goal type e.g. in this example an event goal
    // had been created above at index 1. Now we are using the returned identifier
    // at index 1 to update the type from EventGoal to DurationGoal.
    $updateDurationGoal->Id = $conversionGoalIds[1];
    $updateDurationGoal->MinimumDurationInSeconds = 120;
    $updateDurationGoal->Name = "My Updated Duration Goal";
    $updateDurationGoalRevenue = new ConversionGoalRevenue();
    $updateDurationGoalRevenue->Type = ConversionGoalRevenueType::FixedValue;
    $updateDurationGoalRevenue->Value = 10.00;
    $updateDurationGoalRevenue->CurrencyCode = null;
    $updateDurationGoal->Revenue = $updateDurationGoalRevenue;
    // The Scope cannot be updated, even if you update the goal type.
    // You can either send the same value or leave Scope empty.
    $updateDurationGoal->Scope = EntityScope::Account;
    $updateDurationGoal->Status = ConversionGoalStatus::Paused;
    // You can update the tag as needed. In this example we will explicitly use the same UET tag.
    // To keep the UET tag unchanged, you can also leave this element nil or empty.
    $updateDurationGoal->TagId = $tagId;
    $encodedDurationGoal = new SoapVar(
        $updateDurationGoal, 
        SOAP_ENC_OBJECT, 
        'DurationGoal', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $updateConversionGoals[] = $encodedDurationGoal;
    
    $updateEventGoal = new EventGoal();
    // For both add and update conversion goal operations, you must include one or more  
    // of the following event operator pairs: 
    // (ActionOperator and ActionExpression), (CategoryOperator and CategoryExpression), 
    // (LabelOperator and LabelExpression), (ValueOperator and Value).
    // Each event pair (e.g. ActionOperator and ActionExpression) is optional if you include 
    // one or more of the other events.

    // For example if you do not include ActionOperator and ActionExpression during update, 
    // any existing ActionOperator and ActionExpression settings will be deleted.
    $updateEventGoal->ActionExpression = null;
    $updateEventGoal->ActionOperator = null;
    $updateEventGoal->CategoryExpression = "video";
    $updateEventGoal->CategoryOperator = ExpressionOperator::Equals;
    $updateEventGoal->Id = $conversionGoalIds[0];
    $updateEventGoal->ConversionWindowInMinutes = 30;
    $updateEventGoal->CountType = ConversionGoalCountType::All;
    // You cannot update the expression unless you also include the expression.
    // Likewise, you cannot update the operator unless you also include the expression.
    // The following attempt to update LabelOperator will result in an error.
    $updateEventGoal->LabelExpression = null;
    $updateEventGoal->LabelOperator = ExpressionOperator::Equals;
    $updateEventGoal->Name = "My Updated Event Goal";
    $updateEventGoalRevenue = new ConversionGoalRevenue();
    $updateEventGoalRevenue->Type = ConversionGoalRevenueType::FixedValue;
    $updateEventGoalRevenue->Value = 5.00;
    $updateEventGoalRevenue->CurrencyCode = null;
    $updateEventGoal->Revenue = $updateEventGoalRevenue;
    // You must specify the previous settings for Value and ValueOperator,
    // unless you want them deleted during the update conversion goal operation.
    $updateEventGoal->Value = 5.00;
    $updateEventGoal->ValueOperator = ValueOperator::Equals;
    $encodedEventGoal = new SoapVar(
        $updateEventGoal, 
        SOAP_ENC_OBJECT, 
        'EventGoal', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $updateConversionGoals[] = $encodedEventGoal;
    
    $updatePagesViewedPerVisitGoal = new PagesViewedPerVisitGoal();
    $updatePagesViewedPerVisitGoal->Id = $conversionGoalIds[2];
    $updatePagesViewedPerVisitGoal->Name = "My Updated Pages Viewed Per Visit Goal";
    // When updating a conversion goal, if the Revenue element is nil or empty then none 
    // of the nested properties will be updated. However, if this element is not nil or empty 
    // then you are effectively replacing any existing revenue properties. For example to delete 
    // any previous revenue settings, set the Revenue element to an empty ConversionGoalRevenue object.
    $updatePagesViewedPerVisitGoalRevenue = new ConversionGoalRevenue();
    $updatePagesViewedPerVisitGoal->Revenue = $updatePagesViewedPerVisitGoalRevenue;
    $encodedPagesViewedPerVisitGoal = new SoapVar(
        $updatePagesViewedPerVisitGoal, 
        SOAP_ENC_OBJECT, 
        'PagesViewedPerVisitGoal', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $updateConversionGoals[] = $encodedPagesViewedPerVisitGoal;
    
    $updateUrlGoal = new UrlGoal();
    $updateUrlGoal->Id = $conversionGoalIds[3];
    $updateUrlGoal->Name = "My Updated Url Goal";
    // If not specified during update, the previous Url settings are retained.
    // If the expression is set, then the operator must also be set, and vice versa.
    $updateUrlGoal->UrlExpression = "contoso";
    $updateUrlGoal->UrlOperator = ExpressionOperator::BeginsWith;
    $encodedUrlGoal = new SoapVar(
        $updateUrlGoal, 
        SOAP_ENC_OBJECT, 
        'UrlGoal', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $updateConversionGoals[] = $encodedUrlGoal;
    
    print("-----\r\nUpdateConversionGoals:\r\n");
    $updateConversionGoalsResponse = CampaignManagementExampleHelper::UpdateConversionGoals(
        $updateConversionGoals
    );
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($updateConversionGoalsResponse->PartialErrors);

    print("-----\r\nGetConversionGoalsByIds:\r\n");
    $getConversionGoalsByIdsResponse = CampaignManagementExampleHelper::GetConversionGoalsByIds(
        $conversionGoalIds, 
        $conversionGoalTypes,
        null
    );
    $getConversionGoals = $getConversionGoalsByIdsResponse->ConversionGoals;
    print("ConversionGoals:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfConversionGoal($getConversionGoals);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($getConversionGoalsByIdsResponse->PartialErrors);    
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
        print $e->getCode()." ".$e->getMessage()."\r\n";
        print $e->getTraceAsString()."\r\n";
    }
}
