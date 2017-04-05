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
use Microsoft\BingAds\v10\CampaignManagement\AddCampaignsRequest;
use Microsoft\BingAds\v10\CampaignManagement\DeleteCampaignsRequest;
use Microsoft\BingAds\v10\CampaignManagement\AddAdGroupsRequest;
use Microsoft\BingAds\v10\CampaignManagement\AddTargetsToLibraryRequest;
use Microsoft\BingAds\v10\CampaignManagement\GetTargetsByIdsRequest;
use Microsoft\BingAds\v10\CampaignManagement\UpdateTargetsInLibraryRequest;
use Microsoft\BingAds\v10\CampaignManagement\GetTargetsInfoFromLibraryRequest;
use Microsoft\BingAds\v10\CampaignManagement\DeleteTargetFromAdGroupRequest;
use Microsoft\BingAds\v10\CampaignManagement\DeleteTargetFromCampaignRequest;
use Microsoft\BingAds\v10\CampaignManagement\DeleteTargetsFromLibraryRequest;
use Microsoft\BingAds\v10\CampaignManagement\SetTargetToAdGroupRequest;
use Microsoft\BingAds\v10\CampaignManagement\SetTargetToCampaignRequest;
use Microsoft\BingAds\v10\CampaignManagement\Campaign;
use Microsoft\BingAds\v10\CampaignManagement\AdGroup;
use Microsoft\BingAds\v10\CampaignManagement\AdGroupStatus;
use Microsoft\BingAds\v10\CampaignManagement\Target;
use Microsoft\BingAds\v10\CampaignManagement\AgeTarget;
use Microsoft\BingAds\v10\CampaignManagement\AgeTargetBid;
use Microsoft\BingAds\v10\CampaignManagement\DayTimeTarget;
use Microsoft\BingAds\v10\CampaignManagement\DayTimeTargetBid;
use Microsoft\BingAds\v10\CampaignManagement\DeviceOSTarget;
use Microsoft\BingAds\v10\CampaignManagement\DeviceOSTargetBid;
use Microsoft\BingAds\v10\CampaignManagement\GenderTarget;
use Microsoft\BingAds\v10\CampaignManagement\GenderTargetBid;
use Microsoft\BingAds\v10\CampaignManagement\LocationTarget;
use Microsoft\BingAds\v10\CampaignManagement\LocationTargetBid;
use Microsoft\BingAds\v10\CampaignManagement\CityTarget;
use Microsoft\BingAds\v10\CampaignManagement\CityTargetBid;
use Microsoft\BingAds\v10\CampaignManagement\CountryTarget;
use Microsoft\BingAds\v10\CampaignManagement\CountryTargetBid;
use Microsoft\BingAds\v10\CampaignManagement\MetroAreaTarget;
use Microsoft\BingAds\v10\CampaignManagement\MetroAreaTargetBid;
use Microsoft\BingAds\v10\CampaignManagement\PostalCodeTarget;
use Microsoft\BingAds\v10\CampaignManagement\PostalCodeTargetBid;
use Microsoft\BingAds\v10\CampaignManagement\RadiusTarget;
use Microsoft\BingAds\v10\CampaignManagement\RadiusTargetBid;
use Microsoft\BingAds\v10\CampaignManagement\StateTarget;
use Microsoft\BingAds\v10\CampaignManagement\StateTargetBid;
use Microsoft\BingAds\v10\CampaignManagement\TargetInfo;
use Microsoft\BingAds\v10\CampaignManagement\Bid;
use Microsoft\BingAds\v10\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\v10\CampaignManagement\AdDistribution;
use Microsoft\BingAds\v10\CampaignManagement\BiddingModel;
use Microsoft\BingAds\v10\CampaignManagement\PricingModel;
use Microsoft\BingAds\v10\CampaignManagement\Date;
use Microsoft\BingAds\v10\CampaignManagement\Day;
use Microsoft\BingAds\v10\CampaignManagement\Minute;
use Microsoft\BingAds\v10\CampaignManagement\HourRange;
use Microsoft\BingAds\v10\CampaignManagement\AgeRange;
use Microsoft\BingAds\v10\CampaignManagement\GenderType;
use Microsoft\BingAds\v10\CampaignManagement\DistanceUnit;
use Microsoft\BingAds\v10\CampaignManagement\IntentOption;

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

    // Specify one or more campaigns.
    
    $campaigns = array();
   
    $campaign = new Campaign();
    $campaign->Name = "Winter Clothing " . $_SERVER['REQUEST_TIME'];
    $campaign->Description = "Winter clothing line.";
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->DailyBudget = 50.00;
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";
    $campaign->DaylightSaving = true;

    $campaigns[] = $campaign;

    // Specify one or more ad groups.

    $adGroups = array();

    date_default_timezone_set('UTC');
    $endDate = new Date();
    $endDate->Day = 31;
    $endDate->Month = 12;
    $endDate->Year = date("Y");

    $adGroup = new AdGroup();
    $adGroup->Name = "Women's Heated Ski Glove Sale";
    $adGroup->AdDistribution = AdDistribution::Search;
    $adGroup->BiddingModel = BiddingModel::Keyword;
    $adGroup->PricingModel = PricingModel::Cpc;
    $adGroup->StartDate = null;
    $adGroup->EndDate = $endDate;
    $adGroup->SearchBid = new Bid();
    $adGroup->SearchBid->Amount = 0.10;
    $adGroup->Language = "English";
    $adGroup->Status = AdGroupStatus::Paused;
    
    $adGroups[] = $adGroup;

    // Add the campaign, ad group, keywords, and ads
    
    $addCampaignsResponse = AddCampaigns($GLOBALS['AuthorizationData']->AccountId, $campaigns);
    $campaignIds = $addCampaignsResponse->CampaignIds->long;
    $campaignErrors = $addCampaignsResponse->PartialErrors;
    if(isset($addCampaignsResponse->PartialErrors->BatchError)){
        $campaignErrors = $addCampaignsResponse->PartialErrors->BatchError;
    }

    $addAdGroupsResponse = AddAdGroups($campaignIds[0], $adGroups);
    $adGroupIds = $addAdGroupsResponse->AdGroupIds->long;
    $adGroupErrors = $addAdGroupsResponse->PartialErrors;
    if(isset($addAdGroupsResponse->PartialErrors->BatchError)){
        $adGroupErrors = $addAdGroupsResponse->PartialErrors->BatchError;
    }

    // Output the new assigned entity identifiers, as well as any partial errors
  
    OutputCampaignsWithPartialErrors($campaigns, $campaignIds, $campaignErrors);
    OutputCampaignsWithPartialErrors($adGroups, $adGroupIds, $adGroupErrors);

    // Create targets to associate with the campaign and ad group.

    $campaignTarget = new Target();
    $campaignTarget->Name = "My Campaign Target";

    $campaignDayTimeTarget = new DayTimeTarget();
    $campaignDayTimeTargetBid = new DayTimeTargetBid();
    $campaignDayTimeTargetBid->BidAdjustment = 10;
    $campaignDayTimeTargetBid->Day = Day::Monday;
    $campaignDayTimeTargetBid->FromHour = 1;
    $campaignDayTimeTargetBid->ToHour = 12;
    $campaignDayTimeTargetBid->FromMinute = Minute::Zero;
    $campaignDayTimeTargetBid->ToMinute = Minute::FortyFive;
    $campaignDayTimeTarget->Bids = array($campaignDayTimeTargetBid);
    $campaignTarget->DayTime = $campaignDayTimeTarget;

    $campaignDeviceOSTarget = new DeviceOSTarget();
    $campaignDeviceOSTargetBid = new DeviceOSTargetBid();
    $campaignDeviceOSTargetBid->BidAdjustment = 10;
    $campaignDeviceOSTargetBid->DeviceName = "Tablets";
    $campaignDeviceOSTarget->Bids = array($campaignDeviceOSTargetBid);
    $campaignTarget->DeviceOS = $campaignDeviceOSTarget;

    $campaignLocationTarget = new LocationTarget();
    $campaignLocationTarget->IntentOption = IntentOption::PeopleSearchingForOrViewingPages;

    $campaignRadiusTarget = new RadiusTarget();
    $campaignRadiusTargetBid = new RadiusTargetBid();
    $campaignRadiusTargetBid->BidAdjustment = 50;
    $campaignRadiusTargetBid->LatitudeDegrees = 47.755367;
    $campaignRadiusTargetBid->LongitudeDegrees = -122.091827;
    $campaignRadiusTargetBid->Radius = 5;
    $campaignRadiusTargetBid->RadiusUnit = DistanceUnit::Miles;
    $campaignRadiusTargetBid->IsExcluded = false;
    $campaignRadiusTarget->Bids = array($campaignRadiusTargetBid);
    $campaignLocationTarget->RadiusTarget = $campaignRadiusTarget;
    $campaignTarget->Location = $campaignLocationTarget;
    
    $adGroupTarget = new Target();
    $adGroupTarget->Name = "My Ad Group Target";

    $adGroupDayTimeTarget = new DayTimeTarget();
    $adGroupDayTimeTargetBid = new DayTimeTargetBid();
    $adGroupDayTimeTargetBid->BidAdjustment = 10;
    $adGroupDayTimeTargetBid->Day = Day::Friday;
    $adGroupDayTimeTargetBid->FromHour = 1;
    $adGroupDayTimeTargetBid->ToHour = 12;
    $adGroupDayTimeTargetBid->FromMinute = Minute::Zero;
    $adGroupDayTimeTargetBid->ToMinute = Minute::FortyFive;
    $adGroupDayTimeTarget->Bids = array($adGroupDayTimeTargetBid);
    $adGroupTarget->DayTime = $adGroupDayTimeTarget;

    // Each customer has a target library that can be used to set up targeting for any campaign
    // or ad group within the specified customer. 

    // Add a target to the library and associate it with the campaign.
    $campaignTargetId = AddTargetsToLibrary(array($campaignTarget))->long[0];
    printf("Added Target Id: %s\n\n", $campaignTargetId);
    SetTargetToCampaign($campaignIds[0], $campaignTargetId);
    printf("Associated CampaignId %s with TargetId %s.\n\n", $campaignIds[0], $campaignTargetId);

    // Get and print the Target with the GetTargetsByIds operation
    print "Get Campaign Target: \n\n";
    $targets = GetTargetsByIds(array($campaignTargetId));
    OutputTarget($targets->Target[0]);

    // Add a target to the library and associate it with the ad group.
    $adGroupTargetId = AddTargetsToLibrary(array($adGroupTarget))->long[0];
    printf("Added Target Id: %s\n\n", $adGroupTargetId);
    SetTargetToAdGroup($adGroupIds[0], $adGroupTargetId);
    printf("Associated AdGroupId %s with TargetId %s.\n\n", $adGroupIds[0], $adGroupTargetId);

    // Get and print the Target with the GetTargetsByIds operation
    print "Get AdGroup Target: \n\n";
    $targets = GetTargetsByIds(array($adGroupTargetId));
    OutputTarget($targets->Target[0]);

    // Update the ad group's Target object with additional target types.
    // Existing target types such as DayTime must be specified 
    // or they will not be included in the updated target.

    $target = new Target();
    $target->Id = $adGroupTargetId;
    $target->Name = "My Target";

    $ageTarget = new AgeTarget();
    $ageTargetBid = new AgeTargetBid();
    $ageTargetBid->BidAdjustment = 10;
    $ageTargetBid->Age = AgeRange::EighteenToTwentyFive;
    $ageTarget->Bids = array($ageTargetBid);
    $target->Age = $ageTarget;

    $dayTimeTarget = new DayTimeTarget();
    $dayTimeTargetBid = new DayTimeTargetBid();
    $dayTimeTargetBid->BidAdjustment = 10;
    $dayTimeTargetBid->Day = Day::Friday;
    $dayTimeTargetBid->FromHour = 1;
    $dayTimeTargetBid->ToHour = 12;
    $dayTimeTargetBid->FromMinute = Minute::Zero;
    $dayTimeTargetBid->ToMinute = Minute::FortyFive;
    $dayTimeTarget->Bids = array($dayTimeTargetBid);
    $target->DayTime = $dayTimeTarget;

    $deviceOSTarget = new DeviceOSTarget();
    $deviceOSTargetBid = new DeviceOSTargetBid();
    $deviceOSTargetBid->BidAdjustment = 10;
    $deviceOSTargetBid->DeviceName = "Tablets";
    $deviceOSTarget->Bids = array($deviceOSTargetBid);
    $target->DeviceOS = $deviceOSTarget;

    $genderTarget = new GenderTarget();
    $genderTargetBid = new GenderTargetBid();
    $genderTargetBid->BidAdjustment = 10;
    $genderTargetBid->Gender = GenderType::Female;
    $genderTarget->Bids = array($genderTargetBid);
    $target->Gender = $genderTarget;

    $locationTarget = new LocationTarget();
    $locationTarget->IntentOption = IntentOption::PeopleSearchingForOrViewingPages;

    $countryTarget = new CountryTarget();
    $countryTargetBid = new CountryTargetBid();
    $countryTargetBid->BidAdjustment = 10;
    $countryTargetBid->CountryAndRegion = "US";
    $countryTargetBid->IsExcluded = false;
    $countryTarget->Bids = array($countryTargetBid);
    $locationTarget->CountryTarget = $countryTarget;

    $postalCodeTarget = new PostalCodeTarget();
    $postalCodeTargetBid = new PostalCodeTargetBid();
    $postalCodeTargetBid->BidAdjustment = 10;
    $postalCodeTargetBid->PostalCode = "98052, WA US";
    $postalCodeTargetBid->IsExcluded = false;
    $postalCodeTarget->Bids = array($postalCodeTargetBid);
    $locationTarget->PostalCodeTarget = $postalCodeTarget;

    $radiusTarget = new RadiusTarget();
    $radiusTargetBid = new RadiusTargetBid();
    $radiusTargetBid->BidAdjustment = 50;
    $radiusTargetBid->LatitudeDegrees = 47.755367;
    $radiusTargetBid->LongitudeDegrees = -122.091827;
    $radiusTargetBid->Radius = 11;
    $radiusTargetBid->RadiusUnit = DistanceUnit::Miles;
    $radiusTargetBid->IsExcluded = false;
    $radiusTarget->Bids = array($radiusTargetBid);
    $locationTarget->RadiusTarget = $radiusTarget;
    $target->Location = $locationTarget;
    
    // Update the Target object associated with the ad group. 
    UpdateTargetsInLibrary(array($target));
    print "Updated the ad group level target as a Target object.\n\n";

    // Get and print the Target with the GetTargetsByIds operation
    print "Get Campaign Target: \n\n";
    $targets = GetTargetsByIds(array($campaignTargetId));
    OutputTarget($targets->Target[0]);

    // Get and print the Target with the GetTargetsByIds operation
    print "Get AdGroup Target: \n\n";
    $targets = GetTargetsByIds(array($adGroupTargetId));
    OutputTarget($targets->Target[0]);

    // Get all new and existing targets in the customer library, whether or not they are
    // associated with campaigns or ad groups.

    $allTargetsInfo = GetTargetsInfoFromLibrary();
    print "All target identifiers and names from the customer library: \n\n";
    OutputTargetsInfo($allTargetsInfo->TargetInfo);
       
    // Delete the campaign, ad group, and targets that were previously added. 
    // DeleteCampaigns would remove the campaign and ad group, as well as the association
    // between ad groups and campaigns. To explicitly delete the association between an entity 
    // and the target, use DeleteTargetFromCampaign and DeleteTargetFromAdGroup respectively.

    DeleteTargetFromCampaign($campaignIds[0]);
    DeleteTargetFromAdGroup($adGroupIds[0]);

    DeleteCampaigns($GLOBALS['AuthorizationData']->AccountId, array($campaignIds[0]));
    printf("Deleted CampaignId %s\n\n", $campaignIds[0]);

    // DeleteCampaigns deletes the association between the campaign and target, but does not 
    // delete the target from the customer library. 
    // Call the DeleteTargetsFromLibrary operation for each target that you want to delete. 
    // You must specify an array with exactly one item.

    DeleteTargetsFromLibrary(array($campaignTargetId));
    printf("Deleted TargetId %s\n\n", $campaignTargetId);

    DeleteTargetsFromLibrary(array($adGroupTargetId));
    printf("Deleted TargetId %s\n\n", $adGroupTargetId);
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
            printf("Code: %s\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

            switch ($error->Code)
            {
                default:
                    print "Please see MSDN documentation for more details about the error code output above.\n";
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
                printf("BatchError at Index: %s\n", $error->Index);
                printf("Code: %s\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                switch ($error->Code)
                {
                    default:
                        print "Please see MSDN documentation for more details about the error code output above.\n";
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
                printf("EditorialError at Index: %s\n", $error->Index);
                printf("Code: %s\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);
                printf("Appealable: %s\nDisapproved Text: %s\nCountry: %s\n", $error->Appealable, $error->DisapprovedText, $error->PublisherCountry);

                switch ($error->Code)
                {
                    default:
                        print "Please see MSDN documentation for more details about the error code output above.\n";
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
                printf("Code: %s\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                switch ($error->Code)
                {
                    default:
                        print "Please see MSDN documentation for more details about the error code output above.\n";
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

// Adds one or more campaigns to the specified account.

function AddCampaigns($accountId, $campaigns)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new AddCampaignsRequest();
    $request->AccountId = $accountId;
    $request->Campaigns = $campaigns;
    
    return $GLOBALS['CampaignProxy']->GetService()->AddCampaigns($request);
}

// Deletes one or more campaigns from the specified account.

function DeleteCampaigns($accountId, $campaignIds)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new DeleteCampaignsRequest();
    $request->AccountId = $accountId;
    $request->CampaignIds = $campaignIds;
    
    $GLOBALS['CampaignProxy']->GetService()->DeleteCampaigns($request);
}

// Adds one or more ad groups to the specified campaign.

function AddAdGroups($campaignId, $adGroups)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new AddAdGroupsRequest();
    $request->CampaignId = $campaignId;
    $request->AdGroups = $adGroups;
    
    return $GLOBALS['CampaignProxy']->GetService()->AddAdGroups($request);
}

// Gets all target info from the customer library.

function GetTargetsInfoFromLibrary()
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new GetTargetsInfoFromLibraryRequest();
    
    return $GLOBALS['CampaignProxy']->GetService()->GetTargetsInfoFromLibrary($request)->TargetsInfo;
}

// Gets the list of Target objects given the specified target identifiers.

function GetTargetsByIds($targetIds)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new GetTargetsByIdsRequest();
    $request->TargetIds = $targetIds;
    
    return $GLOBALS['CampaignProxy']->GetService()->GetTargetsByIds($request)->Targets;
}

// Adds the specified Target object to the customer library. 
// The operation requires exactly one Target in a list.

function AddTargetsToLibrary($targets)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new AddTargetsToLibraryRequest();
    $request->Targets = $targets;
    
    return $GLOBALS['CampaignProxy']->GetService()->AddTargetsToLibrary($request)->TargetIds;
}

// Updates the specified Target object within the customer library. 
// The operation requires exactly one Target in a list.

function UpdateTargetsInLibrary($targets)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new UpdateTargetsInLibraryRequest();
    $request->Targets = $targets;
    
    $GLOBALS['CampaignProxy']->GetService()->UpdateTargetsInLibrary($request);
}

// Deletes the specified target from the customer library. 
// The operation requires exactly one identifier in a list.

function DeleteTargetsFromLibrary($targetIds)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new DeleteTargetsFromLibraryRequest();
    $request->TargetIds = $targetIds;
    
    $GLOBALS['CampaignProxy']->GetService()->DeleteTargetsFromLibrary($request);
}

