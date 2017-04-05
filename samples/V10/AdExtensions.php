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
use \Microsoft\BingAds\v10\CampaignManagement\AddCampaignsRequest;
use \Microsoft\BingAds\v10\CampaignManagement\DeleteCampaignsRequest;
use \Microsoft\BingAds\v10\CampaignManagement\Campaign;
use \Microsoft\BingAds\v10\CampaignManagement\BudgetLimitType;
use \Microsoft\BingAds\v10\CampaignManagement\AddAdExtensionsRequest;
use \Microsoft\BingAds\v10\CampaignManagement\UpdateAdExtensionsRequest;
use \Microsoft\BingAds\v10\CampaignManagement\AdExtension;
use \Microsoft\BingAds\v10\CampaignManagement\AppAdExtension;
use \Microsoft\BingAds\v10\CampaignManagement\CallAdExtension;
use \Microsoft\BingAds\v10\CampaignManagement\CalloutAdExtension;
use \Microsoft\BingAds\v10\CampaignManagement\ImageAdExtension;
use \Microsoft\BingAds\v10\CampaignManagement\LocationAdExtension;
use \Microsoft\BingAds\v10\CampaignManagement\ReviewAdExtension;
use \Microsoft\BingAds\v10\CampaignManagement\SiteLinksAdExtension;
use \Microsoft\BingAds\v10\CampaignManagement\Sitelink2AdExtension;
use \Microsoft\BingAds\v10\CampaignManagement\StructuredSnippetAdExtension;
use \Microsoft\BingAds\v10\CampaignManagement\KeyValuePairOfstringstring;
use \Microsoft\BingAds\v10\CampaignManagement\AdExtensionAdditionalField;
use \Microsoft\BingAds\v10\CampaignManagement\Schedule;
use \Microsoft\BingAds\v10\CampaignManagement\DayTime;
use \Microsoft\BingAds\v10\CampaignManagement\Day;
use \Microsoft\BingAds\v10\CampaignManagement\Minute;
use \Microsoft\BingAds\v10\CampaignManagement\Date;
use \Microsoft\BingAds\v10\CampaignManagement\AdExtensionAssociation;
use \Microsoft\BingAds\v10\CampaignManagement\AdExtensionAssociationCollection;
use \Microsoft\BingAds\v10\CampaignManagement\AdExtensionEditorialReason;
use \Microsoft\BingAds\v10\CampaignManagement\AdExtensionEditorialReasonCollection;
use \Microsoft\BingAds\v10\CampaignManagement\AdExtensionEditorialStatus;
use \Microsoft\BingAds\v10\CampaignManagement\AdExtensionIdentity;
use \Microsoft\BingAds\v10\CampaignManagement\AdExtensionIdToEntityIdAssociation;
use \Microsoft\BingAds\v10\CampaignManagement\AdExtensionStatus;
use \Microsoft\BingAds\v10\CampaignManagement\AdExtensionsTypeFilter;
use \Microsoft\BingAds\v10\CampaignManagement\DeleteAdExtensionsRequest;
use \Microsoft\BingAds\v10\CampaignManagement\DeleteAdExtensionsAssociationsRequest;
use \Microsoft\BingAds\v10\CampaignManagement\GetAdExtensionsByIdsRequest;
use \Microsoft\BingAds\v10\CampaignManagement\GetAdExtensionsEditorialReasonsRequest;
use \Microsoft\BingAds\v10\CampaignManagement\SetAdExtensionsAssociationsRequest;
use \Microsoft\BingAds\v10\CampaignManagement\GetAccountMigrationStatusesRequest;
use \Microsoft\BingAds\v10\CampaignManagement\AccountMigrationStatusesInfo;
use \Microsoft\BingAds\v10\CampaignManagement\MigrationStatusInfo;
use \Microsoft\BingAds\v10\CampaignManagement\MigrationStatus;
use \Microsoft\BingAds\v10\CampaignManagement\Address;
use \Microsoft\BingAds\v10\CampaignManagement\SiteLink;
use \Microsoft\BingAds\v10\CampaignManagement\AssociationType;
use \Microsoft\BingAds\v10\CampaignManagement\CustomParameters;
use \Microsoft\BingAds\v10\CampaignManagement\CustomParameter;

// Specify the Microsoft\BingAds\v9\CustomerManagement classes that will be used.
use Microsoft\BingAds\v9\CustomerManagement\GetUserRequest;
use Microsoft\BingAds\v9\CustomerManagement\SearchAccountsRequest;
use Microsoft\BingAds\v9\CustomerManagement\Paging;
use Microsoft\BingAds\v9\CustomerManagement\Predicate;
use Microsoft\BingAds\v9\CustomerManagement\PredicateOperator;
use Microsoft\BingAds\v9\CustomerManagement\Account;
use Microsoft\BingAds\v9\CustomerManagement\User;
use Microsoft\BingAds\v9\CustomerManagement\GetCustomerPilotFeaturesRequest;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\AuthHelper;

