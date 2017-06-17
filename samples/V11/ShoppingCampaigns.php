<?php

namespace Microsoft\BingAds\Samples\v11;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/../AuthHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\v11\CampaignManagement classes that will be used.
use Microsoft\BingAds\v11\CampaignManagement\AddCampaignsRequest;
use Microsoft\BingAds\v11\CampaignManagement\Campaign;
use Microsoft\BingAds\v11\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\v11\CampaignManagement\GetBMCStoresByCustomerIdRequest;
use Microsoft\BingAds\v11\CampaignManagement\BMCStore;
use Microsoft\BingAds\v11\CampaignManagement\ShoppingSetting;
use Microsoft\BingAds\v11\CampaignManagement\CampaignType;
use Microsoft\BingAds\v11\CampaignManagement\DeleteCampaignsRequest;
use Microsoft\BingAds\v11\CampaignManagement\AddAdGroupsRequest;
use Microsoft\BingAds\v11\CampaignManagement\AdGroup;
use Microsoft\BingAds\v11\CampaignManagement\Date;
use Microsoft\BingAds\v11\CampaignManagement\AdDistribution;
use Microsoft\BingAds\v11\CampaignManagement\UpdateAdGroupsRequest;
use Microsoft\BingAds\v11\CampaignManagement\GetAdGroupsByIdsRequest;
use Microsoft\BingAds\v11\CampaignManagement\ProductAd;
use Microsoft\BingAds\v11\CampaignManagement\AddAdsRequest;
use Microsoft\BingAds\v11\CampaignManagement\CampaignCriterionType;
use Microsoft\BingAds\v11\CampaignManagement\ProductScope;
use Microsoft\BingAds\v11\CampaignManagement\AddCampaignCriterionsRequest;
use Microsoft\BingAds\v11\CampaignManagement\BiddableCampaignCriterion;
use Microsoft\BingAds\v11\CampaignManagement\ProductCondition;
use Microsoft\BingAds\v11\CampaignManagement\ProductPartitionType;
use Microsoft\BingAds\v11\CampaignManagement\AdGroupCriterionType;
use Microsoft\BingAds\v11\CampaignManagement\BiddableAdGroupCriterion;
use Microsoft\BingAds\v11\CampaignManagement\ItemAction;
use Microsoft\BingAds\v11\CampaignManagement\AdGroupCriterionAction;
use Microsoft\BingAds\v11\CampaignManagement\ApplyProductPartitionActionsRequest;
use Microsoft\BingAds\v11\CampaignManagement\GetAdGroupCriterionsByIdsRequest;
use Microsoft\BingAds\v11\CampaignManagement\NegativeAdGroupCriterion;
use Microsoft\BingAds\v11\CampaignManagement\ProductPartition;
use Microsoft\BingAds\v11\CampaignManagement\FixedBid;
use Microsoft\BingAds\v11\CampaignManagement\Bid;

// Specify the Microsoft\BingAds\v11\CustomerManagement classes that will be used.
use Microsoft\BingAds\v11\CustomerManagement\GetUserRequest;
use Microsoft\BingAds\v11\CustomerManagement\SearchAccountsRequest;
use Microsoft\BingAds\v11\CustomerManagement\Paging;
use Microsoft\BingAds\v11\CustomerManagement\Predicate;
use Microsoft\BingAds\v11\CustomerManagement\PredicateOperator;
use Microsoft\BingAds\v11\CustomerManagement\Account;
use Microsoft\BingAds\v11\CustomerManagement\User;

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


$PartitionActions = array(); // AdGroupCriterionAction array
$ReferenceId = -1;
$ids = null;

