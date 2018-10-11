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

//Specify the Microsoft\BingAds\V12\CampaignManagement classes that will be used.
use Microsoft\BingAds\V12\CampaignManagement\Campaign;
use Microsoft\BingAds\V12\CampaignManagement\CampaignType;
use Microsoft\BingAds\V12\CampaignManagement\Label;
use Microsoft\BingAds\V12\CampaignManagement\LabelAssociation;
use Microsoft\BingAds\V12\CampaignManagement\Paging;
use Microsoft\BingAds\V12\CampaignManagement\EntityType;
use Microsoft\BingAds\V12\CampaignManagement\AdGroup;
use Microsoft\BingAds\V12\CampaignManagement\Keyword;
use Microsoft\BingAds\V12\CampaignManagement\ExpandedTextAd;
use Microsoft\BingAds\V12\CampaignManagement\Bid;
use Microsoft\BingAds\V12\CampaignManagement\MatchType;
use Microsoft\BingAds\V12\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V12\CampaignManagement\Date;

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

$GLOBALS['MaxGetLabelsByIds'] = 1000;
$GLOBALS['MaxLabelIdsForGetLabelAssociations'] = 1;
$GLOBALS['MaxEntityIdsForGetLabelAssociations'] = 100;
$GLOBALS['MaxPagingSize'] = 1000;
    
