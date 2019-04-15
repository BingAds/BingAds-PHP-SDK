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

//Specify the Microsoft\BingAds\V13\CampaignManagement classes that will be used.
use Microsoft\BingAds\V13\CampaignManagement\Campaign;
use Microsoft\BingAds\V13\CampaignManagement\CampaignType;
use Microsoft\BingAds\V13\CampaignManagement\Label;
use Microsoft\BingAds\V13\CampaignManagement\LabelAssociation;
use Microsoft\BingAds\V13\CampaignManagement\Paging;
use Microsoft\BingAds\V13\CampaignManagement\EntityType;
use Microsoft\BingAds\V13\CampaignManagement\AdGroup;
use Microsoft\BingAds\V13\CampaignManagement\Keyword;
use Microsoft\BingAds\V13\CampaignManagement\ExpandedTextAd;
use Microsoft\BingAds\V13\CampaignManagement\Bid;
use Microsoft\BingAds\V13\CampaignManagement\MatchType;
use Microsoft\BingAds\V13\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V13\CampaignManagement\Date;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V13\AuthHelper;
use Microsoft\BingAds\Samples\V13\CampaignManagementExampleHelper;

$GLOBALS['MaxGetLabelsByIds'] = 1000;
$GLOBALS['MaxLabelIdsForGetLabelAssociations'] = 1;
$GLOBALS['MaxEntityIdsForGetLabelAssociations'] = 100;
$GLOBALS['MaxPagingSize'] = 1000;
    