$GLOBALS['SitelinkMigration'] = "SiteLinkAdExtension";
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

    date_default_timezone_set('UTC');
        
    // To prepare for the sitelink ad extensions migration in 2017, you will need to determine
    // whether the account has been migrated from SiteLinksAdExtension to Sitelink2AdExtension. 
    // All ad extension service operations available for both types of sitelinks; however you will 
    // need to determine which type to add, update, and retrieve.

    $sitelinkMigrationIsCompleted = false;

    // Optionally you can find out which pilot features the customer is able to use. Even if the customer 
    // is in pilot for sitelink migrations, the accounts that it contains might not be migrated.
    $featurePilotFlags = GetCustomerPilotFeatures($GLOBALS['AuthorizationData']->CustomerId)->int;

    // The pilot flag value for Sitelink ad extension migration is 253.
    // Pilot flags apply to all accounts within a given customer; however,
    // each account goes through migration individually and has its own migration status.
    if (in_array(253, $featurePilotFlags))
    {
        // Account migration status below will be either NotStarted, InProgress, or Completed.
        print("Customer is in pilot for Sitelink migration.\n\n");
    }
    else
    {
        // Account migration status below will be NotInPilot.
        print("Customer is not in pilot for Sitelink migration.\n\n");
    }

    // Even if you have multiple accounts per customer, each account will have its own
    // migration status. This example checks the account provided above.
    $accountMigrationStatusesInfos = GetAccountMigrationStatuses(array($GLOBALS['AuthorizationData']->AccountId), $GLOBALS['SitelinkMigration']);
    
    foreach ($accountMigrationStatusesInfos->AccountMigrationStatusesInfo as $accountMigrationStatusesInfo)
    {
        OutputAccountMigrationStatusesInfo($accountMigrationStatusesInfo);
        
        foreach ($accountMigrationStatusesInfo->MigrationStatusInfo->MigrationStatusInfo as $migrationStatusInfo) 
        {
            if (($migrationStatusInfo->Status == MigrationStatus::Completed) && ($GLOBALS['SitelinkMigration'] == $migrationStatusInfo->MigrationType))
            {
                $sitelinkMigrationIsCompleted = true;
            }
        }
    }
    
    // Specify one or more campaigns.
    
    $campaigns = array();
   
    $campaign = new Campaign();
    $campaign->Name = "Winter Clothing " . $_SERVER['REQUEST_TIME'];
    $campaign->Description = "Winter clothing line.";
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->DailyBudget = 50.00;
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";
    $campaign->DaylightSaving = true;

    // Used with FinalUrls shown in the sitelinks that we will add below.
    $campaign->TrackingUrlTemplate =
        "http://tracker.example.com/?season={_season}&promocode={_promocode}&u={lpurl}";

    $campaigns[] = $campaign;

    // Add the campaign, ad group, keywords, and ads
    
    $addCampaignsResponse = AddCampaigns($GLOBALS['AuthorizationData']->AccountId, $campaigns);
    $campaignIds = $addCampaignsResponse->CampaignIds->long;
    $campaignErrors = $addCampaignsResponse->PartialErrors;
    if(isset($addCampaignsResponse->PartialErrors->BatchError)){
        $campaignErrors = $addCampaignsResponse->PartialErrors->BatchError;
    }

    // Output the new assigned campaign identifiers, as well as any partial errors
  
    OutputCampaignsWithPartialErrors($campaigns, $campaignIds, $campaignErrors);

	
    // Specify the extensions.
    
    $adExtensions = array();

    // Specify an app extension.
    
    $extension = new AppAdExtension();
    $extension->AppPlatform = "Windows";
    $extension->AppStoreId="AppStoreIdGoesHere";
    $extension->DisplayText= "Contoso";
    $extension->DestinationUrl="DestinationUrlGoesHere";
    $encodedExtension = new SoapVar($extension, SOAP_ENC_OBJECT, 'AppAdExtension', $GLOBALS['CampaignProxy']->GetNamespace());
    // If you supply the AppAdExtension properties above, then you can add this line.
    //$adExtensions[] = $encodedExtension;
    
    // Specify a call extension.
    
    $extension = new CallAdExtension();
    $extension->CountryCode = "US";
    $extension->PhoneNumber = "2065550100";
    $extension->IsCallOnly = false;
    // For this example assume the call center is open Monday - Friday from 9am - 9pm
    // in the account's time zone.
    $callScheduling = new Schedule(); 
    $callDayTimeRanges = array();
    for($index = 0; $index < 5; $index++)
    {
        $dayTime = new DayTime();
        $dayTime->StartHour = 9;
        $dayTime->StartMinute = Minute::Zero;
        $dayTime->EndHour = 21;
        $dayTime->EndMinute = Minute::Zero;
        $callDayTimeRanges[] = $dayTime;
    }
    $callDayTimeRanges[0]->Day = Day::Monday;
    $callDayTimeRanges[1]->Day = Day::Tuesday;
    $callDayTimeRanges[2]->Day = Day::Wednesday;
    $callDayTimeRanges[3]->Day = Day::Thursday;
    $callDayTimeRanges[4]->Day = Day::Friday;
    $callScheduling->DayTimeRanges = $callDayTimeRanges;    
    $callScheduling->UseSearcherTimeZone = false;
    $callScheduling->StartDate = null;
    $callSchedulingEndDate = new Date();
    $callSchedulingEndDate->Day = 31;
    $callSchedulingEndDate->Month = 12;
    $callSchedulingEndDate->Year = date("Y");
    $callScheduling->EndDate = $callSchedulingEndDate;
    $extension->Scheduling = $callScheduling;
    $encodedExtension = new SoapVar($extension, SOAP_ENC_OBJECT, 'CallAdExtension', $GLOBALS['CampaignProxy']->GetNamespace());
    $adExtensions[] = $encodedExtension;

    // Specify a callout extension.
    
    $extension = new CalloutAdExtension();
    $extension->Text = "Callout Text";
    $encodedExtension = new SoapVar($extension, SOAP_ENC_OBJECT, 'CalloutAdExtension', $GLOBALS['CampaignProxy']->GetNamespace());
    $adExtensions[] = $encodedExtension;
    
    // Specify a location extension.
    
    $extension = new LocationAdExtension();
    $extension->PhoneNumber = "206-555-0100";
    $extension->CompanyName = "Alpine Ski House";
    $extension->IconMediaId = null;  // Using the default map icon
    $extension->ImageMediaId = null;
    $extension->Address = new Address;
    $extension->Address->StreetAddress = "1234 Washington Place";
    $extension->Address->StreetAddress2 = "Suite 1210";
    $extension->Address->CityName = "Woodinville";
    $extension->Address->ProvinceName = "WA"; // Can contain the state name or code (e.g. WA)
    $extension->Address->CountryCode = "US";
    $extension->Address->PostalCode = "98608";
    $locationScheduling = new Schedule();
    $locationDayTimeRanges = array();
    $locationDayTime = new DayTime();
    $locationDayTime->Day = Day::Saturday;
    $locationDayTime->StartHour = 9;
    $locationDayTime->StartMinute = Minute::Zero;
    $locationDayTime->EndHour = 12;
    $locationDayTime->EndMinute = Minute::Zero;
    $locationDayTimeRanges[] = $locationDayTime;
    $locationScheduling->DayTimeRanges = $locationDayTimeRanges;    
    $locationScheduling->UseSearcherTimeZone = false;
    $locationScheduling->StartDate = null;
    $locationSchedulingEndDate = new Date();
    $locationSchedulingEndDate->Day = 31;
    $locationSchedulingEndDate->Month = 12;
    $locationSchedulingEndDate->Year = date("Y");
    $locationScheduling->EndDate = $locationSchedulingEndDate;
    $extension->Scheduling = $locationScheduling;
    $encodedExtension = new SoapVar($extension, SOAP_ENC_OBJECT, 'LocationAdExtension', $GLOBALS['CampaignProxy']->GetNamespace());
    $adExtensions[] = $encodedExtension;

    // Specify a review extension.
    
    $extension = new ReviewAdExtension();
    $extension->IsExact = true;
    $extension->Source = "Review Source Name";
    $extension->Text = "Review Text";
    $extension->Url = "http://review.contoso.com"; // The Url of the third-party review. This is not your business Url.
    $encodedExtension = new SoapVar($extension, SOAP_ENC_OBJECT, 'ReviewAdExtension', $GLOBALS['CampaignProxy']->GetNamespace());
    $adExtensions[] = $encodedExtension;
    
    // Specify a structured snippet extension.
    
    $extension = new StructuredSnippetAdExtension();
    $extension->Header = "Brands";
    $extension->Values = array("Windows", "Xbox", "Skype");
    $encodedExtension = new SoapVar($extension, SOAP_ENC_OBJECT, 'StructuredSnippetAdExtension', $GLOBALS['CampaignProxy']->GetNamespace());
    $adExtensions[] = $encodedExtension;
    
    // Before migration only the deprecated SiteLinksAdExtension type can be added, 
    // and after migration only the new Sitelink2AdExtension type can be added.
    if($sitelinkMigrationIsCompleted)
    {
        foreach(GetSampleSitelink2AdExtensions() as $encodedExtension)
        {
            $adExtensions[] = $encodedExtension;
        }
    }
    else
    {
        foreach(GetSampleSiteLinksAdExtensions() as $encodedExtension)
        {
            $adExtensions[] = $encodedExtension;
        }
    }
        
    // Add all extensions to the account's ad extension library
    
    $adExtensionIdentities = AddAdExtensions(
    	$GLOBALS['AuthorizationData']->AccountId, 
    	$adExtensions
    	);
        
    print("Added ad extensions.\n\n");
    
    // DeleteAdExtensionsAssociations, SetAdExtensionsAssociations, and GetAdExtensionsEditorialReasons 
    // operations each require a list of type AdExtensionIdToEntityIdAssociation.
    
    $adExtensionIdToEntityIdAssociations = array ();

    // GetAdExtensionsByIds requires a list of type long.
    
    $adExtensionIds = array ();
                
    // Loop through the list of extension IDs and build any required data structures
    // for subsequent operations. 
    
    $associations = array();
    
    for ($index = 0; $index < count($adExtensionIdentities->AdExtensionIdentity); $index++)
    {
    	$adExtensionIdToEntityIdAssociations[$index] = new AdExtensionIdToEntityIdAssociation();
    	$adExtensionIdToEntityIdAssociations[$index]->AdExtensionId = $adExtensionIdentities->AdExtensionIdentity[$index]->Id;;
    	$adExtensionIdToEntityIdAssociations[$index]->EntityId = $campaignIds[0];
    	    	
    	$adExtensionIds[$index] = $adExtensionIdentities->AdExtensionIdentity[$index]->Id;
    };
    
    // Associate the specified ad extensions with the respective campaigns or ad groups. 
    
    SetAdExtensionsAssociations(
    	$GLOBALS['AuthorizationData']->AccountId,
    	$adExtensionIdToEntityIdAssociations,
    	AssociationType::Campaign
    	);
    
    // Get editorial rejection reasons for the respective ad extension and entity associations.
    
    $adExtensionEditorialReasonCollection = GetAdExtensionsEditorialReasons(
    	$GLOBALS['AuthorizationData']->AccountId,
    	$adExtensionIdToEntityIdAssociations,
    	AssociationType::Campaign
    	);
    
    // If migration has been completed, then you should request the Sitelink2AdExtension objects.
    // You can always request both types; however, before migration only the deprecated SiteLinksAdExtension
    // type will be returned, and after migration only the new Sitelink2AdExtension type will be returned.       
    $adExtensionsTypeFilter = array(
        $sitelinkMigrationIsCompleted ? AdExtensionsTypeFilter::Sitelink2AdExtension : AdExtensionsTypeFilter::SiteLinksAdExtension,
        AdExtensionsTypeFilter::AppAdExtension,
    	AdExtensionsTypeFilter::CallAdExtension,
        AdExtensionsTypeFilter::CalloutAdExtension,
        AdExtensionsTypeFilter::ImageAdExtension,
    	AdExtensionsTypeFilter::LocationAdExtension,
        AdExtensionsTypeFilter::ReviewAdExtension,
    	AdExtensionsTypeFilter::StructuredSnippetAdExtension,
    );
    
    // Get the specified ad extensions from the account'ss ad extension library.
    
    $returnAdditionalFields = array(AdExtensionAdditionalField::Scheduling);
        
    $adExtensions = GetAdExtensionsByIds(
    	$GLOBALS['AuthorizationData']->AccountId,
    	$adExtensionIds,
    	$adExtensionsTypeFilter,
        $returnAdditionalFields
    	);
    
    print("List of ad extensions that were added above:\n\n");
    OutputAdExtensionsWithEditorialReasons($adExtensions, $adExtensionEditorialReasonCollection);
    
    // Get only the location extensions and remove scheduling.

    $adExtensionsTypeFilter = array(AdExtensionsTypeFilter::LocationAdExtension);

    $adExtensions = GetAdExtensionsByIds(
    	$GLOBALS['AuthorizationData']->AccountId,
    	$adExtensionIds,
    	$adExtensionsTypeFilter,
        $returnAdditionalFields
    	);

    $updateExtensions = array();
    $updateExtensionIds = array();

    foreach ($adExtensions->AdExtension as $extension)
    {
        // GetAdExtensionsByIds will return a nil element if the request filters / conditions were not met.
        if(!empty($extension) && isset($extension->Id))
        {
            // Remove read-only elements that would otherwise cause the update operation to fail.
            $updateExtension = SetReadOnlyAdExtensionElementsToNull($extension);

            // If you set the Scheduling element null, any existing scheduling set for the ad extension will remain unchanged. 
            // If you set this to any non-null Schedule object, you are effectively replacing existing scheduling 
            // for the ad extension. In this example, we will remove any existing scheduling by setting this element  
            // to an empty Schedule object.
            $updateExtension->Scheduling = new Schedule();

            $updateExtensions[] = new SoapVar($updateExtension, SOAP_ENC_OBJECT, 'LocationAdExtension', $GLOBALS['CampaignProxy']->GetNamespace());
            $updateExtensionIds[] = $updateExtension->Id;
        }
    }

    print("Removing scheduling from the location ad extensions..\n\n");
    UpdateAdExtensions($GLOBALS['AuthorizationData']->AccountId, $updateExtensions);

    $adExtensions = GetAdExtensionsByIds(
    	$GLOBALS['AuthorizationData']->AccountId,
    	$updateExtensionIds,
    	$adExtensionsTypeFilter,
        $returnAdditionalFields
    	);

    print("List of ad extensions that were updated above:\n\n");
    OutputAdExtensionsWithEditorialReasons($adExtensions, null);
    
    // You should omit these delete operations if you want to view the added entities in the 
    // Bing Ads web application or another tool.

    // Remove the specified associations from the respective campaigns or ad groups.
    // The extensions are still available in the account's extensions library.
    DeleteAdExtensionsAssociations(
    	$GLOBALS['AuthorizationData']->AccountId, 
    	$adExtensionIdToEntityIdAssociations, 
    	AssociationType::Campaign
    );
    
    // Deletes the ad extensions from the account�s ad extension library.
    DeleteAdExtensions(
    	$GLOBALS['AuthorizationData']->AccountId, 
    	$adExtensionIds
    );
    
    foreach ($adExtensionIds as $id)
    {
        printf("Deleted Ad Extension Id %s\n\n", $id);
    }

    // Delete the campaign. 
    DeleteCampaigns($GLOBALS['AuthorizationData']->AccountId, array($campaignIds[0]));
    printf("Deleted CampaignId %d\n\n", $campaignIds[0]);
    
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
                case 0:    // InternalError
                    break;
                case 105:  // InvalidCredentials
                    break;
                case 117:  // CallRateExceeded
                    break;
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
                    case 0:     // InternalError
                        break;
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
                    case 0:     // InternalError
                        break;
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
                    case 0:     // InternalError
                        break;
                    case 106:   // UserIsNotAuthorized
                        break;
                    case 1102:  // CampaignServiceInvalidAccountId
                        break;
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

    // Print the error details for any campaign not successfully added.
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

