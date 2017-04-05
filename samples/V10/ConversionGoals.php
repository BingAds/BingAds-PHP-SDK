<?php

namespace Microsoft\BingAds\Samples\V10;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/../AuthHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\v10\CampaignManagement classes that will be used.
use Microsoft\BingAds\v10\CampaignManagement\AddConversionGoalsRequest;
use Microsoft\BingAds\v10\CampaignManagement\GetConversionGoalsByIdsRequest;
use Microsoft\BingAds\v10\CampaignManagement\UpdateConversionGoalsRequest;
use Microsoft\BingAds\v10\CampaignManagement\AddUetTagsRequest;
use Microsoft\BingAds\v10\CampaignManagement\GetUetTagsByIdsRequest;
use Microsoft\BingAds\v10\CampaignManagement\UpdateUetTagsRequest;
use Microsoft\BingAds\v10\CampaignManagement\ConversionGoal;
use Microsoft\BingAds\v10\CampaignManagement\AppInstallGoal;
use Microsoft\BingAds\v10\CampaignManagement\DurationGoal;
use Microsoft\BingAds\v10\CampaignManagement\EventGoal;
use Microsoft\BingAds\v10\CampaignManagement\PagesViewedPerVisitGoal;
use Microsoft\BingAds\v10\CampaignManagement\UrlGoal;
use Microsoft\BingAds\v10\CampaignManagement\ExpressionOperator;
use Microsoft\BingAds\v10\CampaignManagement\ValueOperator;
use Microsoft\BingAds\v10\CampaignManagement\UetTag;
use Microsoft\BingAds\v10\CampaignManagement\ConversionGoalRevenue;
use Microsoft\BingAds\v10\CampaignManagement\ConversionGoalType;
use Microsoft\BingAds\v10\CampaignManagement\ConversionGoalRevenueType;
use Microsoft\BingAds\v10\CampaignManagement\ConversionGoalCountType;
use Microsoft\BingAds\v10\CampaignManagement\ConversionGoalStatus;
use Microsoft\BingAds\v10\CampaignManagement\EntityScope;

// Specify the Microsoft\BingAds\v9\CustomerManagement classes that will be used.
use Microsoft\BingAds\v9\CustomerManagement\GetUserRequest;
use Microsoft\BingAds\v9\CustomerManagement\SearchAccountsRequest;
use Microsoft\BingAds\v9\CustomerManagement\Paging;
use Microsoft\BingAds\v9\CustomerManagement\Predicate;
use Microsoft\BingAds\v9\CustomerManagement\PredicateOperator;
use Microsoft\BingAds\v9\CustomerManagement\Account;
use Microsoft\BingAds\v9\CustomerManagement\User;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\AuthHelper;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CustomerProxy'] = null; 
$GLOBALS['CampaignProxy'] = null; 

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

