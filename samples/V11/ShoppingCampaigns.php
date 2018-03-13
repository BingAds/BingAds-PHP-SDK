<?php

namespace Microsoft\BingAds\Samples\V11;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/../AuthHelper.php";
include "/CampaignManagementHelper.php";
include "/CustomerManagementHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V11\CampaignManagement classes that will be used.
use Microsoft\BingAds\V11\CampaignManagement\Campaign;
use Microsoft\BingAds\V11\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V11\CampaignManagement\BMCStore;
use Microsoft\BingAds\V11\CampaignManagement\ShoppingSetting;
use Microsoft\BingAds\V11\CampaignManagement\CampaignType;
use Microsoft\BingAds\V11\CampaignManagement\AdGroup;
use Microsoft\BingAds\V11\CampaignManagement\Date;
use Microsoft\BingAds\V11\CampaignManagement\AdDistribution;
use Microsoft\BingAds\V11\CampaignManagement\ProductAd;
use Microsoft\BingAds\V11\CampaignManagement\CampaignCriterionType;
use Microsoft\BingAds\V11\CampaignManagement\ProductScope;
use Microsoft\BingAds\V11\CampaignManagement\BiddableCampaignCriterion;
use Microsoft\BingAds\V11\CampaignManagement\ProductCondition;
use Microsoft\BingAds\V11\CampaignManagement\ProductPartitionType;
use Microsoft\BingAds\V11\CampaignManagement\AdGroupCriterionType;
use Microsoft\BingAds\V11\CampaignManagement\BiddableAdGroupCriterion;
use Microsoft\BingAds\V11\CampaignManagement\ItemAction;
use Microsoft\BingAds\V11\CampaignManagement\AdGroupCriterionAction;
use Microsoft\BingAds\V11\CampaignManagement\NegativeAdGroupCriterion;
use Microsoft\BingAds\V11\CampaignManagement\ProductPartition;
use Microsoft\BingAds\V11\CampaignManagement\FixedBid;
use Microsoft\BingAds\V11\CampaignManagement\Bid;
use Microsoft\BingAds\V11\CampaignManagement\BatchErrorCollection;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\AuthHelper;
use Microsoft\BingAds\Samples\V11\CampaignManagementHelper;
use Microsoft\BingAds\Samples\V11\CustomerManagementHelper;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CustomerProxy'] = null; 
$GLOBALS['CampaignProxy'] = null; 

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");


$PartitionActions = array(); // AdGroupCriterionAction array
$ReferenceId = -1;
$ids = null;