// Outputs the ad extensions and editorial rejection reasons if any exist.

function OutputAdExtensionsWithEditorialReasons($adExtensions, $adExtensionEditorialReasonCollection)
{
    $index = 0;
    
    foreach ($adExtensions->AdExtension as $extension)
    {
    	if (null == $extension)
    	{
    		print "Extension is null or invalid.";
    	}
    	else
    	{
    		if ($extension->Type === "AppAdExtension")
    		{
    			OutputAppAdExtension($extension);
    		}    		
            else if ($extension->Type === "CallAdExtension")
    		{
    			OutputCallAdExtension($extension);
    		}
            else if ($extension->Type === "CalloutAdExtension")
    		{
    			OutputCalloutAdExtension($extension);
    		}
    		else if ($extension->Type === "LocationAdExtension")
    		{
    			OutputLocationAdExtension($extension);
    		}
            else if ($extension->Type === "ReviewAdExtension")
    		{
    			OutputReviewAdExtension($extension);
    		}
    		else if ($extension->Type === "SiteLinksAdExtension")
    		{
    			OutputSiteLinksAdExtension($extension);
    		}
            else if ($extension->Type === "Sitelink2AdExtension")
    		{
    			OutputSitelink2AdExtension($extension);
    		}
            else if ($extension->Type === "StructuredSnippetAdExtension")
    		{
    			OutputStructuredSnippetAdExtension($extension);
    		}
    		else
    		{
    			print("Unknown extension type\n");
    		}
    		
    		if(!empty($adExtensionEditorialReasonCollection)
    			&& (count($adExtensionEditorialReasonCollection) > 0)
    			&& !empty($adExtensionEditorialReasonCollection->AdExtensionEditorialReason[$index]))
    		{
    			print "";
    			
    			// Print any editorial rejection reasons for the corresponding extension. This sample
    			// assumes the same list index for adExtensions and adExtensionEditorialReasonCollection
    			// as defined above.
    			
    			foreach ($adExtensionEditorialReasonCollection->AdExtensionEditorialReason[$index]->Reasons as $adExtensionEditorialReason)
    			{
    				printf("Editorial Rejection Location: %s\n", $adExtensionEditorialReason->Location);
    				print("Editorial Rejection PublisherCountries: \n");
    				foreach($adExtensionEditorialReason->PublisherCountries->string as $publisherCountry)
    				{
    					print("  " . $publisherCountry);
    				}
    				printf("Editorial Rejection ReasonCode: %s\n", $adExtensionEditorialReason->ReasonCode);
    				printf("Editorial Rejection Term: %s\n", $adExtensionEditorialReason->Term);
    				print("\n");
    			}
    		}
    	}
    
    	print("\n");
    	
    	$index++;
    }

}