// Removes the target association from the specified campaign. 
// Does not delete the target or the campaign.

function DeleteTargetFromCampaign($campaignId)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new DeleteTargetFromCampaignRequest();
    $request->CampaignId = $campaignId;
    
    $GLOBALS['CampaignProxy']->GetService()->DeleteTargetFromCampaign($request);
}

// Removes the target association from the specified ad group.
// Does not delete the target or the ad group.

function DeleteTargetFromAdGroup($adGroupId)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new DeleteTargetFromAdGroupRequest();
    $request->AdGroupId = $adGroupId;
    
    $GLOBALS['CampaignProxy']->GetService()->DeleteTargetFromAdGroup($request);
}

// Associates the specified campaign and target.

function SetTargetToCampaign($campaignId, $targetId)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new SetTargetToCampaignRequest();
    $request->CampaignId = $campaignId;
    $request->TargetId = $targetId;
    
    $GLOBALS['CampaignProxy']->GetService()->SetTargetToCampaign($request);
}

// Associates the specified ad group and target.

function SetTargetToAdGroup($adGroupId, $targetId)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new SetTargetToAdGroupRequest();
    $request->AdGroupId = $adGroupId;
    $request->TargetId = $targetId;
    
    $GLOBALS['CampaignProxy']->GetService()->SetTargetToAdGroup($request);
}

