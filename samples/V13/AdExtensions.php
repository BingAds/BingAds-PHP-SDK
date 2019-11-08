<?php

namespace Microsoft\BingAds\Samples\V13;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/OutputHelper.php";
include __DIR__ . "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V13\CampaignManagement classes that will be used.
use Microsoft\BingAds\V13\CampaignManagement\Campaign;
use Microsoft\BingAds\V13\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V13\CampaignManagement\AdExtension;
use Microsoft\BingAds\V13\CampaignManagement\ActionAdExtension;
use Microsoft\BingAds\V13\CampaignManagement\ActionAdExtensionActionType;
use Microsoft\BingAds\V13\CampaignManagement\AppAdExtension;
use Microsoft\BingAds\V13\CampaignManagement\CallAdExtension;
use Microsoft\BingAds\V13\CampaignManagement\CalloutAdExtension;
use Microsoft\BingAds\V13\CampaignManagement\Image;
use Microsoft\BingAds\V13\CampaignManagement\ImageAdExtension;
use Microsoft\BingAds\V13\CampaignManagement\LocationAdExtension;
use Microsoft\BingAds\V13\CampaignManagement\PriceAdExtension;
use Microsoft\BingAds\V13\CampaignManagement\PriceTableRow;
use Microsoft\BingAds\V13\CampaignManagement\ReviewAdExtension;
use Microsoft\BingAds\V13\CampaignManagement\SitelinkAdExtension;
use Microsoft\BingAds\V13\CampaignManagement\StructuredSnippetAdExtension;
use Microsoft\BingAds\V13\CampaignManagement\Schedule;
use Microsoft\BingAds\V13\CampaignManagement\DayTime;
use Microsoft\BingAds\V13\CampaignManagement\Day;
use Microsoft\BingAds\V13\CampaignManagement\Minute;
use Microsoft\BingAds\V13\CampaignManagement\Date;
use Microsoft\BingAds\V13\CampaignManagement\AdExtensionAssociation;
use Microsoft\BingAds\V13\CampaignManagement\AdExtensionAssociationCollection;
use Microsoft\BingAds\V13\CampaignManagement\AdExtensionEditorialReason;
use Microsoft\BingAds\V13\CampaignManagement\AdExtensionEditorialReasonCollection;
use Microsoft\BingAds\V13\CampaignManagement\AdExtensionEditorialStatus;
use Microsoft\BingAds\V13\CampaignManagement\AdExtensionIdentity;
use Microsoft\BingAds\V13\CampaignManagement\AdExtensionIdToEntityIdAssociation;
use Microsoft\BingAds\V13\CampaignManagement\AdExtensionStatus;
use Microsoft\BingAds\V13\CampaignManagement\AdExtensionsTypeFilter;
use Microsoft\BingAds\V13\CampaignManagement\Address;
use Microsoft\BingAds\V13\CampaignManagement\AssociationType;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V13\AuthHelper;
use Microsoft\BingAds\Samples\V13\CampaignManagementExampleHelper;

// To run this example you'll need to provide your own image.  
// For required aspect ratios and recommended dimensions please see 
// Image remarks at https://go.microsoft.com/fwlink/?linkid=872754.

$mediaFilePath = "c:\\dev\\media\\";
$imageAdExtensionMediaFileName = "imageadextension300x200.png";

