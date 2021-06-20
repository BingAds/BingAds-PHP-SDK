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
use Microsoft\BingAds\V13\CampaignManagement\Campaign;
use Microsoft\BingAds\V13\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V13\CampaignManagement\BMCStore;
use Microsoft\BingAds\V13\CampaignManagement\ShoppingSetting;
use Microsoft\BingAds\V13\CampaignManagement\CampaignType;
use Microsoft\BingAds\V13\CampaignManagement\AdGroup;
use Microsoft\BingAds\V13\CampaignManagement\Date;
use Microsoft\BingAds\V13\CampaignManagement\ProductAd;
use Microsoft\BingAds\V13\CampaignManagement\CampaignCriterionType;
use Microsoft\BingAds\V13\CampaignManagement\ProductScope;
use Microsoft\BingAds\V13\CampaignManagement\BiddableCampaignCriterion;
use Microsoft\BingAds\V13\CampaignManagement\ProductCondition;
use Microsoft\BingAds\V13\CampaignManagement\ProductPartitionType;
use Microsoft\BingAds\V13\CampaignManagement\AdGroupCriterionType;
use Microsoft\BingAds\V13\CampaignManagement\BiddableAdGroupCriterion;
use Microsoft\BingAds\V13\CampaignManagement\ItemAction;
use Microsoft\BingAds\V13\CampaignManagement\AdGroupCriterionAction;
use Microsoft\BingAds\V13\CampaignManagement\NegativeAdGroupCriterion;
use Microsoft\BingAds\V13\CampaignManagement\ProductPartition;
use Microsoft\BingAds\V13\CampaignManagement\FixedBid;
use Microsoft\BingAds\V13\CampaignManagement\Bid;
use Microsoft\BingAds\V13\CampaignManagement\BatchErrorCollection;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V13\AuthHelper;
use Microsoft\BingAds\Samples\V13\CampaignManagementExampleHelper;

$PartitionActions = array(); // AdGroupCriterionAction array
$ReferenceId = -1;
$ids = null;