// Outputs the campaign identifiers, as well as any partial errors.

function OutputCampaignsWithPartialErrors($campaigns, $campaignIds, $partialErrors)
{
    if(empty($campaignIds) || empty($campaignIds) || count($campaigns) != count($campaignIds))
    {
        return;
    }

    // Output the identifier of each successfully added campaign.

    for ($index = 0; $index < count($campaigns); $index++ )
    {
        // The array of campaign identifiers equals the size of the attempted campaign. If the element 
        // is not empty, the campaign at that index was added successfully and has a campaign identifer. 

        if (!empty($campaignIds[$index]))
        {
            printf("Campaign[%s] (Name:%s) successfully added and assigned CampaignId %s\n", 
                $index, 
                $campaigns[$index]->Name, 
                $campaignIds[$index] );
        }
    }

    // Output the error details for any campaign not successfully added.
    // Note also that multiple error reasons may exist for the same attempted campaign. 

    foreach ($partialErrors as $error)
    {
        // The index of the partial errors is equal to the index of the list
        // specified in the call to AddCampaigns.

        printf("\nCampaign[%s] (Name:%s) not added due to the following error:\n", $error->Index, $campaigns[$error->Index]->Name);

        printf("\tIndex: %s\n", $error->Index);
        printf("\tCode: %s\n", $error->Code);
        printf("\tErrorCode: %s\n", $error->ErrorCode);
        printf("\tMessage: %s\n", $error->Message);

        // In the case of an EditorialError, more details are available

        if ($error->Type == "EditorialError" && $error->ErrorCode == "CampaignServiceEditorialValidationError")
        {
            printf("\tDisapprovedText: %s\n", $error->DisapprovedText);
            printf("\tLocation: %s\n", $error->Location);
            printf("\tPublisherCountry: %s\n", $error->PublisherCountry);
            printf("\tReasonCode: %s\n", $error->ReasonCode);
        }
    }

    print "\n";
}