try
{
    // You should authenticate for Bing Ads production services with a Microsoft Account, 
    // instead of providing the Bing Ads username and password set. 
    
    //AuthHelper::AuthenticateWithOAuth();

    // However, authentication with a Microsoft Account is currently not supported in Sandbox,
    // so it is recommended that you set the UserName and Password in sandbox for testing.

    AuthHelper::AuthenticateWithUserName();

    $GLOBALS['CustomerProxy'] = new ServiceClient(ServiceClientType::CustomerManagementVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // Set the GetUser request parameter to an empty user identifier to get the current 
    // authenticated Bing Ads user, and then search for all accounts the user may access.

    $user = GetUser(null);

    // For this example we'll use the first account.

    $accounts = SearchAccountsByUserId($user->Id);
    $GLOBALS['AuthorizationData']->AccountId = $accounts->Account[0]->Id;
    $GLOBALS['AuthorizationData']->CustomerId = $accounts->Account[0]->ParentCustomerId;

    $GLOBALS['CampaignProxy'] = new ServiceClient(ServiceClientType::CampaignManagementVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    $stores= GetStores($GLOBALS['CampaignProxy']);
	
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
    $campaign->DaylightSaving = true;
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

    $addAdsResponse = AddAds($adGroupIds[0], $ads);
    $adIds = $addAdsResponse->AdIds->long;
    $adErrors = $addAdsResponse->PartialErrors;
    if(isset($addAdsResponse->PartialErrors->BatchError)){
        $adErrors = $addAdsResponse->PartialErrors->BatchError;
    }

    // Output the new assigned entity identifiers, as well as any partial errors
  
    OutputCampaignsWithPartialErrors($campaigns, $campaignIds, $campaignErrors);
    OutputCampaignsWithPartialErrors($adGroups, $adGroupIds, $adGroupErrors);
    OutputAdIdentifiers($adIds, $adErrors);

    // Add criterion to the campaign. The criterion is used to limit the campaign to a subset of
    // your product catalog.
	
    $addCriterionResponse = AddCampaignCriterion($campaignIds[0]);
    OutputCampaignCriterionIdentifiers($addCriterionResponse->CampaignCriterionIds->long, $addCriterionResponse->NestedPartialErrors);

    AddAndUpdateAdGroupCriterion($GLOBALS['AuthorizationData']->AccountId, $PartitionActions, $adGroupIds[0]);
    $applyPartitionActionsResponse = AddBranchAndLeafCriterion($GLOBALS['AuthorizationData']->AccountId, $PartitionActions, $adGroupIds[0]);
	
    $rootId = $applyPartitionActionsResponse->AdGroupCriterionIds->long[1];
    $electronicsCriterionId = $applyPartitionActionsResponse->AdGroupCriterionIds->long[8];
    UpdateBranchAndLeafCriterion($PartitionActions, $GLOBALS['AuthorizationData']->AccountId, $adGroupIds[0], $rootId, $electronicsCriterionId);
	 
    // Delete the campaign, ad group, product partitions, and ad that were previously added. 
    // You should remove this line if you want to view the added entities in the 
    // Bing Ads web application or another tool.

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

function GetStores($proxy)
{
	$GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 
  
    $request = new GetBMCStoresByCustomerIdRequest();
	$response = $GLOBALS['CampaignProxy']->GetService()->GetBMCStoresByCustomerId($request);
	return $response->BMCStores->BMCStore;
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
	$GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 
  
    $request = new AddCampaignCriterionsRequest();
	$request->CriterionType = CampaignCriterionType::ProductScope;
	
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
	
	$request->CampaignCriterions = array();
	$request->CampaignCriterions[] = $encodedCriterion;

	return $GLOBALS['CampaignProxy']->GetService()->AddCampaignCriterions($request);
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
	$applyPartitionActionsResponse = ApplyPartitionActions($actions);
	OutputCriterionIds($applyPartitionActionsResponse->AdGroupCriterionIds->long, $applyPartitionActionsResponse->PartialErrors);

	$adGroupCriterions = GetAdGroupCriterions(
			$accountId,
			$adGroupId,
            null,
			AdGroupCriterionType::ProductPartition);
	 
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
	
	$applyPartitionActionsResponse = ApplyPartitionActions($actions);
	 
	$adGroupCriterions = GetAdGroupCriterions(
			$accountId,
			$adGroupId,
            null,
			AdGroupCriterionType::ProductPartition);
	 
	printf("Updated the bid for the tree root node\n\n");
	OutputProductPartitions($adGroupCriterions);
}


// Add a criterion to the ad group and then update it.
 
function AddBranchAndLeafCriterion($accountId, &$actions, $adGroupId)
{
	$actions = array();  // clear
	 
	$adGroupCriterions = GetAdGroupCriterions(
			$accountId,
			$adGroupId,
            null,
			AdGroupCriterionType::ProductPartition);
	 
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
	$applyPartitionActionsResponse = ApplyPartitionActions($actions);

	$adGroupCriterions = GetAdGroupCriterions(
			$accountId,
			$adGroupId,
            null,
			AdGroupCriterionType::ProductPartition);

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
	$applyPartitionActionsResponse = applyPartitionActions($actions);
	 
	$adGroupCriterions = GetAdGroupCriterions(
			$accountId,
			$adGroupId,
            null,
			AdGroupCriterionType::ProductPartition);
	 
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


// Get the ad group's criterion.
 
function GetAdGroupCriterions(
		$accountId,
		$adGroupId,
        $adGroupCriterionIds,
		$criterionType)
{
	$GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 
  
    $request = new GetAdGroupCriterionsByIdsRequest();
	$request->AccountId = $accountId; 
	$request->AdGroupId = $adGroupId;
        $request->AdGroupCriterionIds = $adGroupCriterionIds;
	$request->CriterionType = $criterionType;

	return $GLOBALS['CampaignProxy']->GetService()->GetAdGroupCriterionsByIds($request)->AdGroupCriterions;
}


// Adds, updates, or deletes criterion for the ad group.
// All actions must be for the same ad group.
 
function ApplyPartitionActions($actions) // AdGroupCriterionAction
{
	$GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 
  
    $request = new ApplyProductPartitionActionsRequest();
	$request->CriterionActions = $actions;
	return $GLOBALS['CampaignProxy']->GetService()->ApplyProductPartitionActions($request);  // ApplyProductPartitionActionsResponse 
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
            printf("Campaign[%d] (Name:%s) successfully added and assigned CampaignId %s\n", 
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

        printf("\nCampaign[%d] (Name:%s) not added due to the following error:\n", $error->Index, $campaigns[$error->Index]->Name);

        printf("\tIndex: %d\n", $error->Index);
        printf("\tCode: %d\n", $error->Code);
        printf("\tErrorCode: %s\n", $error->ErrorCode);
        printf("\tMessage: %s\n", $error->Message);

        // In the case of an EditorialError, more details are available

        if ($error->Type == "EditorialError" && $error->ErrorCode == "CampaignServiceEditorialValidationError")
        {
            printf("\tDisapprovedText: %s\n", $error->DisapprovedText);
            printf("\tLocation: %s\n", $error->Location);
            printf("\tPublisherCountry: %s\n", $error->PublisherCountry);
            printf("\tReasonCode: %d\n", $error->ReasonCode);
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
            printf("AdGroup[%d] (Name:%s) successfully added and assigned AdGroupId %s\n", 
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

        printf("\nAdGroup[%d] (Name:%s) not added due to the following error:\n", $error->Index, $adGroups[$error->Index]->Name);

        printf("\tIndex: %d\n", $error->Index);
        printf("\tCode: %d\n", $error->Code);
        printf("\tErrorCode: %s\n", $error->ErrorCode);
        printf("\tMessage: %s\n", $error->Message);

        // In the case of an EditorialError, more details are available

        if ($error->Type == "EditorialError" && $error->ErrorCode == "CampaignServiceEditorialValidationError")
        {
            printf("\tDisapprovedText: %s\n", $error->DisapprovedText);
            printf("\tLocation: %s\n", $error->Location);
            printf("\tPublisherCountry: %s\n", $error->PublisherCountry);
            printf("\tReasonCode: %d\n", $error->ReasonCode);
        }
    }

    print "\n";
}

// Outputs the ad identifiers of each ad that we added.

function OutputAdIdentifiers($adIds, $partialErrors)
{
	if (empty($adIds)) {
		return;
	}

	$count = count($adIds);

	for ($i = 0; $i < $count; $i++)
	{
		if (!empty($adIds[$i]))
		{
			// A shopping campaign should contain only product ads.
			 
			printf("Successfully added a product ad with ID, %s\n\n",
				$adIds[$i]);
        }
		else
		{
			printf("Failed to add product ad at index, %d\n\n", $i);
			 
			$error = $partialErrors->BatchError[$i];
	      
			printf("\tIndex: %d\n", $error->Index);
			printf("\tCode: %d\n", $error->Code);
			printf("\tErrorCode: %s\n", $error->ErrorCode);
			printf("\tMessage: %s\n", $error->Message);
		 
			// If the error is an editorial error, get more details.
			 
			if ($error->Type === "EditorialError" && $error->ErrorCode === "CampaignServiceEditorialValidationError")
			{
				printf("\tDisapprovedText: %s\n", $error->DisapprovedText);
				printf("\tLocation: %s\n", $error->Location);
				printf("\tPublisherCountry: %s\n", $error->PublisherCountry);
				printf("\tReasonCode: %s\n", $error->ReasonCode);
			}
		}
	}
}

// Output the IDs of the criterion that we added to the ad group.
 
function OutputCriterionIds($criterionIds, $partialErrors)
{
	if (empty($criterionIds)) {
		return;
	}

	$count = count($criterionIds);

	for ($i = 0; $i < $count; $i++)
	{
		if (!empty($criterionIds[$i]))
		{
			printf("Successfully added criterion with ID, %s\n\n",
	        	$criterionIds[$i]);
		}
		else
		{
			printf("Failed to add criterion at index, %d\n\n", $i);
			 
			$error = $partialErrors->BatchError[$i];
			 
			printf("\tIndex: %d\n", $error->Index);
			printf("\tCode: %d\n", $error->Code);
			printf("\tErrorCode: %s\n", $error->ErrorCode);
			printf("\tMessage: %s\n", $error->Message);
		}
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

?>