// Gets the list of pilot features that the customer is able to use.

function GetCustomerPilotFeatures($customerId)
{
    $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy'];
    
    $request = new GetCustomerPilotFeaturesRequest();
    $request->CustomerId = $customerId;
    
    return $GLOBALS['Proxy']->GetService()->GetCustomerPilotFeatures($request)->FeaturePilotFlags;
}

// Gets the account's migration statuses.

function GetAccountMigrationStatuses($accountIds, $migrationType)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];
    
    $request = new GetAccountMigrationStatusesRequest();
    $request->AccountIds = $accountIds;
    $request->MigrationType = $migrationType;
    
    return $GLOBALS['Proxy']->GetService()->GetAccountMigrationStatuses($request)->MigrationStatuses;
}

// Adds one or more campaigns to the specified account.

function AddCampaigns($accountId, $campaigns)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];
    
    $request = new AddCampaignsRequest();
    $request->AccountId = $accountId;
    $request->Campaigns = $campaigns;
    
    return $GLOBALS['Proxy']->GetService()->AddCampaigns($request);
}

// Deletes one or more campaigns from the specified account.

function DeleteCampaigns($accountId, $campaignIds)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];
    
    $request = new DeleteCampaignsRequest();
    $request->AccountId = $accountId;
    $request->CampaignIds = $campaignIds;
    
    $GLOBALS['Proxy']->GetService()->DeleteCampaigns($request);
}