// Outputs the ad group identifiers, as well as any partial errors.

function OutputAdGroupsWithPartialErrors($adGroups, $adGroupIds, $partialErrors)
{
    if(empty($adGroupIds) || empty($adGroupIds) || count($adGroups) != count($adGroupIds))
    {
        return;
    }

    // Output the identifier of each successfully added ad group.

    for ($index = 0; $index < count($adGroups); $index++ )
    {
        // The array of ad group identifiers equals the size of the attempted ad group. If the element 
        // is not empty, the ad group at that index was added successfully and has an ad group identifer. 

        if (!empty($adGroupIds[$index]))
        {
            printf("AdGroup[%s] (Name:%s) successfully added and assigned AdGroupId %s\n", 
                $index, 
                $adGroups[$index]->Name, 
                $adGroupIds[$index] );
        }
    }

    // Output the error details for any ad group not successfully added.
    // Note also that multiple error reasons may exist for the same attempted ad group.

    foreach ($partialErrors as $error)
    {
        // The index of the partial errors is equal to the index of the list
        // specified in the call to AddAdGroups.

        printf("\nAdGroup[%s] (Name:%s) not added due to the following error:\n", $error->Index, $adGroups[$error->Index]->Name);

        printf("\tIndex: %s\n", $error->Index);
        printf("\tCode: %s\n", $error->Code);
        printf("\tErrorCode: %s\n", $error->ErrorCode);
        printf("\tMessage: %s\n", $error->Message);

        // In the case of an EditorialError, more details are available

        if ($error->Type == "EditorialError" && $error->ErrorCode == "CampaignServiceEditorialValidationError")
        {
            printf("\tDisapprovedText: %s\n", $error->DisapprovedText);
            printf("\tLocation: %s\n", $error->Location);
            printf("\tPublisherCountry: %s\n", $error->PublisherCountry);
            printf("\tReasonCode: %s\n", $error->ReasonCode);
        }
    }

    print "\n";
}

