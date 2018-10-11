<?php

namespace Microsoft\BingAds\Samples\V12;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/OutputHelper.php";
include __DIR__ . "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V12\CampaignManagement classes that will be used.
use Microsoft\BingAds\V12\CampaignManagement\Campaign;
use Microsoft\BingAds\V12\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V12\CampaignManagement\AdExtension;
use Microsoft\BingAds\V12\CampaignManagement\AppAdExtension;
use Microsoft\BingAds\V12\CampaignManagement\CallAdExtension;
use Microsoft\BingAds\V12\CampaignManagement\CalloutAdExtension;
use Microsoft\BingAds\V12\CampaignManagement\ImageAdExtension;
use Microsoft\BingAds\V12\CampaignManagement\LocationAdExtension;
use Microsoft\BingAds\V12\CampaignManagement\ReviewAdExtension;
use Microsoft\BingAds\V12\CampaignManagement\SiteLinksAdExtension;
use Microsoft\BingAds\V12\CampaignManagement\SitelinkAdExtension;
use Microsoft\BingAds\V12\CampaignManagement\StructuredSnippetAdExtension;
use Microsoft\BingAds\V12\CampaignManagement\KeyValuePairOfstringstring;
use Microsoft\BingAds\V12\CampaignManagement\Schedule;
use Microsoft\BingAds\V12\CampaignManagement\DayTime;
use Microsoft\BingAds\V12\CampaignManagement\Day;
use Microsoft\BingAds\V12\CampaignManagement\Minute;
use Microsoft\BingAds\V12\CampaignManagement\Date;
use Microsoft\BingAds\V12\CampaignManagement\AdExtensionAssociation;
use Microsoft\BingAds\V12\CampaignManagement\AdExtensionAssociationCollection;
use Microsoft\BingAds\V12\CampaignManagement\AdExtensionEditorialReason;
use Microsoft\BingAds\V12\CampaignManagement\AdExtensionEditorialReasonCollection;
use Microsoft\BingAds\V12\CampaignManagement\AdExtensionEditorialStatus;
use Microsoft\BingAds\V12\CampaignManagement\AdExtensionIdentity;
use Microsoft\BingAds\V12\CampaignManagement\AdExtensionIdToEntityIdAssociation;
use Microsoft\BingAds\V12\CampaignManagement\AdExtensionStatus;
use Microsoft\BingAds\V12\CampaignManagement\AdExtensionsTypeFilter;
use Microsoft\BingAds\V12\CampaignManagement\Address;
use Microsoft\BingAds\V12\CampaignManagement\SiteLink;
use Microsoft\BingAds\V12\CampaignManagement\AssociationType;
use Microsoft\BingAds\V12\CampaignManagement\CustomParameters;
use Microsoft\BingAds\V12\CampaignManagement\CustomParameter;

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

    date_default_timezone_set('UTC');
       
    // Specify one or more campaigns.
    
    $campaigns = array();
   
    $campaign = new Campaign();
    $campaign->Name = "Winter Clothing " . $_SERVER['REQUEST_TIME'];
    $campaign->Description = "Winter clothing line.";
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->DailyBudget = 50.00;
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";

    // Used with FinalUrls shown in the sitelinks that we will add below.
    $campaign->TrackingUrlTemplate =
        "http://tracker.example.com/?season={_season}&promocode={_promocode}&u={lpurl}";

    $campaigns[] = $campaign;
    
    print "AddCampaigns\n";
    $addCampaignsResponse = CampaignManagementExampleHelper::AddCampaigns(
        $GLOBALS['AuthorizationData']->AccountId, 
        $campaigns,
        false);
    $nillableCampaignIds = $addCampaignsResponse->CampaignIds;
    CampaignManagementExampleHelper::OutputArrayOfLong($nillableCampaignIds);
    if(isset($addCampaignsResponse->PartialErrors->BatchError)){
        CampaignManagementExampleHelper::OutputArrayOfBatchError($addCampaignsResponse->PartialErrors);
    }
	
    // Specify the extensions.
    
    $adExtensions = array();

    // Specify an app extension.
    
    $extension = new AppAdExtension();
    $extension->AppPlatform = "Windows";
    $extension->AppStoreId="AppStoreIdGoesHere";
    $extension->DisplayText= "Contoso";
    $extension->DestinationUrl="DestinationUrlGoesHere";
    $encodedExtension = new SoapVar(
        $extension, SOAP_ENC_OBJECT, 
        'AppAdExtension', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
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
    $encodedExtension = new SoapVar(
        $extension, 
        SOAP_ENC_OBJECT, 
        'CallAdExtension', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    $adExtensions[] = $encodedExtension;

    // Specify a callout extension.
    
    $extension = new CalloutAdExtension();
    $extension->Text = "Callout Text";
    $encodedExtension = new SoapVar(
        $extension, 
        SOAP_ENC_OBJECT, 
        'CalloutAdExtension', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    $adExtensions[] = $encodedExtension;
    
    // Specify a location extension.
    
    $extension = new LocationAdExtension();
    $extension->PhoneNumber = "206-555-0100";
    $extension->CompanyName = "Alpine Ski House";
    $extension->Address = new Address;
    $extension->Address->StreetAddress = "1234 Washington Place";
    $extension->Address->StreetAddress2 = "Suite 1210";
    $extension->Address->CityName = "Woodinville";
    $extension->Address->ProvinceName = "WA"; 
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
    $encodedExtension = new SoapVar(
        $extension, 
        SOAP_ENC_OBJECT, 
        'LocationAdExtension', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    $adExtensions[] = $encodedExtension;  

    // Specify a review extension.
    
    $extension = new ReviewAdExtension();
    $extension->IsExact = true;
    $extension->Source = "Review Source Name";
    $extension->Text = "Review Text";
    // The Url of the third-party review. This is not your business Url.
    $extension->Url = "http://review.contoso.com"; 
    $encodedExtension = new SoapVar(
        $extension, 
        SOAP_ENC_OBJECT, 
        'ReviewAdExtension', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    $adExtensions[] = $encodedExtension;
    
    // Specify a structured snippet extension.
    
    $extension = new StructuredSnippetAdExtension();
    $extension->Header = "Brands";
    $extension->Values = array("Windows", "Xbox", "Skype");
    $encodedExtension = new SoapVar(
        $extension, 
        SOAP_ENC_OBJECT, 
        'StructuredSnippetAdExtension', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    $adExtensions[] = $encodedExtension;
    
    foreach(GetSampleSitelinkAdExtensions() as $encodedExtension)
    {
        $adExtensions[] = $encodedExtension;
    }
        
    // Add all extensions to the account's ad extension library
    
    print("Add ad extensions.\n\n");
    $addAdExtensionsResponse = CampaignManagementExampleHelper::AddAdExtensions(
    	$GLOBALS['AuthorizationData']->AccountId, 
    	$adExtensions
        );    
    CampaignManagementExampleHelper::OutputArrayOfAdExtensionIdentity($addAdExtensionsResponse->AdExtensionIdentities);
    CampaignManagementExampleHelper::OutputArrayOfBatchErrorCollection($addAdExtensionsResponse->NestedPartialErrors);
        
    $adExtensionIdentities = $addAdExtensionsResponse->AdExtensionIdentities;

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
        if(!empty($adExtensionIdentities->AdExtensionIdentity[$index]) && isset($adExtensionIdentities->AdExtensionIdentity[$index]->Id))
        {
            $adExtensionIdToEntityIdAssociations[$index] = new AdExtensionIdToEntityIdAssociation();
            $adExtensionIdToEntityIdAssociations[$index]->AdExtensionId = $adExtensionIdentities->AdExtensionIdentity[$index]->Id;;
            $adExtensionIdToEntityIdAssociations[$index]->EntityId = $nillableCampaignIds->long[0];
                    
            $adExtensionIds[$index] = $adExtensionIdentities->AdExtensionIdentity[$index]->Id;
        }
    };

    // Associate the specified ad extensions with the respective campaigns or ad groups. 
    
    $setAdExtensionsAssociationsResponse = CampaignManagementExampleHelper::SetAdExtensionsAssociations(
    	$GLOBALS['AuthorizationData']->AccountId,
    	$adExtensionIdToEntityIdAssociations,
        AssociationType::Campaign);
    
    CampaignManagementExampleHelper::OutputArrayOfBatchError($setAdExtensionsAssociationsResponse->PartialErrors);

    // Get editorial rejection reasons for the respective ad extension and entity associations.
    
    $adExtensionEditorialReasonCollection = CampaignManagementExampleHelper::GetAdExtensionsEditorialReasons(
    	$GLOBALS['AuthorizationData']->AccountId,
    	$adExtensionIdToEntityIdAssociations,
    	AssociationType::Campaign
    	)->EditorialReasons;
          
    $adExtensionsTypeFilter = array(
        AdExtensionsTypeFilter::AppAdExtension,
    	AdExtensionsTypeFilter::CallAdExtension,
        AdExtensionsTypeFilter::CalloutAdExtension,
        AdExtensionsTypeFilter::ImageAdExtension,
    	AdExtensionsTypeFilter::LocationAdExtension,
        AdExtensionsTypeFilter::ReviewAdExtension,
    	AdExtensionsTypeFilter::SitelinkAdExtension,
        AdExtensionsTypeFilter::StructuredSnippetAdExtension,
    );
    
    // Get the specified ad extensions from the account'ss ad extension library.
            
    $adExtensions = CampaignManagementExampleHelper::GetAdExtensionsByIds(
    	$GLOBALS['AuthorizationData']->AccountId,
    	$adExtensionIds,
    	$adExtensionsTypeFilter
        )->AdExtensions;
            
    print("List of ad extensions that were added above:\n\n");
    CampaignManagementExampleHelper::OutputArrayOfAdExtension($adExtensions);
    
    // Get only the location extensions and remove scheduling.

    $adExtensionsTypeFilter = array(AdExtensionsTypeFilter::LocationAdExtension);

    $adExtensions = CampaignManagementExampleHelper::GetAdExtensionsByIds(
    	$GLOBALS['AuthorizationData']->AccountId,
    	$adExtensionIds,
    	$adExtensionsTypeFilter
    	)->AdExtensions;

    $updateExtensions = array();
    $updateExtensionIds = array();

    foreach ($adExtensions->AdExtension as $extension)
    {
        // GetAdExtensionsByIds will return a nil element if the request filters / conditions were not met.
        if(!empty($extension) && isset($extension->Id))
        {
            // Remove read-only elements that would otherwise cause the update operation to fail.
            $updateExtension = OutputHelper::SetReadOnlyAdExtensionElementsToNull($extension);

            // If you set the Scheduling element null, any existing scheduling set for the ad extension will remain unchanged. 
            // If you set this to any non-null Schedule object, you are effectively replacing existing scheduling 
            // for the ad extension. In this example, we will remove any existing scheduling by setting this element  
            // to an empty Schedule object.
            $updateExtension->Scheduling = new Schedule();

            $updateExtensions[] = new SoapVar(
                $updateExtension, 
                SOAP_ENC_OBJECT, 
                'LocationAdExtension', 
                $GLOBALS['CampaignManagementProxy']->GetNamespace());
            
            $updateExtensionIds[] = $updateExtension->Id;
        }
    }

    print("Removing scheduling from the location ad extensions..\n\n");
    CampaignManagementExampleHelper::UpdateAdExtensions($GLOBALS['AuthorizationData']->AccountId, $updateExtensions);
	
    $adExtensions = CampaignManagementExampleHelper::GetAdExtensionsByIds(
    	$GLOBALS['AuthorizationData']->AccountId,
    	$updateExtensionIds,
        $adExtensionsTypeFilter)->AdExtensions;

    print("List of ad extensions that were updated above:\n\n");
    CampaignManagementExampleHelper::OutputArrayOfAdExtension($adExtensions);
    
    // You should omit these delete operations if you want to view the added entities in the 
    // Bing Ads web application or another tool.

    // Remove the specified associations from the respective campaigns or ad groups.
    // The extensions are still available in the account's extensions library.
    CampaignManagementExampleHelper::DeleteAdExtensionsAssociations(
    	$GLOBALS['AuthorizationData']->AccountId, 
    	$adExtensionIdToEntityIdAssociations, 
    	AssociationType::Campaign
    );
    
    // Deletes the ad extensions from the account's ad extension library.
    CampaignManagementExampleHelper::DeleteAdExtensions(
    	$GLOBALS['AuthorizationData']->AccountId, 
    	$adExtensionIds
    );
    
    foreach ($adExtensionIds as $id)
    {
        printf("Deleted Ad Extension Id %s\n\n", $id);
    }

    // Delete the campaign. 
    CampaignManagementExampleHelper::DeleteCampaigns($GLOBALS['AuthorizationData']->AccountId, array($nillableCampaignIds->long[0]));
    printf("Deleted CampaignId %d\n\n", $nillableCampaignIds->long[0]);
    
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

function GetSampleSitelinkAdExtensions()
{
    $adExtensions = array();
    
    for ($index = 0; $index < 2; $index++)
    {
        $extension = new SitelinkAdExtension();
        $extension->Description1 = "Simple & Transparent.";
        $extension->Description2 = "No Upfront Cost.";
        $extension->DisplayText = "Women's Shoe Sale " . ($index+1);

        // With FinalUrls you can separate the tracking template, custom parameters, and 
        // landing page URLs. 

        $extension->FinalUrls = array();
        $extension->FinalUrls[] = "http://www.contoso.com/womenshoesale";

        // Final Mobile URLs can also be used if you want to direct the user to a different page 
        // for mobile devices.
        $extension->FinalMobileUrls = array();
        $extension->FinalMobileUrls[] = "http://mobile.contoso.com/womenshoesale";

        // Set custom parameters that are specific to this sitelink.
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
        
        $encodedExtension = new SoapVar(
            $extension, 
            SOAP_ENC_OBJECT, 
            'SitelinkAdExtension', 
            $GLOBALS['CampaignManagementProxy']->GetNamespace());
        $adExtensions[] = $encodedExtension;
    }
    
    return $adExtensions;
}