// Adds one or more ad extensions to the account's ad extension library.

function AddAdExtensions($accountId, $adExtensions)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];
    
    $request = new AddAdExtensionsRequest();
    $request->AccountId = $accountId;
    $request->AdExtensions = $adExtensions;
    
    return $GLOBALS['Proxy']->GetService()->AddAdExtensions($request)->AdExtensionIdentities;
}

// Updates one or more ad extensions within the account's ad extension library.

function UpdateAdExtensions($accountId, $adExtensions)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];
    
    $request = new UpdateAdExtensionsRequest();
    $request->AccountId = $accountId;
    $request->AdExtensions = $adExtensions;
    
    return $GLOBALS['Proxy']->GetService()->UpdateAdExtensions($request);
}

// Deletes one or more ad extensions from the account's ad extension library.

function DeleteAdExtensions($accountId, $adExtensionIds)
{
	$GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];
    
    $request = new DeleteAdExtensionsRequest();
	$request->AccountId = $accountId;
	$request->AdExtensionIds = $adExtensionIds;

	$GLOBALS['Proxy']->GetService()->DeleteAdExtensions($request);
}

// Associates one or more extensions with the corresponding campaign or ad group entities.

function SetAdExtensionsAssociations($accountId, $associations, $associationType)
{
	$GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];
    
    $request = new SetAdExtensionsAssociationsRequest();
	$request->AccountId = $accountId;
	$request->AdExtensionIdToEntityIdAssociations = $associations;
	$request->AssociationType = $associationType;

	$GLOBALS['Proxy']->GetService()->SetAdExtensionsAssociations($request);
}

// Removes the specified association from the respective campaigns or ad groups.

function DeleteAdExtensionsAssociations($accountId, $associations, $associationType)
{
	$GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];
    
    $request = new DeleteAdExtensionsAssociationsRequest();
	$request->AccountId = $accountId;
	$request->AdExtensionIdToEntityIdAssociations = $associations;
	$request->AssociationType = $associationType;

	$GLOBALS['Proxy']->GetService()->DeleteAdExtensionsAssociations($request);
}

// Gets the specified ad extensions from the account's extension library.

function GetAdExtensionsByIds($accountId, $adExtensionIds, $adExtensionsTypeFilter, $returnAdditionalFields)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];
    
    $request = new GetAdExtensionsByIdsRequest();
    $request->AccountId = $accountId;
    $request->AdExtensionIds = $adExtensionIds;
    $request->AdExtensionType = $adExtensionsTypeFilter;
    $request->ReturnAdditionalFields = $returnAdditionalFields;

    return $GLOBALS['Proxy']->GetService()->GetAdExtensionsByIds($request)->AdExtensions;  
}

// Gets the reasons why the specified extension failed editorial when 
// in the context of an associated campaign or ad group.

function GetAdExtensionsEditorialReasons($accountId, $associations, $associationType)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];
    
    $request = new GetAdExtensionsEditorialReasonsRequest();
    $request->AccountId = $accountId;
    $request->AdExtensionIdToEntityIdAssociations = $associations;
    $request->AssociationType = $associationType;

    return $GLOBALS['Proxy']->GetService()->GetAdExtensionsEditorialReasons($request)->EditorialReasons;
}