try
{
    // You should authenticate for Bing Ads services with a Microsoft Account, 
    // instead of providing the Bing Ads username and password set. 
    
    AuthHelper::AuthenticateWithOAuth();

    // Bing Ads API Version 11 is the last version to support UserName and Password authentication,
    // so this function is deprecated.
    //AuthHelper::AuthenticateWithUserName();

    $GLOBALS['CustomerProxy'] = new ServiceClient(ServiceClientType::CustomerManagementVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // Set the GetUser request parameter to an empty user identifier to get the current 
    // authenticated Bing Ads user, and then search for all accounts the user may access.

    $user = CustomerManagementHelper::GetUser(null)->User;

    // For this example we'll use the first account.

    $accounts = CustomerManagementHelper::SearchAccountsByUserId($user->Id)->Accounts;
    $GLOBALS['AuthorizationData']->AccountId = $accounts->Account[0]->Id;
    $GLOBALS['AuthorizationData']->CustomerId = $accounts->Account[0]->ParentCustomerId;

    $GLOBALS['CampaignProxy'] = new ServiceClient(ServiceClientType::CampaignManagementVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    $stores= CampaignManagementHelper::GetBMCStoresByCustomerId($GLOBALS['CampaignProxy'])->BMCStores->BMCStore;
	
    if (!isset($stores))
    {
        printf("Customer %d does not have any registered BMC stores.\n\n", $CustomerId);
        return;
    }
	
    // Create a Bing Shopping campaign using the ID of the first store in the list.
    $settings = array();

    $shoppingSetting = new ShoppingSetting();
    $shoppingSetting->Priority = 0;
    $shoppingSetting->SalesCountryCode = "US";
    $shoppingSetting->StoreId = $stores[0]->Id;
	
    $encodedSetting = new SoapVar($shoppingSetting, SOAP_ENC_OBJECT, 'ShoppingSetting', $GLOBALS['CampaignProxy']->GetNamespace());
    $settings[] = $encodedSetting;

    $campaigns = array();
    $campaign = new Campaign();
    $campaign->Name = "Bing Shopping Campaign " . $_SERVER['REQUEST_TIME'];
    $campaign->Description = "Bing Shopping Campaign Example.";
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->DailyBudget = 50.00;
    $campaign->Settings = $settings;
    $campaign->CampaignType = CampaignType::Shopping;
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";
    $campaigns[] = $campaign;

    // Create the ad group that will have the product partitions.

    $adGroups = array();

    date_default_timezone_set('UTC');
    $endDate = new Date();
    $endDate->Day = 31;
    $endDate->Month = 12;
    $endDate->Year = date("Y");

    $adGroup = new AdGroup();
    $adGroup->Name = "Product Categories";
    $adGroup->AdDistribution = AdDistribution::Search;
    $adGroup->StartDate = null;
    $adGroup->EndDate = $endDate;
    $adGroup->SearchBid = new Bid();
    $adGroup->SearchBid->Amount = 0.07;
    $adGroup->Language = "English";
    
    $adGroups[] = $adGroup;
		
    // Create a product ad. You must add at least one ProductAd to the corresponding ad group. 
    // A ProductAd is not used directly for delivered ad copy. Instead, the delivery engine generates 
    // product ads from the product details that it finds in your Bing Merchant Center store's product catalog. 
    // The primary purpose of the ProductAd object is to provide promotional text that the delivery engine 
    // adds to the product ads that it generates. For example, if the promotional text is set to 
    // Free shipping on $99 purchases, the delivery engine will set the product ads description to 
    // Free shipping on $99 purchases. 

    $ads = array();
    $ad = new ProductAd();
    $ad->PromotionalText = "Free shipping on $99 purchases.";
    $encodedAd = new SoapVar($ad, SOAP_ENC_OBJECT, 'ProductAd', $GLOBALS['CampaignProxy']->GetNamespace());
    $ads[] = $encodedAd;
    
	print "AddCampaigns\n";
    $addCampaignsResponse = CampaignManagementHelper::AddCampaigns($GLOBALS['AuthorizationData']->AccountId, $campaigns);
    $nillableCampaignIds = $addCampaignsResponse->CampaignIds->long;
    CampaignManagementHelper::OutputIds($nillableCampaignIds);
    if(isset($addCampaignsResponse->PartialErrors->BatchError)){
        CampaignManagementHelper::OutputPartialErrors($addCampaignsResponse->PartialErrors->BatchError);
    }

    print "AddAdGroups\n";
    $addAdGroupsResponse = CampaignManagementHelper::AddAdGroups($nillableCampaignIds[0], $adGroups);
    $nillableAdGroupIds = $addAdGroupsResponse->AdGroupIds->long;
    CampaignManagementHelper::OutputIds($nillableAdGroupIds);
    if(isset($addAdGroupsResponse->PartialErrors->BatchError)){
        CampaignManagementHelper::OutputPartialErrors($addAdGroupsResponse->PartialErrors->BatchError);
    }

	print "AddAds\n";
    $addAdsResponse = CampaignManagementHelper::AddAds($nillableAdGroupIds[0], $ads);
    $nillableAdIds = $addAdsResponse->AdIds->long;
    CampaignManagementHelper::OutputIds($nillableAdIds);
    if(isset($addAdsResponse->PartialErrors->BatchError)){
        CampaignManagementHelper::OutputPartialErrors($addAdsResponse->PartialErrors->BatchError);
    }

    // Add criterion to the campaign. The criterion is used to limit the campaign to a subset of
    // your product catalog.
	
    AddCampaignCriterion($nillableCampaignIds[0]);
    
    AddAndUpdateAdGroupCriterion($GLOBALS['AuthorizationData']->AccountId, $PartitionActions, $nillableAdGroupIds[0]);
    $applyPartitionActionsResponse = AddBranchAndLeafCriterion($GLOBALS['AuthorizationData']->AccountId, $PartitionActions, $nillableAdGroupIds[0]);
	
    $rootId = $applyPartitionActionsResponse->AdGroupCriterionIds->long[1];
    $electronicsCriterionId = $applyPartitionActionsResponse->AdGroupCriterionIds->long[8];
    UpdateBranchAndLeafCriterion($PartitionActions, $GLOBALS['AuthorizationData']->AccountId, $nillableAdGroupIds[0], $rootId, $electronicsCriterionId);
	 
    // Delete the campaign, ad group, product partitions, and ad that were previously added. 
    // You should remove this line if you want to view the added entities in the 
    // Bing Ads web application or another tool.

    CampaignManagementHelper::DeleteCampaigns($GLOBALS['AuthorizationData']->AccountId, array($nillableCampaignIds[0]));
    printf("Deleted CampaignId %d\n\n", $nillableCampaignIds[0]);
	
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
				printf("BatchError at Index: %d\n", $error->Index);
				printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

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
				printf("EditorialError at Index: %d\n", $error->Index);
				printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);
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
				printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

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

function DeleteCampaigns($accountId, $nillableCampaignIds)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 
  
    $request = new DeleteCampaignsRequest();
    $request->AccountId = $accountId;
    $request->CampaignIds = $nillableCampaignIds;
    
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

// Adds one or more ads to the specified ad group.

function AddAds($adGroupId, $ads)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 
  
    $request = new AddAdsRequest();
    $request->AdGroupId = $adGroupId;
    $request->Ads = $ads;
    
    return $GLOBALS['CampaignProxy']->GetService()->AddAds($request);
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

	$encodedScope = new SoapVar($scope, SOAP_ENC_OBJECT, 'ProductScope', $GLOBALS['CampaignProxy']->GetNamespace());
	$criterion->Criterion = $encodedScope;

	$encodedCriterion = new SoapVar($criterion, SOAP_ENC_OBJECT, 'BiddableCampaignCriterion', $GLOBALS['CampaignProxy']->GetNamespace());
	$campaignCriterions[] = $encodedCriterion;

	$addCampaignCriterionsResponse = CampaignManagementHelper::AddCampaignCriterions(
		$campaignCriterions,
		CampaignCriterionType::ProductScope);

	CampaignManagementHelper::OutputIds($addCampaignCriterionsResponse->CampaignCriterionIds->long);
    if(isset($addCampaignCriterionsResponse->NestedPartialErrors) && isset($addCampaignCriterionsResponse->NestedPartialErrors->BatchErrorCollection)){
        CampaignManagementHelper::OutputNestedPartialErrors($addCampaignCriterionsResponse->NestedPartialErrors->BatchErrorCollection);
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

	printf("Applying a biddable criterion as the root...\n\n");
	$applyPartitionActionsResponse = CampaignManagementHelper::ApplyProductPartitionActions($actions);
	CampaignManagementHelper::OutputIds($applyPartitionActionsResponse->AdGroupCriterionIds->long);
    if(isset($applyPartitionActionsResponse->PartialErrors->BatchError)){
        CampaignManagementHelper::OutputPartialErrors($applyPartitionActionsResponse->PartialErrors->BatchError);
    }

	$adGroupCriterions = CampaignManagementHelper::GetAdGroupCriterionsByIds(
			$adGroupId,
            null,
			AdGroupCriterionType::ProductPartition)->AdGroupCriterions;
	 
	printf("Outputing the ad group's product partition; contains only the tree root node\n\n");
	OutputProductPartitions($adGroupCriterions);
	 
	// Update the bid of the root node that we just added.
	 
	$updatedRoot = new BiddableAdGroupCriterion();
	$updatedRoot->Id = $applyPartitionActionsResponse->AdGroupCriterionIds->long[0];
	$updatedRoot->AdGroupId = $adGroupId;
	$updatedRoot->CriterionBid = GetFixedBid(0.40);

	$encodedUpdateRoot = new SoapVar($updatedRoot, SOAP_ENC_OBJECT, 'BiddableAdGroupCriterion', $GLOBALS['CampaignProxy']->GetNamespace());
	
	$actions = array();  // clear
	 
	AddPartitionAction($encodedUpdateRoot, ItemAction::Update, $actions);
	 
	printf("Updating the bid for the tree root node...\n\n");
	
	$applyPartitionActionsResponse = CampaignManagementHelper::ApplyProductPartitionActions($actions);
	 
	$adGroupCriterions = CampaignManagementHelper::GetAdGroupCriterionsByIds(
			$adGroupId,
            null,
			AdGroupCriterionType::ProductPartition)->AdGroupCriterions;
	 
	printf("Updated the bid for the tree root node\n\n");
	OutputProductPartitions($adGroupCriterions);
}


// Add a criterion to the ad group and then update it.
 
function AddBranchAndLeafCriterion($accountId, &$actions, $adGroupId)
{
	$actions = array();  // clear
	 
	$adGroupCriterions = CampaignManagementHelper::GetAdGroupCriterionsByIds(
			$adGroupId,
            null,
			AdGroupCriterionType::ProductPartition)->AdGroupCriterions;
	 
	$existingRoot = GetRootNode($adGroupCriterions);

	if (isset($existingRoot))
	{
		$nodeToDelete = new BiddableAdGroupCriterion();
		$nodeToDelete->Id = $existingRoot->Id;
		$nodeToDelete->AdGroupId = $existingRoot->AdGroupId;
		
		$encodedNodeToDelete = new SoapVar($nodeToDelete, SOAP_ENC_OBJECT, 'BiddableAdGroupCriterion', $GLOBALS['CampaignProxy']->GetNamespace());
		
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
	
	printf("Applying product partitions to the ad group...\n\n");
	$applyPartitionActionsResponse = CampaignManagementHelper::ApplyProductPartitionActions($actions);

	$adGroupCriterions = CampaignManagementHelper::GetAdGroupCriterionsByIds(
			$adGroupId,
            null,
			AdGroupCriterionType::ProductPartition)->AdGroupCriterions;

	printf("The product partition group tree now has 9 nodes\n\n");
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
	$encodedNodeToDelete = new SoapVar($electronics, SOAP_ENC_OBJECT, 'BiddableAdGroupCriterion', $GLOBALS['CampaignProxy']->GetNamespace());
	AddPartitionAction($encodedNodeToDelete, ItemAction::Delete, $actions);
	 
	$parent = new BiddableAdGroupCriterion();
	$parent->Id = $rootId;
	$encodedParent = new SoapVar($parent, SOAP_ENC_OBJECT, 'BiddableAdGroupCriterion', $GLOBALS['CampaignProxy']->GetNamespace());
	
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
	$applyPartitionActionsResponse = CampaignManagementHelper::ApplyProductPartitionActions($actions);
	 
	$adGroupCriterions = CampaignManagementHelper::GetAdGroupCriterionsByIds(
			$adGroupId,
            null,
			AdGroupCriterionType::ProductPartition)->AdGroupCriterions;
	 
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

	$encodedFixedBid = new SoapVar($fixedBid, SOAP_ENC_OBJECT, 'FixedBid', $GLOBALS['CampaignProxy']->GetNamespace());
	
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

	$encodedCriterion = new SoapVar($criterion, SOAP_ENC_OBJECT, 'ProductPartition', $GLOBALS['CampaignProxy']->GetNamespace());
	$adGroupCriterion->Criterion = $encodedCriterion;
	
	if ($isNegative)
	{
		$encodedAdGroupCriterion = new SoapVar($adGroupCriterion, SOAP_ENC_OBJECT, 'NegativeAdGroupCriterion', $GLOBALS['CampaignProxy']->GetNamespace());
	}
	else
	{
		$encodedAdGroupCriterion = new SoapVar($adGroupCriterion, SOAP_ENC_OBJECT, 'BiddableAdGroupCriterion', $GLOBALS['CampaignProxy']->GetNamespace());
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

	printf("%" . (($treeLevel > 0) ? $treeLevel * 4 : "") . "s%s%s\n\n",
			"",
			"Condition: ",
			$criterion->Condition->Operand);

	foreach ($childBranches[$node->Id] as $childNode)  // AdGroupCriterion 
	{
		OutputProductPartitionTree($childNode, $childBranches, $treeLevel + 1);
	}
}


// Outputs the campaign criterion IDs of each criterion that we added.

function OutputCampaignCriterionIdentifiers($criterionIds, $partialErrors)
{
	if (empty($criterionIds)) {
		return;
	}

	$count = count($criterionIds);

	for ($i = 0; $i < $count; $i++)
	{
		if (!empty($criterionIds[$i]))
		{
			printf("Successfully added campaign criterion with ID, %s\n\n",
        		$criterionIds[$i]);
		}
		else
		{
			printf("Failed to add campaign criterion at index, %d\n\n", $i);
		 
			$error = $partialErrors->BatchErrorCollection[$i];
		 
			printf("\tIndex: %d\n", $error->Index);
			printf("\tCode: %d\n", $error->Code);
			printf("\tErrorCode: %s\n", $error->ErrorCode);
			printf("\tMessage: %s\n", $error->Message);
			 
			if (!empty($error->BatchErrors->BatchError))
			{
				foreach ($error->BatchErrors->BatchError as $batchError)
				{
					printf("\tIndex: %d\n", $batchError->Index);
					printf("\tCode: %d\n", $batchError->Code);
					printf("\tErrorCode: %s\n", $batchError->ErrorCode);
					printf("\tMessage: %s\n\n", $batchError->Message);
				}
			}
		}
	}
}