try
{
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    // Add an ad group in a campaign. Later we will create labels for them. 
    // Although not included in this example you can also create labels for ads and keywords. 
    
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

    $adGroups = array();
    $adGroup = new AdGroup();
    $adGroup->CpcBid = new Bid();
    $adGroup->CpcBid->Amount = 0.09;
    date_default_timezone_set('UTC');
    $endDate = new Date();
    $endDate->Day = 31;
    $endDate->Month = 12;
    $endDate->Year = date("Y");
    $adGroup->EndDate = $endDate;
    $adGroup->Name = "Women's Red Shoe Sale";    
    $adGroup->StartDate = null;    
    $adGroups[] = $adGroup;
 
    print("-----\r\nAddAdGroups:\r\n");
    $addAdGroupsResponse = CampaignManagementExampleHelper::AddAdGroups(
        $campaignIds->long[0], 
        $adGroups,
        null
    );
    $adGroupIds = $addAdGroupsResponse->AdGroupIds;
    print("AdGroupIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($adGroupIds);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($addAdGroupsResponse->PartialErrors);

    // Add labels and associate them with the campaign and ad group.

    $labels = array();

    for ($labelIndex = 0; $labelIndex < 5; $labelIndex++)
    {
        $color = "#".substr("000000".dechex(rand()),-6); 
        $label = new Label();
        $label->ColorCode = $color;
        $label->Description = "Label Description";
        $label->Name = "Label Name " . $color . " " . $_SERVER['REQUEST_TIME'];
        $labels[] = $label;
    }
    
    print("-----\r\nAddLabels:\r\n");
    $addLabelsResponse = CampaignManagementExampleHelper::AddLabels(
        $labels
    );
    $labelIds = $addLabelsResponse->LabelIds;
    $labelErrors = $addLabelsResponse->PartialErrors;
    print("LabelIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($labelIds);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($labelErrors);

    $labelsPaging = new Paging();
    $labelsPaging->Index = 0;
    $labelsPaging->Size = $GLOBALS['MaxGetLabelsByIds'];

    print("-----\r\nGetLabelsByIds:\r\n");
    $getLabelsByIdsResponse = CampaignManagementExampleHelper::GetLabelsByIds(
        $labelIds,
        $labelsPaging
    );
    print("Labels:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLabel($getLabelsByIdsResponse->Labels);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($getLabelsByIdsResponse->PartialErrors);

    $campaignLabelAssociations = CreateExampleLabelAssociationsByEntityId($campaignIds->long[0], $labelIds);
    print("-----\nAssociating all of the labels with a campaign...\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLabelAssociation($campaignLabelAssociations);
    $setLabelAssociationsResponse = CampaignManagementExampleHelper::SetLabelAssociations(
        EntityType::Campaign, 
        $campaignLabelAssociations
    );

    $adGroupLabelAssociations = CreateExampleLabelAssociationsByEntityId($adGroupIds->long[0], $labelIds);
    print("-----\nAssociating all of the labels with an ad group...\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLabelAssociation($adGroupLabelAssociations);
    $setLabelAssociationsResponse = CampaignManagementExampleHelper::SetLabelAssociations(
        EntityType::AdGroup, 
        $adGroupLabelAssociations
    );

    print("-----\nUse paging to get all campaign label associations...\r\n");
    $getLabelAssociationsByLabelIds = GetLabelAssociationsByLabelIdsHelper(
        EntityType::Campaign,
        $labelIds
    );

    print("-----\nUse paging to get all ad group label associations...\r\n");
    $getLabelAssociationsByLabelIds = GetLabelAssociationsByLabelIdsHelper(
        EntityType::AdGroup,
        $labelIds
    );

    print("-----\nGet all label associations for all specified campaigns...\r\n");
    $getLabelAssociationsByEntityIds = GetLabelAssociationsByEntityIdsHelper(
        EntityType::Campaign,
        $campaignIds
    );

    print("-----\nGet all label associations for all specified ad groups...\r\n");
    $getLabelAssociationsByEntityIds = GetLabelAssociationsByEntityIdsHelper(
        EntityType::AdGroup,
        $adGroupIds
    );

    print("-----\nDelete all label associations that we set above....\r\n");

    // Deleting the associations is not necessary if you are deleting the corresponding campaign(s), as the 
    // contained ad groups, ads, and associations would also be deleted.

    $deleteLabelAssociationsResponse = CampaignManagementExampleHelper::DeleteLabelAssociations(
        EntityType::Campaign, 
        $campaignLabelAssociations
    );
    $deleteLabelAssociationsResponse = CampaignManagementExampleHelper::DeleteLabelAssociations(
        EntityType::AdGroup, 
        $adGroupLabelAssociations
    );

    // Delete the account's labels. 

    print("-----\r\nDeleteLabels:\r\n");
    $deleteLabelsResponse = CampaignManagementExampleHelper::DeleteLabels(
        $labelIds
    );

    foreach ($labelIds->long as $id)
    {
        printf("Deleted Label Id %s\r\n", $id);
    }

    // Delete the campaign and everything it contains e.g., ad groups and ads.

    print("-----\r\nDeleteCampaigns:\r\n");
    CampaignManagementExampleHelper::DeleteCampaigns(
        $GLOBALS['AuthorizationData']->AccountId, 
        array($campaignIds->long[0])
    );
    printf("Deleted CampaignId %s\r\n", $campaignIds->long[0]);
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
            $GLOBALS['MaxLabelIdsForGetLabelAssociations']
        );

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
            
            CampaignManagementExampleHelper::OutputArrayOfLabelAssociation($getLabelAssociationsByLabelIds->LabelAssociations);

            $labelAssociations = array_merge(
                $labelAssociations, 
                $getLabelAssociationsByLabelIds->LabelAssociations->LabelAssociation
            );

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
            $GLOBALS['MaxEntityIdsForGetLabelAssociations']
        );
        
        $getLabelAssociationsByEntityIds = CampaignManagementExampleHelper::GetLabelAssociationsByEntityIds(
            $getEntityIds,
            $entityType
        );

        CampaignManagementExampleHelper::OutputArrayOfLabelAssociation($getLabelAssociationsByEntityIds->LabelAssociations);        
        
        $labelAssociations = array_merge(
            $labelAssociations, 
            $getLabelAssociationsByEntityIds->LabelAssociations->LabelAssociation
        );
    }

    return $labelAssociations;
}