function GetSampleSiteLinksAdExtensions()
{
    $adExtensions = array();
    
    $extension = new SiteLinksAdExtension();
    $extension->SiteLinks = array();
    
    for ($index = 0; $index < 2; $index++)
    {
        $extension->SiteLinks[$index] = new SiteLink();
        $extension->SiteLinks[$index]->Description1 = "Simple & Transparent.";
        $extension->SiteLinks[$index]->Description2 = "No Upfront Cost.";
        $extension->SiteLinks[$index]->DisplayText = "Women's Shoe Sale " . ($index+1);

        // Destination URLs are deprecated. 
        // If you are currently using the Destination URL, you must upgrade to Final URLs. 
        // Here is an example of a DestinationUrl you might have used previously. 
        // $extension->SiteLinks[$index]->DestinationUrl = "http://www.contoso.com/womenshoesale/?season=spring&promocode=PROMO123";

        // To migrate from DestinationUrl to FinalUrls, you can set DestinationUrl
        // to an empty string when updating the sitelink. If you are removing DestinationUrl,
        // then FinalUrls is required.
        // $extension->SiteLinks[$index]->DestinationUrl = "";

        // With FinalUrls you can separate the tracking template, custom parameters, and 
        // landing page URLs. 

        $extension->SiteLinks[$index]->FinalUrls = array();
        $extension->SiteLinks[$index]->FinalUrls[] = "http://www.contoso.com/womenshoesale";

        // Final Mobile URLs can also be used if you want to direct the user to a different page 
        // for mobile devices.
        $extension->SiteLinks[$index]->FinalMobileUrls = array();
        $extension->SiteLinks[$index]->FinalMobileUrls[] = "http://mobile.contoso.com/womenshoesale";
 
        // You could use a tracking template which would override the campaign level
        // tracking template. Tracking templates defined for lower level entities 
        // override those set for higher level entities.
        // In this example we are using the campaign level tracking template.
        $extension->SiteLinks[$index]->TrackingUrlTemplate = null;

        // Set custom parameters that are specific to this sitelink, 
        // and can be used by the sitelink, ad group, campaign, or account level tracking template. 
        // In this example we are using the campaign level tracking template.
        $extension->SiteLinks[$index]->UrlCustomParameters = new CustomParameters();
        $extension->SiteLinks[$index]->UrlCustomParameters->Parameters = array();
        $customParameter1 = new CustomParameter();
        $customParameter1->Key = "promoCode";
        $customParameter1->Value = "PROMO" . ($index+1);
        $extension->SiteLinks[$index]->UrlCustomParameters->Parameters[] = $customParameter1;
        $customParameter2 = new CustomParameter();
        $customParameter2->Key = "season";
        $customParameter2->Value = "summer";
        $extension->SiteLinks[$index]->UrlCustomParameters->Parameters[] = $customParameter2;   
    }
    
    $encodedExtension = new SoapVar($extension, SOAP_ENC_OBJECT, 'SiteLinksAdExtension', $GLOBALS['CampaignProxy']->GetNamespace());
    $adExtensions[] = $encodedExtension;
    
    return $adExtensions;
}

function GetSampleSitelink2AdExtensions()
{
    $adExtensions = array();
    
    for ($index = 0; $index < 2; $index++)
    {
        $extension = new Sitelink2AdExtension();
        $extension->Description1 = "Simple & Transparent.";
        $extension->Description2 = "No Upfront Cost.";
        $extension->DisplayText = "Women's Shoe Sale " . ($index+1);

        // Destination URLs are deprecated. 
        // If you are currently using the Destination URL, you must upgrade to Final URLs. 
        // Here is an example of a DestinationUrl you might have used previously. 
        // $extension->DestinationUrl = "http://www.contoso.com/womenshoesale/?season=spring&promocode=PROMO123";

        // To migrate from DestinationUrl to FinalUrls, you can set DestinationUrl
        // to an empty string when updating the sitelink. If you are removing DestinationUrl,
        // then FinalUrls is required.
        // $extension->DestinationUrl = "";

        // With FinalUrls you can separate the tracking template, custom parameters, and 
        // landing page URLs. 

        $extension->FinalUrls = array();
        $extension->FinalUrls[] = "http://www.contoso.com/womenshoesale";

        // Final Mobile URLs can also be used if you want to direct the user to a different page 
        // for mobile devices.
        $extension->FinalMobileUrls = array();
        $extension->FinalMobileUrls[] = "http://mobile.contoso.com/womenshoesale";
 
        // You could use a tracking template which would override the campaign level
        // tracking template. Tracking templates defined for lower level entities 
        // override those set for higher level entities.
        // In this example we are using the campaign level tracking template.
        $extension->TrackingUrlTemplate = null;

        // Set custom parameters that are specific to this sitelink, 
        // and can be used by the sitelink, ad group, campaign, or account level tracking template. 
        // In this example we are using the campaign level tracking template.
        $extension->UrlCustomParameters = new CustomParameters();
        $extension->UrlCustomParameters->Parameters = array();
        $customParameter1 = new CustomParameter();
        $customParameter1->Key = "promoCode";
        $customParameter1->Value = "PROMO" . ($index+1);
        $extension->UrlCustomParameters->Parameters[] = $customParameter1;
        $customParameter2 = new CustomParameter();
        $customParameter2->Key = "season";
        $customParameter2->Value = "summer";
        $extension->UrlCustomParameters->Parameters[] = $customParameter2;   
        
        $encodedExtension = new SoapVar($extension, SOAP_ENC_OBJECT, 'Sitelink2AdExtension', $GLOBALS['CampaignProxy']->GetNamespace());
        $adExtensions[] = $encodedExtension;
    }
    
    return $adExtensions;
}


function OutputAccountMigrationStatusesInfo($accountMigrationStatusesInfo)
{
    if (!empty($accountMigrationStatusesInfo))
    {
        printf("AccountId: %s\n", $accountMigrationStatusesInfo->AccountId);
        foreach ($accountMigrationStatusesInfo->MigrationStatusInfo as $migrationStatusInfo)
        {
            OutputMigrationStatusInfo($migrationStatusInfo[0]);
        }
    }
}

function OutputMigrationStatusInfo($migrationStatusInfo)
{
    if (!empty($migrationStatusInfo))
    {
        printf("MigrationType: %s\n", $migrationStatusInfo->MigrationType);
        printf("StartTimeInUtc: %s\n", $migrationStatusInfo->StartTimeInUtc);
        printf("Status: %s\n\n", $migrationStatusInfo->Status);
    }
}