// Outputs the info for each target. 

function OutputTargetsInfo($targetsInfo)
{
    if(count((array)$targetsInfo) == 0)
    {
        return;
    }

    foreach ($targetsInfo as $info)
    {
        printf("Target Id: %s\n", $info->Id);
        printf("Target Name: %s\n\n", $info->Name);
    }
}

// Outputs the specified Target object. 

function OutputTarget($target)
{
    if(count((array)$target) == 0)
    {
        return;
    }

    printf("Target Id: %s\n", $target->Id);
    printf("Target Name: %s\n\n", $target->Name);

    if (!is_null($target->Age))
    {
        print "AgeTarget:\n";
        foreach ($target->Age->Bids->AgeTargetBid as $bid)
        {
            printf("\tBidAdjustment: %s\n", $bid->BidAdjustment);
            printf("\tAge: %s\n\n", $bid->Age);
        }
    }
    if (!is_null($target->DayTime))
    {
        print "DayTimeTarget:\n";
        foreach ($target->DayTime->Bids->DayTimeTargetBid as $bid)
        {
            printf("\tBidAdjustment: %s\n", $bid->BidAdjustment);
            printf("\tDay: %s\n", $bid->Day);
            printf("\tFromHour: %s\n", $bid->FromHour);
            printf("\tToHour: %s\n", $bid->ToHour);
            printf("\tFromMinute: %s\n", $bid->FromMinute);
            printf("\tToMinute: %s\n\n", $bid->ToMinute);
        }
    }
    if (!is_null($target->DeviceOS))
    {
        print "DeviceOSTarget:\n";
        foreach ($target->DeviceOS->Bids->DeviceOSTargetBid as $bid)
        {
            printf("\tBidAdjustment: %s\n", $bid->BidAdjustment);
            printf("\tDeviceName: %s\n", $bid->DeviceName);
            print "\n";
        }
    }
    if (!is_null($target->Gender))
    {
        print "GenderTarget:\n";
        foreach ($target->Gender->Bids->GenderTargetBid as $bid)
        {
            printf("\tBidAdjustment: %s\n", $bid->BidAdjustment);
            printf("\tGender: %s\n\n", $bid->Gender);
        }
    }
    if (!is_null($target->Location))
    {
        print "LocationTarget:\n";
        printf("\tIntentOption: %s\n\n", $target->Location->IntentOption);
        if (!is_null($target->Location->CityTarget))
        {
            print "\tCityTarget:\n";
            foreach ($target->Location->CityTarget->Bids->CityTargetBid as $bid)
            {
                printf("\t\tBidAdjustment: %s\n", $bid->BidAdjustment);
                printf("\t\tCity: %s\n\n", $bid->City);
            }
        }
        if (!is_null($target->Location->CountryTarget))
        {
            print "\tCountryTarget:\n";
            foreach ($target->Location->CountryTarget->Bids->CountryTargetBid as $bid)
            {
                printf("\t\tBidAdjustment: %s\n", $bid->BidAdjustment);
                printf("\t\tCountryAndRegion: %s\n", $bid->CountryAndRegion);
                printf("\t\tIsExcluded: %s\n\n", $bid->IsExcluded ? "True" : "False");
            }
        }
        if (!is_null($target->Location->MetroAreaTarget))
        {
            print "\tMetroAreaTarget:\n";
            foreach ($target->Location->MetroAreaTarget->Bids->MetroAreaTargetBid as $bid)
            {
                printf("\t\tBidAdjustment: %s\n", $bid->BidAdjustment);
                printf("\t\tMetroArea: %s\n", $bid->MetroArea);
                printf("\t\tIsExcluded: %s\n\n", $bid->IsExcluded ? "True" : "False");
            }
        }
        if (!is_null($target->Location->PostalCodeTarget))
        {
            print "\tPostalCodeTarget:\n";
            foreach ($target->Location->PostalCodeTarget->Bids->PostalCodeTargetBid as $bid)
            {
                printf("\t\tBidAdjustment: %s\n", $bid->BidAdjustment);
                printf("\t\tPostalCode: %s\n", $bid->PostalCode);
                printf("\t\tIsExcluded: %s\n\n", $bid->IsExcluded ? "True" : "False");
            }
        }
        if (!is_null($target->Location->RadiusTarget))
        {
            print "\tRadiusTarget:\n";
            foreach ($target->Location->RadiusTarget->Bids->RadiusTargetBid as $bid)
            {
                printf("\t\tBidAdjustment: %s\n", $bid->BidAdjustment);
                printf("\t\tLatitudeDegrees: %f\n", $bid->LatitudeDegrees);
                printf("\t\tLongitudeDegrees: %f\n", $bid->LongitudeDegrees);
                printf("\t\tRadius: %s %s\n\n", $bid->Radius, $bid->RadiusUnit);
            }
        }
        if (!is_null($target->Location->StateTarget))
        {
            print "\tStateTarget:\n";
            foreach ($target->Location->StateTarget->Bids->StateTargetBid as $bid)
            {
                printf("\t\tBidAdjustment: %s\n", $bid->BidAdjustment);
                printf("\t\tState: %s\n", $bid->State);
                printf("\t\tIsExcluded: %s\n\n", $bid->IsExcluded ? "True" : "False");
            }
        }
    }

    print "\n";
}

?>