try
{
    // You should authenticate for Bing Ads production services with a Microsoft Account, 
    // instead of providing the Bing Ads username and password set. 
    
    //AuthHelper::AuthenticateWithOAuth();

    // However, authentication with a Microsoft Account is currently not supported in Sandbox,
    // so it is recommended that you set the UserName and Password in sandbox for testing.

    AuthHelper::AuthenticateWithUserName();

    $GLOBALS['CustomerProxy'] = new ServiceClient(ServiceClientType::CustomerManagementVersion9, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // Set the GetUser request parameter to an empty user identifier to get the current 
    // authenticated Bing Ads user, and then search for all accounts the user may access.

    $user = GetUser(null);

    // For this example we'll use the first account.

    $accounts = SearchAccountsByUserId($user->Id);
    $GLOBALS['AuthorizationData']->AccountId = $accounts->Account[0]->Id;
    $GLOBALS['AuthorizationData']->CustomerId = $accounts->Account[0]->ParentCustomerId;

    $GLOBALS['CampaignProxy'] = new ServiceClient(ServiceClientType::CampaignManagementVersion10, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // Before you can track conversions or target audiences using a remarketing list, 
    // you need to create a UET tag in Bing Ads (web application or API) and then 
    // add the UET tag tracking code to every page of your website. For more information, please see 
    // Universal Event Tracking at https://msdn.microsoft.com/library/bing-ads-universal-event-tracking-guide.aspx.

    // First you should call the GetUetTagsByIds operation to check whether a tag has already been created. 
    // You can leave the TagIds element null or empty to request all UET tags available for the customer.

    $uetTags = GetUetTagsByIds(null)->UetTags;
    
    // If you do not already have a UET tag that can be used, or if you need another UET tag, 
    // call the AddUetTags service operation to create a new UET tag. If the call is successful, 
    // the tracking script that you should add to your website is included in a corresponding 
    // UetTag within the response message. 

    if ($uetTags == null || count($uetTags) < 1)
    {
        $addUetTags = array();
        $uetTag = new UetTag();
        $uetTag->Description = "My First Uet Tag";
        $uetTag->Name = "New Uet Tag";
        $addUetTags[] = $uetTag;
                
        $uetTags = AddUetTags($addUetTags)->UetTags;
    }

    if ($uetTags == null || count($uetTags) < 1)
    {
        printf(
            "You do not have any UET tags registered for CustomerId %s.\n\n", $CustomerId
        );
        return;
    }

    print("List of all UET Tags:\n\n");
    foreach ($uetTags->UetTag as $uetTag)
    {
        OutputUetTag($uetTag);
    }

    // After you retreive the tracking script from the AddUetTags or GetUetTagsByIds operation, 
    // the next step is to add the UET tag tracking code to your website. We recommend that you, 
    // or your website administrator, add it to your entire website in either the head or body sections. 
    // If your website has a master page, then that is the best place to add it because you add it once 
    // and it is included on all pages. For more information, please see 
    // Universal Event Tracking at https://msdn.microsoft.com/library/bing-ads-universal-event-tracking-guide.aspx.


    // We will use the same UET tag for the remainder of this example.

    $tagId = $uetTags->UetTag[0]->Id;

    // Optionally you can update the name and description of a UetTag with the UpdateUetTags operation.

    print("UET Tag BEFORE update:\n\n");
    OutputUetTag($uetTags->UetTag[0]);

    $uetTags = array();
    $updateUetTag = new UetTag();
    $updateUetTag->Description = "Updated Uet Tag Description";
    $updateUetTag->Id = $tagId;
    $updateUetTag->Name = "Updated Uet Tag Name " . $_SERVER['REQUEST_TIME'];
    $uetTags[] = $updateUetTag;
    
    UpdateUetTags($uetTags);

    $tagIds = array();
    $tagIds[] = $tagId;
    $uetTags = GetUetTagsByIds($tagIds)->UetTags;

    print("UET Tag AFTER update:\n\n");
    OutputUetTag($uetTags->UetTag[0]);
    
    // Add conversion goals that depend on the UET Tag Id retreived above.
    // Please note that you cannot delete conversion goals. If you want to stop 
    // tracking conversions for the goal, you can set the goal status to Paused.

    $addConversionGoals = array();
    
    $addDurationGoal = new DurationGoal();
    $addDurationGoal->ConversionWindowInMinutes = 30;
    $addDurationGoal->CountType = ConversionGoalCountType::All;
    $addDurationGoal->MinimumDurationInSeconds = 60;
    $addDurationGoal->Name = "My Duration Goal " . $_SERVER['REQUEST_TIME'];
    $addDurationGoalRevenue = new ConversionGoalRevenue();
    $addDurationGoalRevenue->Type = ConversionGoalRevenueType::FixedValue;
    $addDurationGoalRevenue->Value = 5.00;
    $addDurationGoalRevenue->CurrencyCode = null;
    $addDurationGoal->Revenue = $addDurationGoalRevenue;
    $addDurationGoal->Scope = EntityScope::Account;
    $addDurationGoal->Status = ConversionGoalStatus::Active;
    $addDurationGoal->TagId = $tagId;
    $encodedDurationGoal = new SoapVar($addDurationGoal, SOAP_ENC_OBJECT, 'DurationGoal', $GLOBALS['CampaignProxy']->GetNamespace());
    $addConversionGoals[] = $encodedDurationGoal;
    
    
    $addEventGoal = new EventGoal();
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
    $addEventGoal->Name = "My Event Goal " . $_SERVER['REQUEST_TIME'];
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
    $encodedEventGoal = new SoapVar($addEventGoal, SOAP_ENC_OBJECT, 'EventGoal', $GLOBALS['CampaignProxy']->GetNamespace());
    $addConversionGoals[] = $encodedEventGoal;
        
    $addPagesViewedPerVisitGoal = new PagesViewedPerVisitGoal();
    $addPagesViewedPerVisitGoal->ConversionWindowInMinutes = 30;
    $addPagesViewedPerVisitGoal->CountType = ConversionGoalCountType::All;
    $addPagesViewedPerVisitGoal->MinimumPagesViewed = 5;
    $addPagesViewedPerVisitGoal->Name = "My Pages Viewed Per Visit Goal " . $_SERVER['REQUEST_TIME'];
    $addPagesViewedPerVisitGoalRevenue = new ConversionGoalRevenue();
    $addPagesViewedPerVisitGoalRevenue->Type = ConversionGoalRevenueType::FixedValue;
    $addPagesViewedPerVisitGoalRevenue->Value = 5.00;
    $addPagesViewedPerVisitGoalRevenue->CurrencyCode = null;
    $addPagesViewedPerVisitGoal->Revenue = $addPagesViewedPerVisitGoalRevenue;
    $addPagesViewedPerVisitGoal->Scope = EntityScope::Account;
    $addPagesViewedPerVisitGoal->Status = ConversionGoalStatus::Active;
    $addPagesViewedPerVisitGoal->TagId = $tagId;
    $encodedPagesViewedPerVisitGoal = new SoapVar($addPagesViewedPerVisitGoal, SOAP_ENC_OBJECT, 'PagesViewedPerVisitGoal', $GLOBALS['CampaignProxy']->GetNamespace());
    $addConversionGoals[] = $encodedPagesViewedPerVisitGoal;
    
    $addUrlGoal = new UrlGoal();
    $addUrlGoal->ConversionWindowInMinutes = 30;
    $addUrlGoal->CountType = ConversionGoalCountType::All;
    $addUrlGoal->Name = "My Url Goal " . $_SERVER['REQUEST_TIME'];
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
    $encodedUrlGoal = new SoapVar($addUrlGoal, SOAP_ENC_OBJECT, 'UrlGoal', $GLOBALS['CampaignProxy']->GetNamespace());
    $addConversionGoals[] = $encodedUrlGoal;
    
    $addAppInstallGoal = new AppInstallGoal();
    // You must provide a valid app platform and app store identifier, 
    // otherwise this goal will not be added successfully. 
    $addAppInstallGoal->AppPlatform = "Windows";
    $addAppInstallGoal->AppStoreId = "AppStoreIdGoesHere";
    $addAppInstallGoal->ConversionWindowInMinutes = 30;
    $addAppInstallGoal->CountType = ConversionGoalCountType::All;
    $addAppInstallGoal->Name = "My App Install Goal " . $_SERVER['REQUEST_TIME'];
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
    $encodedAppInstallGoal = new SoapVar($addAppInstallGoal, SOAP_ENC_OBJECT, 'AppInstallGoal', $GLOBALS['CampaignProxy']->GetNamespace());
    $addConversionGoals[] = $encodedAppInstallGoal;
    
    $addConversionGoalsResponse = AddConversionGoals($addConversionGoals);

    // Find the conversion goals that were added successfully. 

    $conversionGoalIds = array();
    foreach ($addConversionGoalsResponse->ConversionGoalIds->long as $goalId)
    {
        if (!empty($goalId))
        {
            $conversionGoalIds[] = $goalId;
        }
    }

    print("List of errors returned from AddConversionGoals (if any):\n\n");
    OutputPartialErrors($addConversionGoalsResponse->PartialErrors);

    $conversionGoalTypes = array(
        ConversionGoalType::AppInstall,
    	ConversionGoalType::Duration,
        ConversionGoalType::Event,
    	ConversionGoalType::PagesViewedPerVisit,
        ConversionGoalType::Url
    );
    
    $getConversionGoals = GetConversionGoalsByIds($conversionGoalIds, $conversionGoalTypes)->ConversionGoals;

    print("List of conversion goals BEFORE update:\n\n");
    foreach ($getConversionGoals->ConversionGoal as $conversionGoal)
    {
        OutputConversionGoal($conversionGoal);
    }

    $updateConversionGoals = array();
    
    $updateDurationGoal = new DurationGoal();
    $updateDurationGoal->ConversionWindowInMinutes = 60;
    $updateDurationGoal->CountType = ConversionGoalCountType::Unique;
    // You can change the conversion goal type e.g. in this example an event goal
    // had been created above at index 1. Now we are using the returned identifier
    // at index 1 to update the type from EventGoal to DurationGoal.
    $updateDurationGoal->Id = $conversionGoalIds[1];
    $updateDurationGoal->MinimumDurationInSeconds = 120;
    $updateDurationGoal->Name = "My Updated Duration Goal " . $_SERVER['REQUEST_TIME'];
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
    $encodedDurationGoal = new SoapVar($updateDurationGoal, SOAP_ENC_OBJECT, 'DurationGoal', $GLOBALS['CampaignProxy']->GetNamespace());
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
    $updateEventGoal->Name = "My Updated Event Goal " . $_SERVER['REQUEST_TIME'];
    $updateEventGoalRevenue = new ConversionGoalRevenue();
    $updateEventGoalRevenue->Type = ConversionGoalRevenueType::FixedValue;
    $updateEventGoalRevenue->Value = 5.00;
    $updateEventGoalRevenue->CurrencyCode = null;
    $updateEventGoal->Revenue = $updateEventGoalRevenue;
    // You must specify the previous settings for Value and ValueOperator,
    // unless you want them deleted during the update conversion goal operation.
    $updateEventGoal->Value = 5.00;
    $updateEventGoal->ValueOperator = ValueOperator::Equals;
    $encodedEventGoal = new SoapVar($updateEventGoal, SOAP_ENC_OBJECT, 'EventGoal', $GLOBALS['CampaignProxy']->GetNamespace());
    $updateConversionGoals[] = $encodedEventGoal;
    
    $updatePagesViewedPerVisitGoal = new PagesViewedPerVisitGoal();
    $updatePagesViewedPerVisitGoal->Id = $conversionGoalIds[2];
    $updatePagesViewedPerVisitGoal->Name = "My Updated Pages Viewed Per Visit Goal " . $_SERVER['REQUEST_TIME'];
    // When updating a conversion goal, if the Revenue element is nil or empty then none 
    // of the nested properties will be updated. However, if this element is not nil or empty 
    // then you are effectively replacing any existing revenue properties. For example to delete 
    // any previous revenue settings, set the Revenue element to an empty ConversionGoalRevenue object.
    $updatePagesViewedPerVisitGoalRevenue = new ConversionGoalRevenue();
    $updatePagesViewedPerVisitGoal->Revenue = $updatePagesViewedPerVisitGoalRevenue;
    $encodedPagesViewedPerVisitGoal = new SoapVar($updatePagesViewedPerVisitGoal, SOAP_ENC_OBJECT, 'PagesViewedPerVisitGoal', $GLOBALS['CampaignProxy']->GetNamespace());
    $updateConversionGoals[] = $encodedPagesViewedPerVisitGoal;
    
    $updateUrlGoal = new UrlGoal();
    $updateUrlGoal->Id = $conversionGoalIds[3];
    $updateUrlGoal->Name = "My Url Goal " . $_SERVER['REQUEST_TIME'];
    // If not specified during update, the previous Url settings are retained.
    $updateUrlGoal->UrlExpression = null;
    $updateUrlGoal->UrlOperator = ExpressionOperator::BeginsWith;
    $encodedUrlGoal = new SoapVar($updateUrlGoal, SOAP_ENC_OBJECT, 'UrlGoal', $GLOBALS['CampaignProxy']->GetNamespace());
    $updateConversionGoals[] = $encodedUrlGoal;
    

    $updateConversionGoalsResponse = UpdateConversionGoals($updateConversionGoals);
    
    print("List of errors returned from AddConversionGoals (if any):\n\n");
    OutputPartialErrors($updateConversionGoalsResponse->PartialErrors);

    $getConversionGoals = GetConversionGoalsByIds($conversionGoalIds, $conversionGoalTypes)->ConversionGoals;

    print("List of conversion goals AFTER update:\n\n");
    foreach ($getConversionGoals->ConversionGoal as $conversionGoal)
    {
        OutputConversionGoal($conversionGoal);
    }

    print("Program execution completed\n"); 

}
catch (SoapFault $e)
{
    // Output the last request/response.
	
    print "\nLast SOAP request/response:\n";
    printf("Fault Code: %s\nFault String: %s\n", $e->faultcode, $e->faultstring);
    print $GLOBALS['Proxy']->GetWsdl() . "\n";
    print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\n";
    print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\n";
	
    // Campaign Management service operations can throw AdApiFaultDetail.
    if (isset($e->detail->AdApiFaultDetail))
    {
        // Log this fault.

        print "The operation failed with the following faults:\n";

        $errors = is_array($e->detail->AdApiFaultDetail->Errors->AdApiError)
        ? $e->detail->AdApiFaultDetail->Errors->AdApiError
        : array('AdApiError' => $e->detail->AdApiFaultDetail->Errors->AdApiError);

        // If the AdApiError array is not null, the following are examples of error codes that may be found.
        foreach ($errors as $error)
        {
            print "AdApiError\n";
            printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

            switch ($error->Code)
            {
                case 105:  // InvalidCredentials
                    break;
                case 117:  // CallRateExceeded
                    break;
                default:
                    print "Please see MSDN documentation for more details about the error code Output above.\n";
                    break;
            }
        }
    }

    // Campaign Management service operations can throw ApiFaultDetail.
    elseif (isset($e->detail->EditorialApiFaultDetail))
    {
        // Log this fault.

        print "The operation failed with the following faults:\n";

        // If the BatchError array is not null, the following are examples of error codes that may be found.
        if (!empty($e->detail->EditorialApiFaultDetail->BatchErrors))
        {
            $errors = is_array($e->detail->EditorialApiFaultDetail->BatchErrors->BatchError)
            ? $e->detail->EditorialApiFaultDetail->BatchErrors->BatchError
            : array('BatchError' => $e->detail->EditorialApiFaultDetail->BatchErrors->BatchError);

            foreach ($errors as $error)
            {
                printf("BatchError at Index: %d\n", $error->Index);
                printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                switch ($error->Code)
                {
                    default:
                        print "Please see MSDN documentation for more details about the error code Output above.\n";
                        break;
                }
            }
        }

        // If the EditorialError array is not null, the following are examples of error codes that may be found.
        if (!empty($e->detail->EditorialApiFaultDetail->EditorialErrors))
        {
            $errors = is_array($e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError)
            ? $e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError
            : array('BatchError' => $e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError);

            foreach ($errors as $error)
            {
                printf("EditorialError at Index: %d\n", $error->Index);
                printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);
                printf("Appealable: %s\nDisapproved Text: %s\nCountry: %s\n", $error->Appealable, $error->DisapprovedText, $error->PublisherCountry);

                switch ($error->Code)
                {
                    default:
                        print "Please see MSDN documentation for more details about the error code Output above.\n";
                        break;
                }
            }
        }

        // If the OperationError array is not null, the following are examples of error codes that may be found.
        if (!empty($e->detail->EditorialApiFaultDetail->OperationErrors))
        {
            $errors = is_array($e->detail->EditorialApiFaultDetail->OperationErrors->OperationError)
            ? $e->detail->EditorialApiFaultDetail->OperationErrors->OperationError
            : array('OperationError' => $e->detail->EditorialApiFaultDetail->OperationErrors->OperationError);

            foreach ($errors as $error)
            {
                print "OperationError\n";
                printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                switch ($error->Code)
                {
                    case 106:   // UserIsNotAuthorized
                        break;
                    case 1102:  // CampaignServiceInvalidAccountId
                        break;
                    default:
                        print "Please see MSDN documentation for more details about the error code Output above.\n";
                        break;
                }
            }
        }
    }
}
catch (Exception $e)
{
    if ($e->getPrevious())
    {
        ; // Ignore fault exceptions that we already caught.
    }
    else
    {
        print $e->getCode()." ".$e->getMessage()."\n\n";
        print $e->getTraceAsString()."\n\n";
    }
}

// Gets a User object by the specified UserId.

function GetUser($userId)
{   
    $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy']; 

    $request = new GetUserRequest();
    $request->UserId = $userId;

    return $GLOBALS['Proxy']->GetService()->GetUser($request)->User;
}

// Searches by UserId for accounts that the user can manage.

function SearchAccountsByUserId($userId)
{
    $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy']; 
  
    // Specify the page index and number of customer results per page.

    $pageInfo = new Paging();
    $pageInfo->Index = 0;    // The first page
    $pageInfo->Size = 100;   // The first 100 accounts for this page of results    

    $predicate = new Predicate();
    $predicate->Field = "UserId";
    $predicate->Operator = PredicateOperator::Equals;
    $predicate->Value = $userId; 

    $request = new SearchAccountsRequest();
    $request->Ordering = null;
    $request->PageInfo = $pageInfo;
    $request->Predicates = array($predicate);

    return $GLOBALS['Proxy']->GetService()->SearchAccounts($request)->Accounts;
}     

function OutputUetTag($uetTag)
{
    if (!empty($uetTag))
    {
        printf("Description: %s\n", $uetTag->Description);
        printf("Id: %s\n", $uetTag->Id);
        printf("Name: %s\n", $uetTag->Name);
        printf("TrackingNoScript: %s\n", $uetTag->TrackingNoScript);
        printf("TrackingScript: %s\n", $uetTag->TrackingScript);
        printf("TrackingStatus: %s\n\n", $uetTag->TrackingStatus);
    }
}

function OutputConversionGoal($conversionGoal)
{
    if (!empty($conversionGoal))
    {
        printf("ConversionWindowInMinutes: %s\n", $conversionGoal->ConversionWindowInMinutes);
        printf("CountType: %s\n", $conversionGoal->CountType);
        printf("Id: %s\n", $conversionGoal->Id);
        printf("Name: %s\n", $conversionGoal->Name);
        OutputConversionGoalRevenue($conversionGoal->Revenue);
        printf("Scope: %s\n", $conversionGoal->Scope);
        printf("Status: %s\n", $conversionGoal->Status);
        printf("TagId: %s\n", $conversionGoal->TagId);
        printf("TrackingStatus: %s\n", $conversionGoal->TrackingStatus);
        if(!empty($conversionGoal->Type)) {
            printf("Type: %s\n", $conversionGoal->Type);
        }

        if ($conversionGoal->Type == "AppInstall")
        {
            printf("AppPlatform: %s\n", $conversionGoal->AppPlatform);
            printf("AppStoreId: %s\n\n", $conversionGoal->AppStoreId);
        }
        else if ($conversionGoal->Type == "Duration")
        {
            printf("MinimumDurationInSeconds: %s\n\n", $conversionGoal->MinimumDurationInSeconds);
        }
        else if ($conversionGoal->Type == "Event")
        {
            printf("ActionExpression: %s\n", $conversionGoal->ActionExpression);
            printf("ActionOperator: %s\n", $conversionGoal->ActionOperator);
            printf("CategoryExpression: %s\n", $conversionGoal->CategoryExpression);
            printf("CategoryOperator: %s\n", $conversionGoal->CategoryOperator);
            printf("LabelExpression: %s\n", $conversionGoal->LabelExpression);
            printf("LabelOperator: %s\n", $conversionGoal->LabelOperator);
            printf("Value: %s\n", $conversionGoal->Value);
            printf("ValueOperator: %s\n\n", $conversionGoal->ValueOperator);
        }
        else if ($conversionGoal->Type == "PagesViewedPerVisit")
        {
            printf("MinimumPagesViewed: %s\n\n", $conversionGoal->MinimumPagesViewed);
        }
        else if ($conversionGoal->Type == "Url")
        {
            printf("UrlExpression: %s\n", $conversionGoal->UrlExpression);
            printf("UrlOperator: %s\n\n", $conversionGoal->UrlOperator);
        }
    }
}

function OutputConversionGoalRevenue($conversionGoalRevenue)
{
    if (!empty($conversionGoalRevenue))
    {
        printf("CurrencyCode: %s\n", $conversionGoalRevenue->CurrencyCode);
        printf("Type: %s\n", $conversionGoalRevenue->Type);
        printf("Value: %s\n", $conversionGoalRevenue->Value);
    }
}

function OutputPartialErrors($partialErrors)
{
    if(!isset($partialErrors->BatchError))
    {
        print("No partial errors\n\n");
        return;
    }
    
    foreach ($partialErrors->BatchError as $error)
    {
        printf("Index: %d\n", $error->Index);
        printf("Code: %d\n", $error->Code);
        printf("ErrorCode: %s\n", $error->ErrorCode);
        printf("Message: %s\n", $error->Message);

        // In the case of an EditorialError, more details are available

        if ($error->Type == "EditorialError" && $error->ErrorCode == "CampaignServiceEditorialValidationError")
        {
            printf("DisapprovedText: %s\n", $error->DisapprovedText);
            printf("Location: %s\n", $error->Location);
            printf("PublisherCountry: %s\n", $error->PublisherCountry);
            printf("ReasonCode: %d\n", $error->ReasonCode);
        }
    }

    print "\n";
}

// Adds one or more conversion goals to the specified account.

function AddConversionGoals($conversionGoals)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new AddConversionGoalsRequest();
    $request->ConversionGoals = $conversionGoals;
    
    return $GLOBALS['CampaignProxy']->GetService()->AddConversionGoals($request);
}