function OutputAdExtension($extension)
{
    if (!empty($extension))
    {
        printf("Id: %s\n", $extension->Id);
        printf("Type: %s\n", $extension->Type);
        print("ForwardCompatibilityMap:\n");
        if (isset($extension->ForwardCompatibilityMap) && isset($extension->ForwardCompatibilityMap->KeyValuePairOfstringstring))
        {
            foreach ($extension->ForwardCompatibilityMap->KeyValuePairOfstringstring as $pair)
            {
                printf("Key: %s\n", $pair->Key);
                printf("Value: %s\n", $pair->Value);
            }
        }
        print("Scheduling:\n");
        if (isset($extension->Scheduling))
        {
            OutputSchedule($extension->Scheduling);
        }
        printf("Status: %s\n", $extension->Status);
        printf("Version: %s\n", $extension->Version);
    }
}

function OutputSchedule($schedule)
{
    if (!empty($schedule))
    {
        if(isset($schedule->DayTimeRanges))
        {
            foreach ($schedule->DayTimeRanges->DayTime as $dayTime)
            {
                printf("Day: %s\n", $dayTime->Day);
                printf("EndHour: %s\n", $dayTime->EndHour);
                printf("EndMinute: %s\n", $dayTime->EndMinute);
                printf("StartHour: %s\n", $dayTime->StartHour);
                printf("StartMinute: %s\n", $dayTime->StartMinute);
            }
        }
        if (isset($schedule->EndDate))
        {
            printf("EndDate: %s/%s/%s\n",
            $schedule->EndDate->Month,
            $schedule->EndDate->Day,
            $schedule->EndDate->Year);
        }
        if (isset($schedule->StartDate))
        {
            printf("StartDate: %s/%s/%s\n",
            $schedule->StartDate->Month,
            $schedule->StartDate->Day,
            $schedule->StartDate->Year);
        }
        printf("UseSearcherTimeZone: %s\n", $schedule->UseSearcherTimeZone == true ? "True" : "False");
    }
}

function OutputAppAdExtension($extension)
{
    if (!empty($extension))
    {
        // Output inherited properties of the AdExtension base class.
        OutputAdExtension($extension);

        // Output properties that are specific to the AppAdExtension
        printf("AppPlatform: %s\n", $extension->AppPlatform);
        printf("AppStoreId: %s\n", $extension->AppStoreId);
        printf("DisplayText: %s\n", $extension->DisplayText);
        printf("DestinationUrl: %s\n", $extension->DestinationUrl);
        print("\n");
    }
}

function OutputCallAdExtension($extension)
{
    if (!empty($extension))
    {
        // Output inherited properties of the AdExtension base class.
        OutputAdExtension($extension);

        // Output properties that are specific to the CallAdExtension
        printf("CountryCode: %s\n", $extension->CountryCode);
        printf("DevicePreference: %s\n", $extension->DevicePreference);
        printf("IsCallOnly: %s\n", $extension->IsCallOnly);
        printf("IsCallTrackingEnabled: %s\n", $extension->IsCallTrackingEnabled);
        printf("PhoneNumber: %s\n", $extension->PhoneNumber);
        printf("RequireTollFreeTrackingNumber: %s\n", $extension->RequireTollFreeTrackingNumber);
        print("\n");
    }
}

function OutputCalloutAdExtension($extension)
{
    if (!empty($extension))
    {
        // Output inherited properties of the AdExtension base class.
        OutputAdExtension($extension);

        // Output properties that are specific to the CalloutAdExtension
        printf("Text: %s\n", $extension->Text);
        print("\n");
    }
}

function OutputImageAdExtension($extension)
{
    if (!empty($extension))
    {
        // Output inherited properties of the AdExtension base class.
        OutputAdExtension($extension);

        // Output properties that are specific to the ImageAdExtension
        printf("AlternativeText: %s\n", $extension->AlternativeText);
        printf("Description: %s\n", $extension->Description);
        printf("DestinationUrl: %s\n", $extension->DestinationUrl);
        print("FinalMobileUrls: \n");
        if (isset($extension->FinalMobileUrls))
        {
            foreach ($extension->FinalMobileUrls->string as $finalMobileUrl)
            {
                print("\t" . $finalMobileUrl);
            }
        }
        print("FinalUrls: \n");
        if (isset($extension->FinalMobileUrls))
        {
            foreach ($extension->FinalUrls->string as $finalUrl)
            {
                print("\t" . $finalUrl);
            }
        }
        print("ImageMediaIds:\n");
        if (isset($extension->ImageMediaIds))
        {
            foreach ($extension->ImageMediaIds->long as $id)
            {
                printf("\tId: %s\n", $id);
            }
        }
        printf("TrackingUrlTemplate: %s\n", $extension->TrackingUrlTemplate);
        print("UrlCustomParameters:\n");
        if (isset($extension->UrlCustomParameters) && isset($extension->UrlCustomParameters->Parameters))
        {
            foreach ($extension->UrlCustomParameters->Parameters->CustomParameter as $customParameter)
            {
                printf("\tKey: %s\n", $customParameter->Key);
                printf("\tValue: %s\n", $customParameter->Value);
            }
        }
        print("\n");
    }
}