try
{
    // Authenticate for Bing Ads services with a Microsoft Account.
    
    AuthHelper::Authenticate();

    $GLOBALS['CampaignManagementProxy'] = new ServiceClient(
        ServiceClientType::CampaignManagementVersion12, 
        $GLOBALS['AuthorizationData'], 
        AuthHelper::GetApiEnvironment());

    // Create a campaign, ad group, keyword, and expanded text ad.
    
    $campaigns = array();
    $campaign = new Campaign();
    $campaign->Name = "Women's Shoes " . $_SERVER['REQUEST_TIME'];
    $campaign->Description = "Red shoes line.";
    $campaign->DailyBudget = 50;
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";
    $campaigns[] = $campaign;

    $adGroups = array();
    date_default_timezone_set('UTC');
    $endDate = new Date();
    $endDate->Day = 31;
    $endDate->Month = 12;
    $endDate->Year = date("Y");
    $adGroup = new AdGroup();
    $adGroup->Name = "Women's Red Shoe Sale";
    $adGroup->StartDate = null;
    $adGroup->EndDate = $endDate;
    $adGroup->CpcBid = new Bid();
    $adGroup->CpcBid->Amount = 0.09;
    $adGroup->Language = "English";    
    $adGroups[] = $adGroup;

    $keywords = array();
    $keyword = new Keyword();
    $keyword->Bid = new Bid();
    $keyword->Bid->Amount = 0.47;
    $keyword->Param2 = "10% Off";
    $keyword->MatchType = MatchType::Phrase;
    $keyword->Text = "Brand-A Shoes";
    $keywords[] = $keyword;

    $ads = array();
    $expandedTextAd = new ExpandedTextAd();
    $expandedTextAd->TitlePart1 = "Contoso";
    $expandedTextAd->TitlePart2 = "Fast & Easy Setup";
    $expandedTextAd->Text = "Find New Customers & Increase Sales! Start Advertising on Contoso Today.";
    $expandedTextAd->Path1 = "seattle";
    $expandedTextAd->Path2 = "shoe sale";
    $expandedTextAd->FinalUrls = array();
    $expandedTextAd->FinalUrls[] = "http://www.contoso.com/womenshoesale";
    $ads[] = new SoapVar(
        $expandedTextAd, 
        SOAP_ENC_OBJECT, 
        'ExpandedTextAd', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());

    
    // Create labels that can be applied later to campaigns, ad groups, keywords, and ads.

    $labels = array();

    for ($labelIndex = 0; $labelIndex < 50; $labelIndex++)
    {
        $color = "#".substr("000000".dechex(rand()),-6); 
        $label = new Label();
        $label->ColorCode = $color;
        $label->Description = "Label Description";
        $label->Name = "Label Name " . $color . " " . $_SERVER['REQUEST_TIME'];
        $labels[] = $label;
    }

    // Add the campaign, ad group, keyword, ad, and labels.
    
    $addLabelsResponse = CampaignManagementExampleHelper::AddLabels($labels);
    $nillableLabelIds = $addLabelsResponse->LabelIds;
    $labelErrors = $addLabelsResponse->PartialErrors;
    print("New Label Ids:\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($nillableLabelIds);
    CampaignManagementExampleHelper::OutputArrayOfBatchError($labelErrors);

    $addCampaignsResponse = CampaignManagementExampleHelper::AddCampaigns(
        $GLOBALS['AuthorizationData']->AccountId, 
        $campaigns,
        false);
    $nillableCampaignIds = $addCampaignsResponse->CampaignIds;
    $campaignErrors = $addLabelsResponse->PartialErrors;
    print("New Campaign Ids:\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($nillableCampaignIds);
    CampaignManagementExampleHelper::OutputArrayOfBatchError($campaignErrors);

    $addAdGroupsResponse = CampaignManagementExampleHelper::AddAdGroups(
        $nillableCampaignIds->long[0], 
        $adGroups,
        null);
    $nillableAdGroupIds = $addAdGroupsResponse->AdGroupIds;
    $adGroupErrors = $addAdGroupsResponse->PartialErrors;
    print("New AdGroup Ids:\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($nillableAdGroupIds);
    CampaignManagementExampleHelper::OutputArrayOfBatchError($adGroupErrors);

    $addKeywordsResponse = CampaignManagementExampleHelper::AddKeywords(
        $nillableAdGroupIds->long[0], 
        $keywords,
        null);
    $nillableKeywordIds = $addKeywordsResponse->KeywordIds;
    $keywordErrors = $addKeywordsResponse->PartialErrors;
    print("New Keyword Ids:\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($nillableKeywordIds);
    CampaignManagementExampleHelper::OutputArrayOfBatchError($keywordErrors);

    $addAdsResponse = CampaignManagementExampleHelper::AddAds($nillableAdGroupIds->long[0], $ads);
    $nillableAdIds = $addAdsResponse->AdIds;
    $adErrors = $addAdsResponse->PartialErrors;
    print("New Ad Ids:\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($nillableAdIds);
    CampaignManagementExampleHelper::OutputArrayOfBatchError($adErrors);
          
    $labelIds = $nillableLabelIds;

    print("\nGet all the labels that we added above...\n");

    $labelsPaging = new Paging();
    $labelsPaging->Index = 0;
    $labelsPaging->Size = $GLOBALS['MaxGetLabelsByIds'];
    $getLabelsByIdsResponse = CampaignManagementExampleHelper::GetLabelsByIds(
        $labelIds,
        $labelsPaging
    );
    CampaignManagementExampleHelper::OutputArrayOfLabel($getLabelsByIdsResponse->Labels);

    print("\nUpdate the label color and then retrieve the labels again to confirm the changes....\n");

    $updateLabels = array();
    foreach ($getLabelsByIdsResponse->Labels->Label as $label)
    {
        $label->ColorCode = "#".substr("000000".dechex(rand()),-6);
        $updateLabels[] = $label;
    }
    $updateLabelsResponse = CampaignManagementExampleHelper::UpdateLabels($updateLabels);

    $getLabelsByIdsResponse = CampaignManagementExampleHelper::GetLabelsByIds(
        $labelIds,
        $labelsPaging
    );
    CampaignManagementExampleHelper::OutputArrayOfLabel($getLabelsByIdsResponse->Labels);

    $campaignLabelAssociations = CreateExampleLabelAssociationsByEntityId($nillableCampaignIds->long[0], $labelIds);
    print("\nAssociating all of the labels with a campaign...\n");
    CampaignManagementExampleHelper::OutputArrayOfLabelAssociation($campaignLabelAssociations);
    $setLabelAssociationsResponse = CampaignManagementExampleHelper::SetLabelAssociations(
        EntityType::Campaign, 
        $campaignLabelAssociations);

    $adGroupLabelAssociations = CreateExampleLabelAssociationsByEntityId($nillableAdGroupIds->long[0], $labelIds);
    print("\nAssociating all of the labels with an ad group...\n");
    CampaignManagementExampleHelper::OutputArrayOfLabelAssociation($adGroupLabelAssociations);
    $setLabelAssociationsResponse = CampaignManagementExampleHelper::SetLabelAssociations(
        EntityType::AdGroup, 
        $adGroupLabelAssociations);

    $keywordLabelAssociations = CreateExampleLabelAssociationsByEntityId($nillableKeywordIds->long[0], $labelIds);
    print("\nAssociating all of the labels with a keyword...\n");
    CampaignManagementExampleHelper::OutputArrayOfLabelAssociation($keywordLabelAssociations);
    $setLabelAssociationsResponse = CampaignManagementExampleHelper::SetLabelAssociations(
        EntityType::Keyword, 
        $keywordLabelAssociations);

    $adLabelAssociations = CreateExampleLabelAssociationsByEntityId($nillableAdIds->long[0], $labelIds);
    print("\nAssociating all of the labels with an ad...\n");
    CampaignManagementExampleHelper::OutputArrayOfLabelAssociation($adLabelAssociations);
    $setLabelAssociationsResponse = CampaignManagementExampleHelper::SetLabelAssociations(
        EntityType::Ad, 
        $adLabelAssociations);


    print("\nUse paging to get all campaign label associations...\n");
    $getLabelAssociationsByLabelIds = GetLabelAssociationsByLabelIdsHelper(
        EntityType::Campaign,
        $labelIds);
    CampaignManagementExampleHelper::OutputArrayOfLabelAssociation($getLabelAssociationsByLabelIds);

    print("\nUse paging to get all ad group label associations...\n");
    $getLabelAssociationsByLabelIds = GetLabelAssociationsByLabelIdsHelper(
        EntityType::AdGroup,
        $labelIds);
    CampaignManagementExampleHelper::OutputArrayOfLabelAssociation($getLabelAssociationsByLabelIds);

    print("\nUse paging to get all keyword label associations...\n");
    $getLabelAssociationsByLabelIds = GetLabelAssociationsByLabelIdsHelper(
        EntityType::Keyword,
        $labelIds);
    CampaignManagementExampleHelper::OutputArrayOfLabelAssociation($getLabelAssociationsByLabelIds);

    print("\nUse paging to get all ad label associations...\n");
    $getLabelAssociationsByLabelIds = GetLabelAssociationsByLabelIdsHelper(
        EntityType::Ad,
        $labelIds);
    CampaignManagementExampleHelper::OutputArrayOfLabelAssociation($getLabelAssociationsByLabelIds);

    print("\nGet all label associations for all specified campaigns...\n");
    $getLabelAssociationsByEntityIds = GetLabelAssociationsByEntityIdsHelper(
        EntityType::Campaign,
        $nillableCampaignIds
    );
    CampaignManagementExampleHelper::OutputArrayOfLabelAssociation($getLabelAssociationsByEntityIds);

    print("\nGet all label associations for all specified ad groups...\n");
    $getLabelAssociationsByEntityIds = GetLabelAssociationsByEntityIdsHelper(
        EntityType::AdGroup,
        $nillableAdGroupIds
    );
    CampaignManagementExampleHelper::OutputArrayOfLabelAssociation($getLabelAssociationsByEntityIds);

    print("\nGet all label associations for all specified keywords...\n");
    $getLabelAssociationsByEntityIds = GetLabelAssociationsByEntityIdsHelper(
        EntityType::Keyword,
        $nillableKeywordIds
    );
    CampaignManagementExampleHelper::OutputArrayOfLabelAssociation($getLabelAssociationsByEntityIds);

    print("\nGet all label associations for all specified ads...\n");
    $getLabelAssociationsByEntityIds = GetLabelAssociationsByEntityIdsHelper(
        EntityType::Ad,
        $nillableAdIds
    );
    CampaignManagementExampleHelper::OutputArrayOfLabelAssociation($getLabelAssociationsByEntityIds);

    print("\nDelete all label associations that we set above....\n");

    // This is not necessary if you are deleting the corresponding campaign(s), as the 
    // contained ad groups, keywords, ads, and associations would also be deleted.

    $deleteLabelAssociationsResponse = CampaignManagementExampleHelper::DeleteLabelAssociations(
        EntityType::Campaign, 
        $campaignLabelAssociations);
    $deleteLabelAssociationsResponse = CampaignManagementExampleHelper::DeleteLabelAssociations(
        EntityType::AdGroup, 
        $adGroupLabelAssociations);
    $deleteLabelAssociationsResponse = CampaignManagementExampleHelper::DeleteLabelAssociations(
        EntityType::Keyword, 
        $keywordLabelAssociations);
    $deleteLabelAssociationsResponse = CampaignManagementExampleHelper::DeleteLabelAssociations(
        EntityType::Ad, 
        $adLabelAssociations);

    print("\nDelete all labels that we added above....\n");

    // Deleting the campaign(s) removes the corresponding label associations but does not remove the labels.

    $deleteLabelsResponse = CampaignManagementExampleHelper::DeleteLabels($labelIds);

    print("\nDelete the campaign, ad group, keyword, and ad that were added above....\n\n");

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

function CreateExampleLabelAssociationsByEntityId(
    $entityId, 
    $labelIds)
{
    $labelAssociations = array();
    foreach ($labelIds->long as $labelId)
    {
        $labelAssociation = new LabelAssociation();
        $labelAssociation->EntityId = $entityId;
        $labelAssociation->LabelId = $labelId;
        $labelAssociations[] = $labelAssociation;
    }
    return $labelAssociations;
}

function GetLabelAssociationsByLabelIdsHelper(
    $entityType,
    $labelIds)
{
    $labelAssociations = array();
    $labelIdsPageIndex = 0;

    while ($labelIdsPageIndex * $GLOBALS['MaxLabelIdsForGetLabelAssociations'] < count($labelIds->long))
    {
        $getLabelIds = array_slice(
            $labelIds->long, 
            $labelIdsPageIndex++ * $GLOBALS['MaxLabelIdsForGetLabelAssociations'], 
            $GLOBALS['MaxLabelIdsForGetLabelAssociations']);

        $labelAssociationsPageIndex = 0;
        $foundLastPage = false;

        while (!$foundLastPage)
        {
            $labelsPaging = new Paging();
            $labelsPaging->Index = $labelAssociationsPageIndex++;
            $labelsPaging->Size = $GLOBALS['MaxPagingSize'];

            $getLabelAssociationsByLabelIds = CampaignManagementExampleHelper::GetLabelAssociationsByLabelIds(
                $entityType,
                $getLabelIds,
                $labelsPaging
            );

            $labelAssociations = array_merge(
                $labelAssociations, 
                $getLabelAssociationsByLabelIds->LabelAssociations->LabelAssociation);
            $foundLastPage = $GLOBALS['MaxPagingSize'] > count($getLabelAssociationsByLabelIds->LabelAssociations->LabelAssociation);
        }
    }

    return $labelAssociations;
}

function GetLabelAssociationsByEntityIdsHelper(
    $entityType,
    $entityIds)
{
    $labelAssociations = array();
    $entityIdsPageIndex = 0;

    while ($entityIdsPageIndex * $GLOBALS['MaxEntityIdsForGetLabelAssociations'] < count($entityIds->long))
    {
        $getEntityIds = array_slice(
            $entityIds->long, 
            $entityIdsPageIndex++ * $GLOBALS['MaxEntityIdsForGetLabelAssociations'], 
            $GLOBALS['MaxEntityIdsForGetLabelAssociations']);
        
        $getLabelAssociationsByEntityIds = CampaignManagementExampleHelper::GetLabelAssociationsByEntityIds(
            $getEntityIds,
            $entityType
        );

        $labelAssociations = array_merge(
            $labelAssociations, 
            $getLabelAssociationsByEntityIds->LabelAssociations->LabelAssociation);
    }

    return $labelAssociations;
}