// Gets one or more conversion goals for the specified conversion goal identifiers.

function GetConversionGoalsByIds($conversionGoalIds, $conversionGoalTypes)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new UpdateConversionGoalsRequest();
    $request->ConversionGoalIds = $conversionGoalIds;
    $request->ConversionGoalTypes = $conversionGoalTypes;
    
    return $GLOBALS['CampaignProxy']->GetService()->GetConversionGoalsByIds($request);
}

// Updates one or more conversion goals.

function UpdateConversionGoals($conversionGoals)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new UpdateConversionGoalsRequest();
    $request->ConversionGoals = $conversionGoals;
    
    return $GLOBALS['CampaignProxy']->GetService()->UpdateConversionGoals($request);
}

// Adds one or more UET tags.

function AddUetTags($uetTags)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new AddUetTagsRequest();
    $request->UetTags = $uetTags;
    
    return $GLOBALS['CampaignProxy']->GetService()->AddUetTags($request);
}

// Gets one or more UET Tags.

function GetUetTagsByIds($tagIds)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new GetUetTagsByIdsRequest();
    $request->TagIds = $tagIds;
    
    return $GLOBALS['CampaignProxy']->GetService()->GetUetTagsByIds($request);
}

// Updates one or more UET tags.

function UpdateUetTags($uetTags)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new UpdateUetTagsRequest();
    $request->UetTags = $uetTags;
    
    return $GLOBALS['CampaignProxy']->GetService()->UpdateUetTags($request);
}

?>