function OutputLocationAdExtension($extension)
{
    if (!empty($extension))
    {
        // Output inherited properties of the AdExtension base class.
        OutputAdExtension($extension);

        // Output properties that are specific to the LocationAdExtension
        if (isset($extension->Address))
        {
            printf("CityName: %s\n", $extension->Address->CityName);
            printf("CountryCode: %s\n", $extension->Address->CountryCode);
            printf("PostalCode: %s\n", $extension->Address->PostalCode);
            printf("ProvinceCode: %s\n", $extension->Address->ProvinceCode);
            printf("ProvinceName: %s\n", $extension->Address->ProvinceName);
            printf("StreetAddress: %s\n", $extension->Address->StreetAddress);
            printf("StreetAddress2: %s\n", $extension->Address->StreetAddress2);
        }

        printf("CompanyName: %s\n", $extension->CompanyName);
        printf("GeoCodeStatus: %s\n", $extension->GeoCodeStatus);
        if (isset($extension->GeoPoint))
        {
            print("GeoPoint:\n");
            printf("LatitudeInMicroDegrees: %s\n", $extension->GeoPoint->LatitudeInMicroDegrees);
            printf("LongitudeInMicroDegrees: %s\n", $extension->GeoPoint->LongitudeInMicroDegrees);
        }
        printf("IconMediaId: %s\n", $extension->IconMediaId);
        printf("ImageMediaId: %s\n", $extension->ImageMediaId);
        printf("PhoneNumber: %s\n", $extension->PhoneNumber);
        print("\n");
    }
}

function OutputReviewAdExtension($extension)
{
    if (!empty($extension))
    {
        // Output inherited properties of the AdExtension base class.
        OutputAdExtension($extension);

        // Output properties that are specific to the ReviewAdExtension
        printf("IsExact: %s\n", $extension->IsExact);
        printf("Source: %s\n", $extension->Source);
        printf("Text: %s\n", $extension->Text);
        printf("Url: %s\n", $extension->Url);
        print("\n");
    }
}

function OutputSiteLinksAdExtension($extension)
{
    if (!empty($extension))
    {
        // Output inherited properties of the AdExtension base class.
        OutputAdExtension($extension);

        // Output properties that are specific to the SiteLinksAdExtension
        OutputSiteLinks($extension->SiteLinks);
    }
}

function OutputSiteLinks($siteLinks)
{
    if (!empty($siteLinks))
    {
        foreach ($siteLinks->SiteLink as $siteLink)
        {
            printf("Description1: %s\n", $siteLink->Description1);
            printf("Description2: %s\n", $siteLink->Description2);
            printf("DestinationUrl: %s\n", $siteLink->DestinationUrl);
            printf("DevicePreference: %s\n", $siteLink->DevicePreference);            
            printf("DisplayText: %s\n", $siteLink->DisplayText);
            print("FinalMobileUrls: \n");
            if (isset($siteLink->FinalMobileUrls))
            {
                foreach ($siteLink->FinalMobileUrls->string as $finalMobileUrl)
                {
                    print("\t" . $finalMobileUrl);
                }
            }
            print("FinalUrls: \n");
            if (isset($siteLink->FinalMobileUrls))
            {
                foreach ($siteLink->FinalUrls->string as $finalUrl)
                {
                    print("\t" . $finalUrl);
                }
            }
            printf("TrackingUrlTemplate: %s\n", $siteLink->TrackingUrlTemplate);
            print("UrlCustomParameters:\n");
            if (isset($siteLink->UrlCustomParameters) && isset($siteLink->UrlCustomParameters->Parameters))
            {
                foreach ($siteLink->UrlCustomParameters->Parameters->CustomParameter as $customParameter)
                {
                    printf("\tKey: %s\n", $customParameter->Key);
                    printf("\tValue: %s\n", $customParameter->Value);
                }
            }
            print("\n");
        }
    }
}

function OutputSitelink2AdExtension($extension)
{
    if (!empty($extension))
    {
        // Output inherited properties of the AdExtension base class.
        OutputAdExtension($extension);

        // Output properties that are specific to the Sitelink2AdExtension
        printf("Description1: %s\n", $extension->Description1);
        printf("Description2: %s\n", $extension->Description2);
        printf("DestinationUrl: %s\n", $extension->DestinationUrl);
        printf("DevicePreference: %s\n", $extension->DevicePreference);            
        printf("DisplayText: %s\n", $extension->DisplayText);
        print("FinalMobileUrls: \n");
        if (isset($extension->FinalMobileUrls))
        {
            foreach ($extension->FinalMobileUrls->string as $finalMobileUrl)
            {
                print("\t" . $finalMobileUrl);
            }
        }
        print("FinalUrls: \n");
        if (isset($extension->FinalMobileUrls))
        {
            foreach ($extension->FinalUrls->string as $finalUrl)
            {
                print("\t" . $finalUrl);
            }
        }
        printf("TrackingUrlTemplate: %s\n", $extension->TrackingUrlTemplate);
        print("UrlCustomParameters:\n");
        if (isset($extension->UrlCustomParameters) && isset($extension->UrlCustomParameters->Parameters))
        {
            foreach ($extension->UrlCustomParameters->Parameters->CustomParameter as $customParameter)
            {
                printf("\tKey: %s\n", $customParameter->Key);
                printf("\tValue: %s\n", $customParameter->Value);
            }
        }
        print("\n");
    }
}

function OutputStructuredSnippetAdExtension($extension)
{
    if (!empty($extension))
    {
        // Output inherited properties of the AdExtension base class.
        OutputAdExtension($extension);

        // Output properties that are specific to the StructuredSnippetAdExtension
        printf("Header: %s\n", $extension->Header);
        printf("Values: %s\n", join("; ", $extension->Values->string));
        print("\n");
    }
}


/// Set the read-only properties of an ad extension to null. This operation can be useful between calls to
/// GetAdExtensionsByIds and UpdateAdExtensions. The update operation would fail if you send certain read-only
/// fields.
function SetReadOnlyAdExtensionElementsToNull($extension)
{
    if (empty($extension) || !isset($extension->Id))
    {
        return null;
    }
    else
    {
        // Set to null for all extension types.
        $extension->Version = null;

        if ($extension->Type == "LocationAdExtension")
        {
            $extension->GeoCodeStatus = null;
        }
        return $extension;
    }
}


?>