try
{
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    date_default_timezone_set('UTC');

    // Add a campaign to associate with ad extensions.
    
    $campaigns = array();   
    $campaign = new Campaign();
    $campaign->Name = "Women's Shoes " . $_SERVER['REQUEST_TIME'];
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->DailyBudget = 50.00;
    $campaign->Languages = array("All");
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";
    $campaigns[] = $campaign;
    
    print("-----\r\nAddCampaigns:\r\n");
    $addCampaignsResponse = CampaignManagementExampleHelper::AddCampaigns(
        $GLOBALS['AuthorizationData']->AccountId, 
        $campaigns
    );
    $campaignIds = $addCampaignsResponse->CampaignIds;
    print("CampaignIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($campaignIds);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($addCampaignsResponse->PartialErrors);

    $imageAdExtensionMedia = GetImageMedia(
        "Image15x10",
        $mediaFilePath . $imageAdExtensionMediaFileName
    );

    $addMedia = array();
    $addMedia[] = $imageAdExtensionMedia;

    print("-----\r\nAddMedia:\r\n");
    $mediaIds = CampaignManagementExampleHelper::AddMedia(
        $GLOBALS['AuthorizationData']->AccountId,
        $addMedia
    )->MediaIds;        
    print("MediaIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($mediaIds);
	
    // Add the extensions to the account's library.
    
    $adExtensions = array();

    $extension = new ActionAdExtension();
    $extension->ActionType = ActionAdExtensionActionType::ActNow;
    $extension->FinalUrls = array("http://www.contoso.com/womenshoesale");;
    $extension->Language = "English";
    $extension->Status = AdExtensionStatus::Active;
    $encodedExtension = new SoapVar(
        $extension, SOAP_ENC_OBJECT, 
        'ActionAdExtension', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $adExtensions[] = $encodedExtension;
    
    $extension = new AppAdExtension();
    $extension->AppPlatform = "Windows";
    $extension->AppStoreId="AppStoreIdGoesHere";
    $extension->DisplayText= "Contoso";
    $extension->DestinationUrl="DestinationUrlGoesHere";
    $encodedExtension = new SoapVar(
        $extension, SOAP_ENC_OBJECT, 
        'AppAdExtension', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    // If you supply the AppAdExtension properties above, then you can add this line.
    //$adExtensions[] = $encodedExtension;
    
    $extension = new CallAdExtension();
    $extension->CountryCode = "US";
    $extension->PhoneNumber = "2065550100";
    $extension->IsCallOnly = false;
    // Include the call extension Monday - Friday from 9am - 9pm
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
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $adExtensions[] = $encodedExtension;
    
    $extension = new CalloutAdExtension();
    $extension->Text = "Callout Text";
    $encodedExtension = new SoapVar(
        $extension, 
        SOAP_ENC_OBJECT, 
        'CalloutAdExtension', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $adExtensions[] = $encodedExtension;
        
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
    // Include the location extension every Saturday morning
    // in the search user's time zone.
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
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $adExtensions[] = $encodedExtension;  

    $extension = new PriceAdExtension();
    $extension->Language="English";
    $extension->PriceExtensionType='Events';
    $tableRows = array();
    $tableRowA = new PriceTableRow();
    $tableRowA->CurrencyCode="USD";
    $tableRowA->Description="Come to the event";
    $tableRowA->FinalUrls = array("http://www.contoso.com/womenshoesale");;
    $tableRowA->Header="New Event";
    $tableRowA->Price=9.99;
    $tableRowA->PriceQualifier='From';
    $tableRowA->PriceUnit='PerDay';
    $tableRows[] = $tableRowA;
    $tableRowB = new PriceTableRow();
    $tableRowB->CurrencyCode="USD";
    $tableRowB->Description="Come to the next event";
    $tableRowB->FinalUrls = array("http://www.contoso.com/womenshoesale");;
    $tableRowB->Header="Next Event";
    $tableRowB->Price=9.99;
    $tableRowB->PriceQualifier='From';
    $tableRowB->PriceUnit='PerDay';
    $tableRows[] = $tableRowB;
    $tableRowC = new PriceTableRow();
    $tableRowC->CurrencyCode="USD";
    $tableRowC->Description="Come to the final event";
    $tableRowC->FinalUrls = array("http://www.contoso.com/womenshoesale");;
    $tableRowC->Header="Final Event";
    $tableRowC->Price=9.99;
    $tableRowC->PriceQualifier='From';
    $tableRowC->PriceUnit='PerDay';
    $tableRows[] = $tableRowC;
    $extension->TableRows=$tableRows;
    $encodedExtension = new SoapVar(
        $extension, 
        SOAP_ENC_OBJECT, 
        'PriceAdExtension', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $adExtensions[] = $encodedExtension;  
    
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
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $adExtensions[] = $encodedExtension;

    $extension = new SitelinkAdExtension();
    $extension->Description1 = "Simple & Transparent.";
    $extension->Description2 = "No Upfront Cost.";
    $extension->DisplayText = "Women's Shoe Sale";
    $extension->FinalUrls = array();
    $extension->FinalUrls[] = "http://www.contoso.com/womenshoesale";    
    $encodedExtension = new SoapVar(
        $extension, 
        SOAP_ENC_OBJECT, 
        'SitelinkAdExtension', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $adExtensions[] = $encodedExtension;
        
    $extension = new StructuredSnippetAdExtension();
    $extension->Header = "Brands";
    $extension->Values = array("Windows", "Xbox", "Skype");
    $encodedExtension = new SoapVar(
        $extension, 
        SOAP_ENC_OBJECT, 
        'StructuredSnippetAdExtension', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $adExtensions[] = $encodedExtension;
        
    // Add all extensions to the account's ad extension library
    
    print("-----\r\nAddAdExtensions:\r\n");
    $addAdExtensionsResponse = CampaignManagementExampleHelper::AddAdExtensions(
    	$GLOBALS['AuthorizationData']->AccountId, 
    	$adExtensions
    );    
    $adExtensionIdentities = $addAdExtensionsResponse->AdExtensionIdentities;
    print("AdExtensionIdentities:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfAdExtensionIdentity($adExtensionIdentities);
    print("NestedPartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchErrorCollection($addAdExtensionsResponse->NestedPartialErrors);
    
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
            $adExtensionIdToEntityIdAssociations[$index]->EntityId = $campaignIds->long[0];
                    
            $adExtensionIds[$index] = $adExtensionIdentities->AdExtensionIdentity[$index]->Id;
        }
    };

    // Associate the ad extensions with the campaign. 
    
    print("-----\r\nSetAdExtensionsAssociations:\r\n");
    $setAdExtensionsAssociationsResponse = CampaignManagementExampleHelper::SetAdExtensionsAssociations(
    	$GLOBALS['AuthorizationData']->AccountId,
    	$adExtensionIdToEntityIdAssociations,
        AssociationType::Campaign
    );
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($setAdExtensionsAssociationsResponse->PartialErrors);

    // Get editorial rejection reasons for the respective ad extension and entity associations.
    
    print("-----\r\nGetAdExtensionsEditorialReasons:\r\n");
    $getAdExtensionsEditorialReasonsResponse = CampaignManagementExampleHelper::GetAdExtensionsEditorialReasons(
    	$GLOBALS['AuthorizationData']->AccountId,
    	$adExtensionIdToEntityIdAssociations,
    	AssociationType::Campaign
    );
    $adExtensionEditorialReasonCollection = $getAdExtensionsEditorialReasonsResponse->EditorialReasons;
    print("EditorialReasons:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfAdExtensionEditorialReasonCollection($adExtensionEditorialReasonCollection);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($getAdExtensionsEditorialReasonsResponse->PartialErrors);
   
    // Get only the location extensions and remove scheduling.

    $adExtensionsTypeFilter = array(AdExtensionsTypeFilter::LocationAdExtension);

    // In this example partial errors will be returned for indices where the ad extensions 
    // are not location ad extensions.
    // This is an example, and ideally you would only send the required ad extension IDs.

    print("-----\r\nGetAdExtensionsByIds:\r\n");
    $adExtensions = CampaignManagementExampleHelper::GetAdExtensionsByIds(
    	$GLOBALS['AuthorizationData']->AccountId,
    	$adExtensionIds,
        $adExtensionsTypeFilter,
        null
    )->AdExtensions;
    print("AdExtensions:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfAdExtension($adExtensions);

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
                $GLOBALS['CampaignManagementProxy']->GetNamespace()
            );
            
            $updateExtensionIds[] = $updateExtension->Id;
        }
    }

    print("-----\r\nUpdateAdExtensions:\r\n");
    CampaignManagementExampleHelper::UpdateAdExtensions(
        $GLOBALS['AuthorizationData']->AccountId, 
        $updateExtensions
    );
    print("Removed scheduling from the location ad extensions.\r\n");

    // Get only the location extension to output the result.
    
    print("-----\r\nGetAdExtensionsByIds:\r\n");
    $adExtensions = CampaignManagementExampleHelper::GetAdExtensionsByIds(
    	$GLOBALS['AuthorizationData']->AccountId,
    	$adExtensionIds,
        $adExtensionsTypeFilter,
        null
    )->AdExtensions;
    print("AdExtensions:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfAdExtension($adExtensions);
    
    // Delete the ad extension associations, ad extensions, and campaign, that were previously added.  
    // At this point the ad extensions are still available in the account's ad extensions library. 

    print("-----\r\nDeleteAdExtensionsAssociations:\r\n");
    CampaignManagementExampleHelper::DeleteAdExtensionsAssociations(
    	$GLOBALS['AuthorizationData']->AccountId, 
    	$adExtensionIdToEntityIdAssociations, 
    	AssociationType::Campaign
    );
    
    // Deletes the ad extensions from the account's ad extension library.

    print("-----\r\nDeleteAdExtensions:\r\n");
    CampaignManagementExampleHelper::DeleteAdExtensions(
    	$GLOBALS['AuthorizationData']->AccountId, 
    	$adExtensionIds
    );
    print("Deleted ad extensions.\r\n");

    // Delete the account's media that was used for the image ad extension.

    print("-----\r\nDeleteMedia:\r\n");
    CampaignManagementExampleHelper::DeleteMedia(
        $GLOBALS['AuthorizationData']->AccountId, 
        $mediaIds
    );
    
    foreach ($mediaIds->long as $id)
    {
        printf("Deleted Media Id %s\r\n", $id);
    }

    // Delete the campaign and everything it contains e.g., ad groups and ads.

    print("-----\r\nDeleteCampaigns:\r\n");
    CampaignManagementExampleHelper::DeleteCampaigns(
        $GLOBALS['AuthorizationData']->AccountId, 
        array($campaignIds->long[0])
    );
    printf("Deleted Campaign Id %s\r\n", $campaignIds->long[0]);    
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

function GetImageMedia(
    $mediaType,
    $imageFileName){
    $image = new Image();
    $image->Data = GetBase64ImageData($imageFileName);
    $image->MediaType = $mediaType;
    $image->Type = "Image";

    $encodedImage = new SoapVar(
        $image, 
        SOAP_ENC_OBJECT, 
        'Image', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );

    return $encodedImage;
}

function GetBase64ImageData($imageFileName){
    $imageData = file_get_contents($imageFileName);
    $base64ImageData = base64_encode($imageData);

    return $base64ImageData;
}