try
{
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

	// Get a list of all Bing Merchant Center stores associated with your CustomerId.

    $stores= CampaignManagementExampleHelper::GetBMCStoresByCustomerId(
		false
	)->BMCStores;
	
    if (!isset($stores->BMCStore))
    {
		printf(
			"CustomerId %d does not have any registered BMC stores.\r\n", 
			$GLOBALS['AuthorizationData']->CustomerId
		);
        return;
	}
	
    print("BMCStores:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBMCStore($stores);
	
	// Create a Shopping campaign with product conditions.
	
	$campaigns = array();   
	$campaign = new Campaign();
	$campaign->CampaignType = CampaignType::Shopping;
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->DailyBudget = 50.00;
	$campaign->Languages = array("All");
	$campaign->Name = "Women's Shoes " . $_SERVER['REQUEST_TIME'];
    $settings = array();
    $shoppingSetting = new ShoppingSetting();
    $shoppingSetting->Priority = 0;
    $shoppingSetting->SalesCountryCode = "US";
    $shoppingSetting->StoreId = $stores->BMCStore[0]->Id;	
    $encodedSetting = new SoapVar(
		$shoppingSetting, 
		SOAP_ENC_OBJECT, 
		'ShoppingSetting', 
		$GLOBALS['CampaignManagementProxy']->GetNamespace()
	);
    $settings[] = $encodedSetting;
	$campaign->Settings = $settings;
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
	
	// Optionally, you can create a ProductScope criterion that will be associated with your Bing Shopping campaign. 
    // You'll also be able to add more specific product conditions for each ad group.
	
    AddCampaignCriterion($campaignIds->long[0]);

    // Create the ad group that will have the product partitions.

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
		
    // Create a product ad. You must add at least one product ad to the ad group. 
	// The product ad identifier can be used for reporting analytics.
	// Use Merchant Promotions if you want tags to appear at the bottom of your product ad 
	// as "special offer" links, helping to increase customer engagement. For details
	// on Merchant Promotions see https://help.bingads.microsoft.com/#apex/3/en/56805/0.

    $ads = array();
    $ad = new ProductAd();
    $encodedAd = new SoapVar(
		$ad, 
		SOAP_ENC_OBJECT, 
		'ProductAd', 
		$GLOBALS['CampaignManagementProxy']->GetNamespace()
	);
	$ads[] = $encodedAd;
	
	print("-----\r\nAddAds:\r\n");
    $addAdsResponse = CampaignManagementExampleHelper::AddAds(
        $adGroupIds->long[0], 
        $ads
    );
    print("AdIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($addAdsResponse->AdIds);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($addAdsResponse->PartialErrors);
    
    // Add and update the ad group product groups. 
    
    AddAndUpdateAdGroupCriterion(
		$GLOBALS['AuthorizationData']->AccountId, 
		$PartitionActions, 
		$adGroupIds->long[0]);
	
    $applyPartitionActionsResponse = AddBranchAndLeafCriterion(
		$GLOBALS['AuthorizationData']->AccountId, 
		$PartitionActions, 
		$adGroupIds->long[0]);
	
    $rootId = $applyPartitionActionsResponse->AdGroupCriterionIds->long[1];
	$electronicsCriterionId = $applyPartitionActionsResponse->AdGroupCriterionIds->long[8];
	
    UpdateBranchAndLeafCriterion(
		$PartitionActions, 
		$GLOBALS['AuthorizationData']->AccountId, 
		$adGroupIds->long[0], 
		$rootId, 
		$electronicsCriterionId);
	 
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

// Add criterion to the campaign. The criterion is used to limit the campaign to a subset of
// your product catalog. For example, you can limit the catalog by brand, category, or product
// type. The campaign may be associated with only one ProductScope, and the ProductScope
// may contain a list of up to 7 ProductConditions. Each ad group may also specify
// more specific product conditions.
 
function AddCampaignCriterion($campaignId)
{
	$campaignCriterions = array();
  	
	$criterion = new BiddableCampaignCriterion();
    $criterion->CampaignId = $campaignId;

	// CriterionBid is not applicable for ProductScope
	$criterion->CriterionBid = null;  
	
	$productConditions = array();
	
	$condition = new ProductCondition();
	$condition->Operand = "Condition";
	$condition->Attribute = "New";
	$productConditions[] = $condition;
	
	$condition = new ProductCondition();
	$condition->Operand = "Brand";
	$condition->Attribute = "Contoso";
	$productConditions[] = $condition;

	$scope = new ProductScope();
	$scope->Conditions = $productConditions;

	$encodedScope = new SoapVar(
		$scope, 
		SOAP_ENC_OBJECT, 
		'ProductScope', 
		$GLOBALS['CampaignManagementProxy']->GetNamespace()
	);
	
	$criterion->Criterion = $encodedScope;

	$encodedCriterion = new SoapVar(
		$criterion, 
		SOAP_ENC_OBJECT, 
		'BiddableCampaignCriterion', 
		$GLOBALS['CampaignManagementProxy']->GetNamespace()
	);

	$campaignCriterions[] = $encodedCriterion;

	$addCampaignCriterionsResponse = CampaignManagementExampleHelper::AddCampaignCriterions(
		$campaignCriterions,
		CampaignCriterionType::ProductScope);

	CampaignManagementExampleHelper::OutputArrayOfLong($addCampaignCriterionsResponse->CampaignCriterionIds);
    if(isset($addCampaignCriterionsResponse->NestedPartialErrors)){
        CampaignManagementExampleHelper::OutputArrayOfBatchErrorCollection($addCampaignCriterionsResponse->NestedPartialErrors);
    }
}


// Add a criterion to the ad group and then update it.
 
function AddAndUpdateAdGroupCriterion($accountId, &$actions, $adGroupId)
{
	// Add a biddable criterion as the root.

	$condition = new ProductCondition();
	$condition->Operand = "All";
	$condition->Attribute = null;
	
	$root = AddPartition(
		$adGroupId,
		null,
		$condition,
		ProductPartitionType::Unit,
		GetFixedBid(0.35),
		false,
		$actions);

	printf("Applying a biddable criterion as the root...\r\n");
	$applyPartitionActionsResponse = CampaignManagementExampleHelper::ApplyProductPartitionActions(
		$actions
	);
	CampaignManagementExampleHelper::OutputArrayOfLong($applyPartitionActionsResponse->AdGroupCriterionIds);
    CampaignManagementExampleHelper::OutputArrayOfBatchError($applyPartitionActionsResponse->PartialErrors);

	$adGroupCriterions = CampaignManagementExampleHelper::GetAdGroupCriterionsByIds(
		null,
		$adGroupId,
		AdGroupCriterionType::ProductPartition,
		null
	)->AdGroupCriterions;
	 
	printf("Outputing the ad group's product partition; contains only the tree root node\r\n");
	OutputProductPartitions($adGroupCriterions);
	 
	// Update the bid of the root node that we just added.
	 
	$updatedRoot = new BiddableAdGroupCriterion();
	$updatedRoot->Id = $applyPartitionActionsResponse->AdGroupCriterionIds->long[0];
	$updatedRoot->AdGroupId = $adGroupId;
	$updatedRoot->CriterionBid = GetFixedBid(0.40);

	$encodedUpdateRoot = new SoapVar(
		$updatedRoot, 
		SOAP_ENC_OBJECT, 
		'BiddableAdGroupCriterion', 
		$GLOBALS['CampaignManagementProxy']->GetNamespace()
	);
	
	$actions = array();  // clear
	 
	AddPartitionAction($encodedUpdateRoot, ItemAction::Update, $actions);
	 
	printf("Updating the bid for the tree root node...\r\n");
	
	$applyPartitionActionsResponse = CampaignManagementExampleHelper::ApplyProductPartitionActions(
		$actions
	);
	 
	$adGroupCriterions = CampaignManagementExampleHelper::GetAdGroupCriterionsByIds(
		null,
		$adGroupId,
		AdGroupCriterionType::ProductPartition,
		null
	)->AdGroupCriterions;
	 
	printf("Updated the bid for the tree root node\r\n");
	OutputProductPartitions($adGroupCriterions);
}

// Add a criterion to the ad group and then update it.
 
function AddBranchAndLeafCriterion($accountId, &$actions, $adGroupId)
{
	$actions = array();  // clear
	 
	$adGroupCriterions = CampaignManagementExampleHelper::GetAdGroupCriterionsByIds(
		null,
		$adGroupId,
		AdGroupCriterionType::ProductPartition,
		null
	)->AdGroupCriterions;
	 
	$existingRoot = GetRootNode($adGroupCriterions);

	if (isset($existingRoot))
	{
		$nodeToDelete = new BiddableAdGroupCriterion();
		$nodeToDelete->Id = $existingRoot->Id;
		$nodeToDelete->AdGroupId = $existingRoot->AdGroupId;
		
		$encodedNodeToDelete = new SoapVar(
			$nodeToDelete, 
			SOAP_ENC_OBJECT, 
			'BiddableAdGroupCriterion', 
			$GLOBALS['CampaignManagementProxy']->GetNamespace()
		);
		
		AddPartitionAction($encodedNodeToDelete, ItemAction::Delete, $actions);
	}

	$condition = new ProductCondition();
	$condition->Operand = "All";
	$condition->Attribute = null;
	
	$root = AddPartition(
		$adGroupId,
		null,
		$condition,
		ProductPartitionType::Subdivision,
		null,
		false,
		$actions);

	$condition = new ProductCondition();
	$condition->Operand = "CategoryL1";
	$condition->Attribute = "Animals & Pet Supplies";
	 
	$animalsSubdivision = AddPartition(
		$adGroupId,
		$root,
		$condition,
		ProductPartitionType::Subdivision,
		null,
		false,
		$actions);

	$condition = new ProductCondition();
	$condition->Operand = "CategoryL2";
	$condition->Attribute = "Pet Supplies";
	
	$petSuppliesSubdivision = AddPartition(
		$adGroupId,
		$animalsSubdivision,
		$condition,
		ProductPartitionType::Subdivision,
		null,
		false,
		$actions);

	$condition = new ProductCondition();
	$condition->Operand = "Brand";
	$condition->Attribute = "Brand A";
	
	$brandA = AddPartition(
		$adGroupId,
		$petSuppliesSubdivision,
		$condition,
		ProductPartitionType::Unit,
		GetFixedBid(0.35),
		false,
		$actions);

	$condition = new ProductCondition();
	$condition->Operand = "Brand";
	$condition->Attribute = "Brand B";
	
	$brandB = AddPartition(
		$adGroupId,
		$petSuppliesSubdivision,
		$condition,
		ProductPartitionType::Unit,
		null,
		true,
		$actions);

	$condition = new ProductCondition();
	$condition->Operand = "Brand";
	$condition->Attribute = null;
	
	$otherBrands = AddPartition(
		$adGroupId,
		$petSuppliesSubdivision,
		$condition,
		ProductPartitionType::Unit,
		GetFixedBid(0.35),
		false,
		$actions);

	$condition = new ProductCondition();
	$condition->Operand = "CategoryL2";
	$condition->Attribute = null;
	
	$otherPetSupplies = AddPartition(
		$adGroupId,
		$animalsSubdivision,
		$condition,
		ProductPartitionType::Unit,
		GetFixedBid(0.35),
		false,
		$actions);

	$condition = new ProductCondition();
	$condition->Operand = "CategoryL1";
	$condition->Attribute = "Electronics";
	
	$electronics = AddPartition(
		$adGroupId,
		$root,
		$condition,
		ProductPartitionType::Unit,
		GetFixedBid(0.35),
		false,
		$actions);

	$condition = new ProductCondition();
	$condition->Operand = "CategoryL1";
	$condition->Attribute = null;
	
	$otherCategoryL1 = AddPartition(
		$adGroupId,
		$root,
		$condition,
		ProductPartitionType::Unit,
		GetFixedBid(0.35),
		false,
		$actions);
	
	printf("Applying product partitions to the ad group...\r\n");
	$applyPartitionActionsResponse = CampaignManagementExampleHelper::ApplyProductPartitionActions(
		$actions
	);

	$adGroupCriterions = CampaignManagementExampleHelper::GetAdGroupCriterionsByIds(
		null,
		$adGroupId,
		AdGroupCriterionType::ProductPartition,
		null
	)->AdGroupCriterions;

	printf("The product partition group tree now has 9 nodes\r\n");
	OutputProductPartitions($adGroupCriterions);

	return $applyPartitionActionsResponse;
}


// Deletes and updates branch and leaf criterion.
 
function UpdateBranchAndLeafCriterion(&$actions, $accountId, $adGroupId, $rootId, $electronicsCriterionId)
{
	$actions = array(); // clear;

	$electronics = new BiddableAdGroupCriterion();
	$electronics->Id = $electronicsCriterionId;
	$electronics->AdGroupId = $adGroupId;
	$encodedNodeToDelete = new SoapVar(
		$electronics, 
		SOAP_ENC_OBJECT, 
		'BiddableAdGroupCriterion', 
		$GLOBALS['CampaignManagementProxy']->GetNamespace()
	);
	
	AddPartitionAction($encodedNodeToDelete, ItemAction::Delete, $actions);
	 
	$parent = new BiddableAdGroupCriterion();
	$parent->Id = $rootId;
	$encodedParent = new SoapVar(
		$parent, 
		SOAP_ENC_OBJECT, 
		'BiddableAdGroupCriterion', 
		$GLOBALS['CampaignManagementProxy']->GetNamespace()
	);
	
	$condition = new ProductCondition();
	$condition->Operand = "CategoryL1";
	$condition->Attribute = "Electronics";
	
	$electronicsSubdivision = AddPartition(
		$adGroupId,
		$encodedParent,
		$condition,
		ProductPartitionType::Subdivision,
		null,
		false,
		$actions);
	 
	$condition = new ProductCondition();
	$condition->Operand = "Brand";
	$condition->Attribute = "Brand C";
	
	$brandC = AddPartition(
		$adGroupId,
		$electronicsSubdivision,
		$condition,
		ProductPartitionType::Unit,
		GetFixedBid(0.35),
		false,
		$actions);
	 
	$condition = new ProductCondition();
	$condition->Operand = "Brand";
	$condition->Attribute = "Brand D";
	
	$brandD = AddPartition(
		$adGroupId,
		$electronicsSubdivision,
		$condition,
		ProductPartitionType::Unit,
		GetFixedBid(0.35),
		false,
		$actions);

	$condition = new ProductCondition();
	$condition->Operand = "Brand";
	$condition->Attribute = null;
	
	$otherElectronicBrands = AddPartition(
		$adGroupId,
		$electronicsSubdivision,
		$condition,
		ProductPartitionType::Unit,
		GetFixedBid(0.35),
		false,
		$actions);

	printf("\nUpdating the electronics partition...\n");
	$applyPartitionActionsResponse = CampaignManagementExampleHelper::ApplyProductPartitionActions(
		$actions
	);
	 
	$adGroupCriterions = CampaignManagementExampleHelper::GetAdGroupCriterionsByIds(
		null,
		$adGroupId,
		AdGroupCriterionType::ProductPartition,
		null
	)->AdGroupCriterions;
	 
	printf("\nThe product partition group tree now has 12 nodes\n");
	OutputProductPartitions($adGroupCriterions);
}


// Get the root criterion node.
 
function GetRootNode($adGroupCriterions)
{
	$rootNode = null;

	foreach ($adGroupCriterions->AdGroupCriterion as $adGroupCriterion)
	{
		if (empty($adGroupCriterion->Criterion->ParentCriterionId))
		{
			$rootNode = $adGroupCriterion;
			break;
		}
	}

	return $rootNode;
}

// Gets a fixed bid object with the specified bid amount.
 
function GetFixedBid($bidAmount)
{
	$fixedBid = new FixedBid();
	$fixedBid->Amount = $bidAmount;

	$encodedFixedBid = new SoapVar(
		$fixedBid, 
		SOAP_ENC_OBJECT, 
		'FixedBid', 
		$GLOBALS['CampaignManagementProxy']->GetNamespace()
	);
	
	return $encodedFixedBid;
}

// Adds a criterion action to the list of actions.
 
function AddPartitionAction($criterion, $itemAction, &$actions)
{
	$partitionAction = new AdGroupCriterionAction();
	$partitionAction->Action = $itemAction; 
	$partitionAction->AdGroupCriterion = $criterion;

	$actions[] = $partitionAction;
}

// Adds either a negative or biddable partition criterion.
 
function AddPartition(
		$adGroupId,
		$parent,  		// AdGroupCriterion 
		$condition,  	// ProductCondition 
		$partitionType, // ProductPartitionType 
		$bid, 			// FixedBid 
		$isNegative,
		&$actions)
{
	global $ReferenceId;
	
	$adGroupCriterion = null;

	if ($isNegative)
	{
		$adGroupCriterion = new NegativeAdGroupCriterion();
	}
	else
	{
		$adGroupCriterion = new BiddableAdGroupCriterion();
		$adGroupCriterion->CriterionBid = $bid;
	}

	$adGroupCriterion->AdGroupId = $adGroupId;
	
	// Parent is encoded, so dereference enc_value.
	
	$criterion = new ProductPartition();
	$criterion->Condition = $condition;
	$criterion->ParentCriterionId = (($parent != null) ? $parent->enc_value->Id : null);

	if ($partitionType === ProductPartitionType::Subdivision)
	{
		$criterion->PartitionType = ProductPartitionType::Subdivision;  // Branch
		$adGroupCriterion->Id = $ReferenceId--;
	}
	else
	{
		$criterion->PartitionType = ProductPartitionType::Unit;  // Leaf
	}

	$encodedCriterion = new SoapVar(
		$criterion, 
		SOAP_ENC_OBJECT, 
		'ProductPartition', 
		$GLOBALS['CampaignManagementProxy']->GetNamespace()
	);
	
	$adGroupCriterion->Criterion = $encodedCriterion;
	
	if ($isNegative)
	{
		$encodedAdGroupCriterion = new SoapVar(
			$adGroupCriterion, 
			SOAP_ENC_OBJECT, 
			'NegativeAdGroupCriterion', 
			$GLOBALS['CampaignManagementProxy']->GetNamespace()
		);
	}
	else
	{
		$encodedAdGroupCriterion = new SoapVar(
			$adGroupCriterion, 
			SOAP_ENC_OBJECT, 
			'BiddableAdGroupCriterion', 
			$GLOBALS['CampaignManagementProxy']->GetNamespace()
		);
	}	
	
	AddPartitionAction($encodedAdGroupCriterion, ItemAction::Add, $actions);

	return $encodedAdGroupCriterion;
}

// Generates the ad group's partition tree that we then print.
 
function OutputProductPartitions($adGroupCriterions)
{
	$childBranches = array(); // Hash map (Long, List(AdGroupCriterion));
	$treeRoot = null;

	foreach ($adGroupCriterions->AdGroupCriterion as $adGroupCriterion)
	{
		$partition = $adGroupCriterion->Criterion;
		$childBranches[$adGroupCriterion->Id] = array();

		if (!empty($partition->ParentCriterionId))
		{
			$childBranches[$partition->ParentCriterionId][] = $adGroupCriterion;
		}
		else
		{
			$treeRoot = $adGroupCriterion;
		}
	}

	OutputProductPartitionTree($treeRoot, $childBranches, 0);
}


// Output the partition tree.
 
function OutputProductPartitionTree(
		$node,
		$childBranches,  // hash map (Long, List(AdGroupCriterion)) 
		$treeLevel)
{
	$criterion = $node->Criterion;  // ProductPartition 

	printf("%" . (($treeLevel > 0) ? $treeLevel * 4 : "") . "s%s\n",
			"",
			$criterion->PartitionType);

	printf("%" . (($treeLevel > 0) ? $treeLevel * 4 : "") . "s%s%s\n",
			"",
			"ParentCriterionId: ",
			$criterion->ParentCriterionId);

	printf("%" . (($treeLevel > 0) ? $treeLevel * 4 : "") . "s%s%s\n",
			"",
			"Id: ",
			$node->Id);

	if ($criterion->PartitionType === ProductPartitionType::Unit)
	{
		if ($node->Type === "BiddableAdGroupCriterion") //instanceof BiddableAdGroupCriterion)
		{
			printf("%" . (($treeLevel > 0) ? $treeLevel * 4 : "") . "s%s%.2f\n",
					"",
					"Bid amount: ",
					$node->CriterionBid->Amount);  // ((FixedBid)((BiddableAdGroupCriterion)

		}
		else
		{
			if ($node->Type === "NegativeAdGroupCriterion")  // node instanceof NegativeAdGroupCriterion
			{
				printf("%" . $treeLevel * 4 . "s%s\n",
						"",
						"Not bidding on this condition");
			}
		}
	}

	$nullAttribute = (!empty($criterion->ParentCriterionId)) ? "(All Others)" : "(Tree Root)";

	printf("%" . (($treeLevel > 0) ? $treeLevel * 4 : "") . "s%s%s\n",
			"",
			"Attribute: ",
			(empty($criterion->Condition->Attribute)) ?
			$nullAttribute : $criterion->Condition->Attribute);

	printf("%" . (($treeLevel > 0) ? $treeLevel * 4 : "") . "s%s%s\r\n",
			"",
			"Condition: ",
			$criterion->Condition->Operand);

	foreach ($childBranches[$node->Id] as $childNode)  // AdGroupCriterion 
	{
		OutputProductPartitionTree($childNode, $childBranches, $treeLevel + 1);
	}
}
