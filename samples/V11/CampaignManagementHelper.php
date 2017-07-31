<?php

namespace Microsoft\BingAds\Samples\V11;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";


use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V11\CampaignManagement classes that will be used.
use Microsoft\BingAds\V11\CampaignManagement\AddAdExtensionsRequest;
use Microsoft\BingAds\V11\CampaignManagement\AddAdGroupCriterionsRequest;
use Microsoft\BingAds\V11\CampaignManagement\AddAdGroupsRequest;
use Microsoft\BingAds\V11\CampaignManagement\AddAdsRequest;
use Microsoft\BingAds\V11\CampaignManagement\AddBudgetsRequest;
use Microsoft\BingAds\V11\CampaignManagement\AddCampaignCriterionsRequest;
use Microsoft\BingAds\V11\CampaignManagement\AddCampaignsRequest;
use Microsoft\BingAds\V11\CampaignManagement\AddConversionGoalsRequest;
use Microsoft\BingAds\V11\CampaignManagement\AddKeywordsRequest;
use Microsoft\BingAds\V11\CampaignManagement\AddListItemsToSharedListRequest;
use Microsoft\BingAds\V11\CampaignManagement\AddNegativeKeywordsToEntitiesRequest;
use Microsoft\BingAds\V11\CampaignManagement\AddSharedEntityRequest;
use Microsoft\BingAds\V11\CampaignManagement\AddUetTagsRequest;
use Microsoft\BingAds\V11\CampaignManagement\ApplyProductPartitionActionsRequest;
use Microsoft\BingAds\V11\CampaignManagement\DeleteAdGroupCriterionsRequest;
use Microsoft\BingAds\V11\CampaignManagement\DeleteAdExtensionsRequest;
use Microsoft\BingAds\V11\CampaignManagement\DeleteAdExtensionsAssociationsRequest;
use Microsoft\BingAds\V11\CampaignManagement\DeleteBudgetsRequest;
use Microsoft\BingAds\V11\CampaignManagement\DeleteCampaignsRequest;
use Microsoft\BingAds\V11\CampaignManagement\DeleteKeywordsRequest;
use Microsoft\BingAds\V11\CampaignManagement\DeleteListItemsFromSharedListRequest;
use Microsoft\BingAds\V11\CampaignManagement\DeleteNegativeKeywordsFromEntitiesRequest;
use Microsoft\BingAds\V11\CampaignManagement\DeleteSharedEntityAssociationsRequest;
use Microsoft\BingAds\V11\CampaignManagement\DeleteSharedEntitiesRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetAccountMigrationStatusesRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetAdExtensionsByIdsRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetAdExtensionsEditorialReasonsRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetAdGroupCriterionsByIdsRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetAdGroupsByCampaignIdRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetAdGroupsByIdsRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetAdsByAdGroupIdRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetAudiencesByIdsRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetBMCStoresByCustomerIdRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetBudgetsByIdsRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetCampaignCriterionsByIdsRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetCampaignIdsByBudgetIdsRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetCampaignsByAccountIdRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetCampaignsByIdsRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetConversionGoalsByIdsRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetGeoLocationsFileUrlRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetKeywordsByAdGroupIdRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetNegativeKeywordsByEntityIdsRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetSharedEntityAssociationsByEntityIdsRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetSharedEntityAssociationsBySharedEntityIdsRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetSharedEntitiesByAccountIdRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetListItemsBySharedListRequest;
use Microsoft\BingAds\V11\CampaignManagement\GetUetTagsByIdsRequest;
use Microsoft\BingAds\V11\CampaignManagement\SetAdExtensionsAssociationsRequest;
use Microsoft\BingAds\V11\CampaignManagement\SetSharedEntityAssociationsRequest;
use Microsoft\BingAds\V11\CampaignManagement\UpdateAdExtensionsRequest;
use Microsoft\BingAds\V11\CampaignManagement\UpdateAdGroupCriterionsRequest;
use Microsoft\BingAds\V11\CampaignManagement\UpdateAdGroupsRequest;
use Microsoft\BingAds\V11\CampaignManagement\UpdateAdsRequest;
use Microsoft\BingAds\V11\CampaignManagement\UpdateBudgetsRequest;
use Microsoft\BingAds\V11\CampaignManagement\UpdateCampaignsRequest;
use Microsoft\BingAds\V11\CampaignManagement\UpdateConversionGoalsRequest;
use Microsoft\BingAds\V11\CampaignManagement\UpdateKeywordsRequest;
use Microsoft\BingAds\V11\CampaignManagement\UpdateSharedEntitiesRequest;
use Microsoft\BingAds\V11\CampaignManagement\UpdateUetTagsRequest;
use Microsoft\BingAds\V11\CampaignManagement\CampaignType;
use Microsoft\BingAds\V11\CampaignManagement\AdGroupCriterionType;
use Microsoft\BingAds\V11\CampaignManagement\CampaignCriterionType;
use Microsoft\BingAds\V11\CampaignManagement\AdGroupCriterion;
use Microsoft\BingAds\V11\CampaignManagement\CampaignCriterion;

final class CampaignManagementHelper {

    const AllCampaignTypes = 
        CampaignType::SearchAndContent . ' ' . 
        CampaignType::Shopping . ' ' . 
        CampaignType::DynamicSearchAds;

    const AllTargetCampaignCriterionTypes = 
        CampaignCriterionType::Age . ' ' . 
        CampaignCriterionType::DayTime . ' ' . 
        CampaignCriterionType::Device . ' ' . 
        CampaignCriterionType::Gender . ' ' . 
        CampaignCriterionType::Location . ' ' . 
        CampaignCriterionType::LocationIntent . ' ' . 
        CampaignCriterionType::Radius;

    const AllTargetAdGroupCriterionTypes = 
        AdGroupCriterionType::Age . ' ' . 
        AdGroupCriterionType::DayTime . ' ' . 
        AdGroupCriterionType::Device . ' ' . 
        AdGroupCriterionType::Gender . ' ' . 
        AdGroupCriterionType::Location . ' ' . 
        AdGroupCriterionType::LocationIntent . ' ' . 
        AdGroupCriterionType::Radius;

    static function AddCampaigns($accountId, $campaigns)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new AddCampaignsRequest();
        $request->AccountId = $accountId;
        $request->Campaigns = $campaigns;
        
        return $GLOBALS['CampaignProxy']->GetService()->AddCampaigns($request);
    }

    static function GetBMCStoresByCustomerId($proxy)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 
    
        $request = new GetBMCStoresByCustomerIdRequest();
        return $GLOBALS['CampaignProxy']->GetService()->GetBMCStoresByCustomerId($request);
    }

    static function ApplyProductPartitionActions($actions) 
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 
    
        $request = new ApplyProductPartitionActionsRequest();
        $request->CriterionActions = $actions;
        return $GLOBALS['CampaignProxy']->GetService()->ApplyProductPartitionActions($request);  
    }

    static function AddBudgets($budgets)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

        $request = new AddBudgetsRequest();
        $request->Budgets = $budgets;

        return $GLOBALS['Proxy']->GetService()->AddBudgets($request);
    }

    static function GetBudgetsByIds($budgetIds)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

        $request = new GetBudgetsByIdsRequest();
        $request->BudgetIds = $budgetIds;
        
        return $GLOBALS['Proxy']->GetService()->GetBudgetsByIds($request);
    }

    static function GetCampaignIdsByBudgetIds($budgetIds)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

        $request = new GetCampaignIdsByBudgetIdsRequest();
        $request->BudgetIds = $budgetIds;
        
        return $GLOBALS['Proxy']->GetService()->GetCampaignIdsByBudgetIds($request);
    }

    static function UpdateBudgets($budgets)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

        $request = new UpdateBudgetsRequest();
        $request->Budgets = $budgets;
        
        return $GLOBALS['Proxy']->GetService()->UpdateBudgets($request);
    }

    static function DeleteBudgets($budgetIds)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

        $request = new DeleteBudgetsRequest();
        $request->BudgetIds = $budgetIds;
        
        return $GLOBALS['Proxy']->GetService()->DeleteBudgets($request);
    }

    static function UpdateCampaigns($accountId, $campaigns)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

        $request = new UpdateCampaignsRequest();
        $request->AccountId = $accountId;
        $request->Campaigns = $campaigns;
        
        return $GLOBALS['Proxy']->GetService()->UpdateCampaigns($request);
    }

    static function AddKeywords($adGroupId, $keywords)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

        $request = new AddKeywordsRequest();
        $request->AdGroupId = $adGroupId;
        $request->Keywords = $keywords;
        
        return $GLOBALS['Proxy']->GetService()->AddKeywords($request);
    }

    static function DeleteKeywords($adGroupId, $keywordIds)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

        $request = new DeleteKeywordsRequest();
        $request->AdGroupId = $adGroupId;
        $request->KeywordIds = $keywordIds;
        
        return $GLOBALS['Proxy']->GetService()->DeleteKeywords($request);
    }

    static function GetKeywordsByAdGroupId($adGroupId)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

        $request = new GetKeywordsByAdGroupIdRequest();
        $request->AdGroupId = $adGroupId;
        
        return $GLOBALS['Proxy']->GetService()->GetKeywordsByAdGroupId($request);
    }

    static function UpdateKeywords($adGroupId, $keywords)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

        $request = new UpdateKeywordsRequest();
        $request->AdGroupId = $adGroupId;
        $request->Keywords = $keywords;
        
        return $GLOBALS['Proxy']->GetService()->UpdateKeywords($request);
    }

    static function AddAds($adGroupId, $ads)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

        $request = new AddAdsRequest();
        $request->AdGroupId = $adGroupId;
        $request->Ads = $ads;
        
        return $GLOBALS['Proxy']->GetService()->AddAds($request);
    }

    static function GetAdsByAdGroupId($adGroupId, $adTypes)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

        $request = new GetAdsByAdGroupIdRequest();
        $request->AdGroupId = $adGroupId;
        $request->AdTypes = $adTypes;
        
        return $GLOBALS['Proxy']->GetService()->GetAdsByAdGroupId($request);
    }

    static function UpdateAds($adGroupId, $ads)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

        $request = new UpdateAdsRequest();
        $request->AdGroupId = $adGroupId;
        $request->Ads = $ads;
        
        return $GLOBALS['Proxy']->GetService()->UpdateAds($request);
    }

    static function GetCampaignsByAccountId($accountId, $campaignType)
    {
        $GLOBALS['proxy'] = $GLOBALS['CampaignProxy'];
        
        $request = new GetCampaignsByAccountIdRequest();
        $request->AccountId = $accountId;
        $request->CampaignType = $campaignType;

        return $GLOBALS['CampaignProxy']->GetService()->GetCampaignsByAccountId($request);
    }

    static function GetCampaignsByIds($accountId, $campaignIds, $campaignType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new GetCampaignsByIdsRequest();
        $request->AccountId = $accountId;
        $request->CampaignIds = $campaignIds;
        $request->CampaignType = $campaignType;
        
        return $GLOBALS['CampaignProxy']->GetService()->GetCampaignsByIds($request);
    }
    
    static function DeleteCampaigns($accountId, $campaignIds)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new DeleteCampaignsRequest();
        $request->AccountId = $accountId;
        $request->CampaignIds = $campaignIds;
        
        $GLOBALS['CampaignProxy']->GetService()->DeleteCampaigns($request);
    }

    static function AddAdGroups($campaignId, $adGroups)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new AddAdGroupsRequest();
        $request->CampaignId = $campaignId;
        $request->AdGroups = $adGroups;
        
        return $GLOBALS['CampaignProxy']->GetService()->AddAdGroups($request);
    }

    static function GetAdGroupsByCampaignId($campaignId)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new GetAdGroupsByCampaignIdRequest();
        $request->CampaignId = $campaignId;
        
        return $GLOBALS['CampaignProxy']->GetService()->GetAdGroupsByCampaignId($request);
    }

    static function GetAudiencesByIds($audienceIds, $audienceType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new GetAudiencesByIdsRequest();
        $request->AudienceIds = $audienceIds;
        $request->Type = $audienceType;
        
        return $GLOBALS['CampaignProxy']->GetService()->GetAudiencesByIds($request);
    }

    static function AddCampaignCriterions($campaignCriterions, $criterionType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new AddCampaignCriterionsRequest();
        $request->CampaignCriterions = $campaignCriterions;
        $request->CriterionType = $criterionType;
        
        return $GLOBALS['CampaignProxy']->GetService()->AddCampaignCriterions($request);
    }

    static function AddAdGroupCriterions($adGroupCriterions, $criterionType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new AddAdGroupCriterionsRequest();
        $request->AdGroupCriterions = $adGroupCriterions;
        $request->CriterionType = $criterionType;
        
        return $GLOBALS['CampaignProxy']->GetService()->AddAdGroupCriterions($request);
    }

    static function DeleteAdGroupCriterions($adGroupId, $adGroupCriterionIds, $criterionType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new DeleteAdGroupCriterionsRequest();
        $request->AdGroupId = $adGroupId;
        $request->AdGroupCriterionIds = $adGroupCriterionIds;
        $request->CriterionType = $criterionType;
        
        $GLOBALS['CampaignProxy']->GetService()->DeleteAdGroupCriterions($request);
    }

    static function GetAdGroupCriterionsByIds($adGroupId, $adGroupCriterionIds, $criterionType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new GetAdGroupCriterionsByIdsRequest();
        $request->AdGroupId = $adGroupId;
        $request->AdGroupCriterionIds = $adGroupCriterionIds;
        $request->CriterionType = $criterionType;
        
        return $GLOBALS['CampaignProxy']->GetService()->GetAdGroupCriterionsByIds($request);
    }

    static function GetCampaignCriterionsByIds($campaignId, $campaignCriterionIds, $criterionType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new GetCampaignCriterionsByIdsRequest();
        $request->CampaignId = $campaignId;
        $request->CampaignCriterionIds = $campaignCriterionIds;
        $request->CriterionType = $criterionType;
        
        return $GLOBALS['CampaignProxy']->GetService()->GetCampaignCriterionsByIds($request);
    }

    static function UpdateAdGroupCriterions($adGroupCriterions, $criterionType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new UpdateAdGroupCriterionsRequest();
        $request->AdGroupCriterions = $adGroupCriterions;
        $request->CriterionType = $criterionType;
        
        return $GLOBALS['CampaignProxy']->GetService()->UpdateAdGroupCriterions($request);
    }

    static function GetAccountMigrationStatuses($accountIds, $migrationType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];
        
        $request = new GetAccountMigrationStatusesRequest();
        $request->AccountIds = $accountIds;
        $request->MigrationType = $migrationType;
        
        return $GLOBALS['Proxy']->GetService()->GetAccountMigrationStatuses($request);
    }

    static function AddAdExtensions($accountId, $adExtensions)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];
        
        $request = new AddAdExtensionsRequest();
        $request->AccountId = $accountId;
        $request->AdExtensions = $adExtensions;
        
        return $GLOBALS['Proxy']->GetService()->AddAdExtensions($request);
    }

    static function UpdateAdExtensions($accountId, $adExtensions)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];
        
        $request = new UpdateAdExtensionsRequest();
        $request->AccountId = $accountId;
        $request->AdExtensions = $adExtensions;
        
        return $GLOBALS['Proxy']->GetService()->UpdateAdExtensions($request);
    }

    static function DeleteAdExtensions($accountId, $adExtensionIds)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];
        
        $request = new DeleteAdExtensionsRequest();
        $request->AccountId = $accountId;
        $request->AdExtensionIds = $adExtensionIds;

        $GLOBALS['Proxy']->GetService()->DeleteAdExtensions($request);
    }

    static function SetAdExtensionsAssociations($accountId, $associations, $associationType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];
        
        $request = new SetAdExtensionsAssociationsRequest();
        $request->AccountId = $accountId;
        $request->AdExtensionIdToEntityIdAssociations = $associations;
        $request->AssociationType = $associationType;

        $GLOBALS['Proxy']->GetService()->SetAdExtensionsAssociations($request);
    }

    static function DeleteAdExtensionsAssociations($accountId, $associations, $associationType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];
        
        $request = new DeleteAdExtensionsAssociationsRequest();
        $request->AccountId = $accountId;
        $request->AdExtensionIdToEntityIdAssociations = $associations;
        $request->AssociationType = $associationType;

        $GLOBALS['Proxy']->GetService()->DeleteAdExtensionsAssociations($request);
    }

    static function GetAdExtensionsByIds($accountId, $adExtensionIds, $adExtensionsTypeFilter)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];
        
        $request = new GetAdExtensionsByIdsRequest();
        $request->AccountId = $accountId;
        $request->AdExtensionIds = $adExtensionIds;
        $request->AdExtensionType = $adExtensionsTypeFilter;

        return $GLOBALS['Proxy']->GetService()->GetAdExtensionsByIds($request);  
    }

    static function GetAdExtensionsEditorialReasons($accountId, $associations, $associationType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];
        
        $request = new GetAdExtensionsEditorialReasonsRequest();
        $request->AccountId = $accountId;
        $request->AdExtensionIdToEntityIdAssociations = $associations;
        $request->AssociationType = $associationType;

        return $GLOBALS['Proxy']->GetService()->GetAdExtensionsEditorialReasons($request);
    }

    static function AddConversionGoals($conversionGoals)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new AddConversionGoalsRequest();
        $request->ConversionGoals = $conversionGoals;
        
        return $GLOBALS['CampaignProxy']->GetService()->AddConversionGoals($request);
    }

    static function GetConversionGoalsByIds($conversionGoalIds, $conversionGoalTypes)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new UpdateConversionGoalsRequest();
        $request->ConversionGoalIds = $conversionGoalIds;
        $request->ConversionGoalTypes = $conversionGoalTypes;
        
        return $GLOBALS['CampaignProxy']->GetService()->GetConversionGoalsByIds($request);
    }

    static function GetGeoLocationsFileUrl(
        $version, 
        $languageLocale)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

        $request = new GetGeoLocationsFileUrlRequest();
        $request->Version = $version;
        $request->LanguageLocale = $languageLocale;
        
        return $GLOBALS['Proxy']->GetService()->GetGeoLocationsFileUrl($request);
    }

    static function UpdateConversionGoals($conversionGoals)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new UpdateConversionGoalsRequest();
        $request->ConversionGoals = $conversionGoals;
        
        return $GLOBALS['CampaignProxy']->GetService()->UpdateConversionGoals($request);
    }

    static function AddUetTags($uetTags)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new AddUetTagsRequest();
        $request->UetTags = $uetTags;
        
        return $GLOBALS['CampaignProxy']->GetService()->AddUetTags($request);
    }

    static function GetUetTagsByIds($tagIds)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new GetUetTagsByIdsRequest();
        $request->TagIds = $tagIds;
        
        return $GLOBALS['CampaignProxy']->GetService()->GetUetTagsByIds($request);
    }

    static function UpdateUetTags($uetTags)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new UpdateUetTagsRequest();
        $request->UetTags = $uetTags;
        
        return $GLOBALS['CampaignProxy']->GetService()->UpdateUetTags($request);
    }
        
    static function AddListItemsToSharedList(
            $listItems, 
            $sharedList)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new AddListItemsToSharedListRequest();
        $request->ListItems = $listItems;
        $request->SharedList = $sharedList;
        
        return $GLOBALS['CampaignProxy']->GetService()->AddListItemsToSharedList($request);
    }

    static function AddSharedEntity(
            $sharedEntity, 
            $listItems)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new AddSharedEntityRequest();
        $request->SharedEntity = $sharedEntity;
        $request->ListItems = $listItems;
        
        return $GLOBALS['CampaignProxy']->GetService()->AddSharedEntity($request);
    }

    static function DeleteListItemsFromSharedList(
            $listItemIds, 
            $sharedList)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new DeleteListItemsFromSharedListRequest();
        $request->ListItemIds = $listItemIds;
        $request->SharedList = $sharedList;
        
        return $GLOBALS['CampaignProxy']->GetService()->DeleteListItemsFromSharedList($request)->PartialErrors;
    }

    static function DeleteSharedEntities($sharedEntities)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new DeleteSharedEntitiesRequest();
        $request->SharedEntities = $sharedEntities;
            
        return $GLOBALS['CampaignProxy']->GetService()->DeleteSharedEntities($request)->PartialErrors;
    }

    static function DeleteSharedEntityAssociations($associations)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new DeleteSharedEntityAssociationsRequest();
        $request->Associations = $associations;
            
        return $GLOBALS['CampaignProxy']->GetService()->DeleteSharedEntityAssociations($request)->PartialErrors;
    }

    static function GetListItemsBySharedList($sharedList)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new GetListItemsBySharedListRequest();
        $request->SharedList = $sharedList;
            
        return $GLOBALS['CampaignProxy']->GetService()->GetListItemsBySharedList($request)->ListItems;
    }

    static function GetSharedEntitiesByAccountId($sharedEntityType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new GetSharedEntitiesByAccountIdRequest();
        $request->SharedEntityType = $sharedEntityType;
            
        return $GLOBALS['CampaignProxy']->GetService()->GetSharedEntitiesByAccountId($request)->SharedEntities;
    }

    static function GetSharedEntityAssociationsByEntityIds(
            $entityIds,
            $entityType,
            $sharedEntityType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new GetSharedEntityAssociationsByEntityIdsRequest();
        $request->EntityIds = $entityIds;
        $request->EntityType = $entityType;
        $request->SharedEntityType = $sharedEntityType;
            
        return $GLOBALS['CampaignProxy']->GetService()->GetSharedEntityAssociationsByEntityIds($request);
    }

    static function GetSharedEntityAssociationsBySharedEntityIds(
            $entityType,
            $sharedEntityIds,
            $sharedEntityType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new GetSharedEntityAssociationsBySharedEntityIdsRequest();
        $request->EntityType = $entityType;
        $request->SharedEntityIds = $sharedEntityIds;
        $request->SharedEntityType = $sharedEntityType;
            
        return $GLOBALS['CampaignProxy']->GetService()->GetSharedEntityAssociationsBySharedEntityIds($request);
    }

    static function SetSharedEntityAssociations($associations)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new SetSharedEntityAssociationsRequest();
        $request->Associations = $associations;
            
        return $GLOBALS['CampaignProxy']->GetService()->SetSharedEntityAssociations($request)->PartialErrors;
    }

    static function UpdateSharedEntities($sharedEntities)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new UpdateSharedEntitiesRequest();
        $request->SharedEntities = $sharedEntities;
            
        return $GLOBALS['CampaignProxy']->GetService()->UpdateSharedEntities($request)->PartialErrors;
    }

    static function AddNegativeKeywordsToEntities($entityNegativeKeywords)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new AddNegativeKeywordsToEntitiesRequest();
        $request->EntityNegativeKeywords = $entityNegativeKeywords;
            
        return $GLOBALS['CampaignProxy']->GetService()->AddNegativeKeywordsToEntities($request);
    }

    static function DeleteNegativeKeywordsFromEntities($entityNegativeKeywords)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new DeleteNegativeKeywordsFromEntitiesRequest();
        $request->EntityNegativeKeywords = $entityNegativeKeywords;
            
        return $GLOBALS['CampaignProxy']->GetService()->DeleteNegativeKeywordsFromEntities($request)->NestedPartialErrors;
    }

    static function GetNegativeKeywordsByEntityIds(
            $entityIds,
            $entityType,
            $parentEntityId)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new GetNegativeKeywordsByEntityIdsRequest();
        $request->EntityIds = $entityIds;
        $request->EntityType = $entityType;
        $request->ParentEntityId = $parentEntityId;
            
        return $GLOBALS['CampaignProxy']->GetService()->GetNegativeKeywordsByEntityIds($request);
    }


    // Outputs the list of ids.

    static function OutputIds($ids)
    {
        if(count((array)$ids) == 0)
        {
            return;
        }

        foreach ($ids as $id)
        {
            if(!is_null($id)){
                printf("Id: %s\n", $id);
            }
            else{
                printf("Nil Id\n");
            }
            
        }
    }

        
    static function OutputUetTag($uetTag)
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

    static function OutputConversionGoal($conversionGoal)
    {
        if (!empty($conversionGoal))
        {
            printf("ConversionWindowInMinutes: %s\n", $conversionGoal->ConversionWindowInMinutes);
            printf("CountType: %s\n", $conversionGoal->CountType);
            printf("Id: %s\n", $conversionGoal->Id);
            printf("Name: %s\n", $conversionGoal->Name);
            CampaignManagementHelper::OutputConversionGoalRevenue($conversionGoal->Revenue);
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

    static function OutputConversionGoalRevenue($conversionGoalRevenue)
    {
        if (!empty($conversionGoalRevenue))
        {
            printf("CurrencyCode: %s\n", $conversionGoalRevenue->CurrencyCode);
            printf("Type: %s\n", $conversionGoalRevenue->Type);
            printf("Value: %s\n", $conversionGoalRevenue->Value);
        }
    }

    // Outputs a list of BatchError objects that represent partial errors while managing negative keywords.

    static function OutputPartialErrors($partialErrors)
    {
        if(count((array)$partialErrors) == 0)
        {
            return;
        }

        if(!isset($partialErrors->BatchError))
        {
            return;
        }

        print "BatchError (PartialErrors) items:\n\n";
        foreach ($partialErrors->BatchError as $error)
        {
            printf("\tIndex: %d\n", $error->Index);
            printf("\tCode: %d\n", $error->Code);
            printf("\tErrorCode: %s\n", $error->ErrorCode);
            printf("\tMessage: %s\n\n", $error->Message);

            // In the case of an EditorialError, more details are available
            if ($error->Type == "EditorialError" && $error->ErrorCode == "CampaignServiceEditorialValidationError")
            {
                printf("\tDisapprovedText: %s\n", $error->DisapprovedText);
                printf("\tLocation: %s\n", $error->Location);
                printf("\tPublisherCountry: %s\n", $error->PublisherCountry);
                printf("\tReasonCode: %d\n\n", $error->ReasonCode);
            }
        }
    }
    
    // Outputs the remarketing list.

    static function OutputRemarketingList($remarketingList)
    {
        if ($remarketingList != null)
        {
            // Output inherited properties of the Audience base class.
            CampaignManagementHelper::OutputAudience($remarketingList);

            // Output properties that are specific to the RemarketingList
            printf("TagId: %s\n\n", $remarketingList->TagId);
            CampaignManagementHelper::OutputRemarketingRule($remarketingList->Rule);       
        }
    }

    
    static function OutputBudget($budget)
    {
        if (!empty($budget))
        {
            printf("Amount: %s\n", $budget->Amount);
            printf("AssociationCount: %s\n", $budget->AssociationCount);
            printf("BudgetType: %s\n", $budget->BudgetType);
            printf("Id: %s\n", $budget->Id);
            printf("Name: %s\n\n", $budget->Name);
        }
    }

    // Outputs the audience.

    static function OutputAudience($audience)
    {
        if ($audience != null)
        {
            printf("Description: %s\n", $audience->Description);
            if ($audience->ForwardCompatibilityMap != null)
            {
                foreach ($audience->ForwardCompatibilityMap as $pair)
                {
                    printf("\tKey: %s\n", $pair->Key);
                    printf("\tValue: %s\n", $pair->Value);
                }
            }
            printf("Id: %s\n", $audience->Id);
            printf("MembershipDuration: %s\n", $audience->MembershipDuration);
            printf("Name: %s\n", $audience->Name);
            printf("ParentId: %s\n", $audience->ParentId);
            printf("Scope: %s\n", $audience->Scope);
        }
    }

    static function OutputRemarketingRule($remarketingRule)
    {
        if ($remarketingRule != null)
        {
            printf("Type: %s\n", $remarketingRule->Type);
            
            if ($remarketingRule->Type === "CustomEvents")
            {
                printf("Action: %s\n", $remarketingRule->Action);
                printf("ActionOperator: %s\n", $remarketingRule->ActionOperator);
                printf("Category: %s\n", $remarketingRule->Category);
                printf("CategoryOperator: %s\n", $remarketingRule->CategoryOperator);
                printf("Label: %s\n", $remarketingRule->Label);
                printf("LabelOperator: %s\n", $remarketingRule->LabelOperator);
                printf("Value: %s\n", $remarketingRule->Value);
                printf("ValueOperator: %s\n", $remarketingRule->ValueOperator);
            }    		
            else if ($remarketingRule->Type === "PageVisitors")
            {
                if(isset($remarketingRule->RuleItemGroups->RuleItemGroup)){
                    print("RuleItemGroups: \n");
                    CampaignManagementHelper::OutputRuleItemGroups($remarketingRule->RuleItemGroups);
                }
            }
            else if ($remarketingRule->Type === "PageVisitorsWhoDidNotVisitAnotherPage")
            {
                if(isset($remarketingRule->ExcludeRuleItemGroups->RuleItemGroup)){
                    print("ExcludeRuleItemGroups: \n");
                    CampaignManagementHelper::OutputRuleItemGroups($remarketingRule->ExcludeRuleItemGroups);
                }
                if(isset($remarketingRule->IncludeRuleItemGroups->RuleItemGroup)){
                    print("IncludeRuleItemGroups: \n");
                    CampaignManagementHelper::OutputRuleItemGroups($remarketingRule->IncludeRuleItemGroups);
                }
            }
            else if ($remarketingRule->Type === "PageVisitorsWhoVisitedAnotherPage")
            {
                if(isset($remarketingRule->AnotherRuleItemGroups->RuleItemGroup)){
                    print("AnotherRuleItemGroups: \n");
                    CampaignManagementHelper::OutputRuleItemGroups($remarketingRule->AnotherRuleItemGroups);
                }
                if(isset($remarketingRule->RuleItemGroups->RuleItemGroup)){
                    print("RuleItemGroups: \n");
                    CampaignManagementHelper::OutputRuleItemGroups($remarketingRule->RuleItemGroups);
                }
            }
            else
            {
                printf("Unknown remarketing rule type: %s\n", $remarketingRule->Type);
            }
        }
    }

    // Outputs the list of rule item groups.

    static function OutputRuleItemGroups($ruleItemGroups)
    {
        if(count((array)$ruleItemGroups) == 0)
        {
            return;
        }

        foreach ($ruleItemGroups as $ruleItemGroup)
        {
            if(isset($ruleItemGroup->Items->RuleItem)){
                foreach($ruleItemGroup->Items->RuleItem as $ruleItem){
                    if ($ruleItem->Type === "StringRuleItem")
                    {
                        print("\tRuleItem: \n");
                        printf("\tOperand: %s\n", $ruleItem->Operand);
                        printf("\tOperator: %s\n", $ruleItem->Operator);
                        printf("\tValue: %s\n", $ruleItem->Value);
                    }
                    else
                    {
                        print("Unknown remarketing rule item type.\n");
                    }
                }
            }
        }
    }

        
    // Outputs the negative keyword identifiers added to each campaign or ad group entity. 
    // The IdCollection items are available by calling AddNegativeKeywordsToEntities. 

    static function OutputNegativeKeywordIds($idCollections)
    {
        if(count((array)$idCollections) == 0)
        {
            return;
        }

        for ($index = 0; $index < count($idCollections); $index++)
        {
            printf("NegativeKeyword Ids at entity index %d:\n\n", $index);
            foreach ($idCollections[$index]->Ids->long as $id)
            {
                printf("\tId: %s\n\n", $id);
            }
        }
    }

    // Outputs the negative keywords 

    static function OutputNegativeKeywords($sharedListItems)
    {
        if(count((array)$sharedListItems) == 0)
        {
            return;
        }

        foreach ($sharedListItems as $sharedListItem)
        {
            if($sharedListItem->Type == "NegativeKeyword")
            {
                printf("\tNegativeKeyword Text: %s\n", $sharedListItem->Text);
                printf("\tId: %s\n", $sharedListItem->Id);
                printf("\tMatchType: %s\n\n", $sharedListItem->MatchType);
            }
        }
    }

    // Outputs a list of EntityNegativeKeyword objects  

    static function OutputEntityNegativeKeywords($entityNegativeKeywords)
    {
        if(count((array)$entityNegativeKeywords) == 0)
        {
            return;
        }

        print "EntityNegativeKeyword items:\n\n";
        foreach ($entityNegativeKeywords as $entityNegativeKeyword)
        {
            printf("\tEntityId: %s\n", $entityNegativeKeyword->EntityId);
            printf("\tEntityType: %s\n\n", $entityNegativeKeyword->EntityType);
            CampaignManagementHelper::OutputNegativeKeywords($entityNegativeKeyword->NegativeKeywords->NegativeKeyword);
        }
    }

    // Gets the negative keywords that are only associated with the specified campaigns or ad groups. 

    static function GetAndOutputSharedEntityIdentifiers($sharedEntityType)
    {
        $sharedEntities = CampaignManagementHelper::GetSharedEntitiesByAccountId($sharedEntityType);
        $sharedEntityIds = array();

        if((count((array)$sharedEntities) != 0) && is_array($sharedEntities->SharedEntity))
        {
            for ($index = 0; $index < count($sharedEntities->SharedEntity); $index++)
            {
                $sharedEntity = $sharedEntities->SharedEntity[$index];
                if(!is_null($sharedEntity->Id))
                {
                    $sharedEntityIds[] = $sharedEntity->Id;
                    printf("SharedEntity[%d] (%s) has SharedEntity Id %s.\n\n",
                        $index,
                        $sharedEntities->SharedEntity[$index]->Name,
                        $sharedEntities->SharedEntity[$index]->Id);
                }
            }
        }
        return $sharedEntityIds;
    }

    // Outputs the list item identifiers, as well as any partial errors

    static function OutputNegativeKeywordResults(
            $sharedListId,
            $sharedListItems, 
            $sharedListItemIds, 
            $partialErrors)
    {
        if(count((array)$sharedListItemIds) == 0)
        {
            return;
        }

        for ($index = 0; $index < count($sharedListItemIds); $index++)
        {
            // Determine if the SharedListItem is a NegativeKeyword. 
            if($sharedListItems[$index]->enc_stype === "NegativeKeyword")
            {
                // Determine if the corresponding index has a valid identifier
                if($sharedListItemIds[$index] > 0)
                { 
                    printf("NegativeKeyword[%d] (%s) successfully added to NegativeKeywordList (%d) and assigned Negative Keyword Id %s.\n",
                            $index,
                            $sharedListItems[$index]->enc_value->Text,
                            $sharedListId,
                            $sharedListItemIds[$index]);
                }
            }
            else
            {
                print "SharedListItem is not a NegativeKeyword.\n\n";
            }
        }

        print "\n";

        CampaignManagementHelper::OutputPartialErrors($partialErrors);
    }

    // Outputs a list of SharedEntityAssociation objects.

    static function OutputSharedEntityAssociations($associations)
    {
        if(count((array)$associations) == 0)
        {
            return;
        }

        printf("SharedEntityAssociation items:\n\n");
        foreach ($associations as $sharedEntityAssociation)
        {
            printf("\tEntityId: %s\n", $sharedEntityAssociation->EntityId);
            printf("\tEntityType: %s\n", $sharedEntityAssociation->EntityType);
            printf("\tSharedEntityId: %s\n", $sharedEntityAssociation->SharedEntityId);
            printf("\tSharedEntityType: %s\n\n", $sharedEntityAssociation->SharedEntityType);
        }
    }

    // Outputs a list of BatchErrorCollection objects that represent partial errors while managing 
    // negative keywords.

    static function OutputBatchErrorCollections($nestedPartialErrors)
    {
        if(count((array)$nestedPartialErrors) == 0)
        {
            return;
        }

        printf("BatchErrorCollection (NestedPartialErrors) items:\n\n");
        foreach ($nestedPartialErrors as $collection)
        {
            // The top level list index corresponds to the campaign or ad group index identifier.
            if (!empty($collection))
            {
                if (!is_null($collection->Code))
                {
                    printf("\tIndex: %d", $collection->Index);
                    printf("\tCode: %d", $collection->Code);
                    printf("\tErrorCode: %s", $collection->ErrorCode);
                    printf("\tMessage: %s\n\n", $collection->Message);
                }

                CampaignManagementHelper::OutputPartialErrors($collection->BatchErrors);
            }
        }
    }
        
    // Outputs the ad extensions and editorial rejection reasons if any exist.

    static function OutputAdExtensionsWithEditorialReasons($adExtensions, $adExtensionEditorialReasonCollection)
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
                    CampaignManagementHelper::OutputAppAdExtension($extension);
                }    		
                else if ($extension->Type === "CallAdExtension")
                {
                    CampaignManagementHelper::OutputCallAdExtension($extension);
                }
                else if ($extension->Type === "CalloutAdExtension")
                {
                    CampaignManagementHelper::OutputCalloutAdExtension($extension);
                }
                else if ($extension->Type === "LocationAdExtension")
                {
                    CampaignManagementHelper::OutputLocationAdExtension($extension);
                }
                else if ($extension->Type === "ReviewAdExtension")
                {
                    CampaignManagementHelper::OutputReviewAdExtension($extension);
                }
                else if ($extension->Type === "SiteLinksAdExtension")
                {
                    CampaignManagementHelper::OutputSiteLinksAdExtension($extension);
                }
                else if ($extension->Type === "Sitelink2AdExtension")
                {
                    CampaignManagementHelper::OutputSitelink2AdExtension($extension);
                }
                else if ($extension->Type === "StructuredSnippetAdExtension")
                {
                    CampaignManagementHelper::OutputStructuredSnippetAdExtension($extension);
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

    static function OutputCampaign($campaign)
    {
        if (!empty($campaign))
        {
            CampaignManagementHelper::OutputBiddingScheme($campaign->BiddingScheme);
            printf("BudgetId: %s\n", isset($campaign->BudgetId) ? $campaign->BudgetId : "");
            printf("BudgetType: %s\n", $campaign->BudgetType);
            printf("CampaignType: %s\n", $campaign->CampaignType);
            printf("DailyBudget: %s\n", $campaign->DailyBudget);
            printf("Description: %s\n", $campaign->Description);
            print("ForwardCompatibilityMap: ");
            if (isset($campaign->ForwardCompatibilityMap) && isset($campaign->ForwardCompatibilityMap->KeyValuePairOfstringstring))
            {
                foreach ($campaign->ForwardCompatibilityMap->KeyValuePairOfstringstring as $pair)
                {
                    printf("Key: %s\n", $pair->Key);
                    printf("Value: %s\n", $pair->Value);
                }
            }
            printf("Id: %s\n", $campaign->Id);
            printf("Name: %s\n", $campaign->Name);
            print("Settings:\n");
            if (isset($campaign->Settings))
            {
                foreach ($campaign->Settings->Setting as $setting)
                {
                    if ($setting->Type == "Shopping")
                    {
                        print("ShoppingSetting:\n");
                        printf("Priority: %s\n", $setting->Priority);
                        printf("SalesCountryCode: %s\n", $setting->SalesCountryCode);
                        printf("StoreId: %s\n", $setting->StoreId);
                    }
                }
            }
            printf("Status: %s\n", $campaign->Status);
            printf("TrackingUrlTemplate: %s\n", $campaign->TrackingUrlTemplate);
            print("UrlCustomParameters:\n");
            if ($campaign->UrlCustomParameters != null)
            {
                CampaignManagementHelper::OutputUrlCustomParameters($campaign->UrlCustomParameters);
            }
            printf("TimeZone: %s\n\n", $campaign->TimeZone);
        }
    }

    static function OutputBiddingScheme($biddingScheme)
    {
        if (!empty($biddingScheme) && isset($biddingScheme->Type))
        {
            printf("BiddingScheme Type: %s\n", $biddingScheme->Type);
        }
    }

    static function OutputCampaignCriterions($criterions)
    {
        if(count((array)$criterions) == 0)
        {
            return;
        }

        foreach ($criterions as $criterion)
        {
            if (empty($criterion))
            {
                print("Criterion is null or invalid.\n");
            }
            else
            {
                $criterion = CampaignManagementHelper::StripEncoding($criterion);

                if ($criterion->Type === "BiddableCampaignCriterion")
                {
                    CampaignManagementHelper::OutputBiddableCampaignCriterion($criterion);
                    print("\n");
                }
                else if ($criterion->Type === "NegativeCampaignCriterion")
                {
                    CampaignManagementHelper::OutputNegativeCampaignCriterion($criterion);
                    print("\n");                    
                }
                else
                {
                    print("Unknown campaign criterion type");
                }
            }
        }
    }

    static function OutputCampaignCriterion($criterion)
    {
        if ($criterion != null)
        {
            $criterion = CampaignManagementHelper::StripEncoding($criterion);
            printf("CampaignCriterion Type: %s\n", $criterion->Type);
            printf("CampaignId: %s\n", $criterion->CampaignId);
            CampaignManagementHelper::OutputCriterion($criterion->Criterion);
            printf("Id: %s\n", $criterion->Id);
            printf("Status: %s\n", $criterion->Status);
        }
    }

    static function OutputBiddableCampaignCriterion($criterion)
    {
        if ($criterion != null)
        {
            $criterion = CampaignManagementHelper::StripEncoding($criterion);

            // Output inherited properties of the CampaignCriterion base class.
            CampaignManagementHelper::OutputCampaignCriterion($criterion);

            // Output properties that are specific to the BiddableCampaignCriterion
            CampaignManagementHelper::OutputCriterionBid($criterion->CriterionBid);
        }
    }

    static function OutputNegativeCampaignCriterion($criterion)
    {
        if ($criterion != null)
        {
            $criterion = CampaignManagementHelper::StripEncoding($criterion);

            // Output inherited properties of the CampaignCriterion base class.
            CampaignManagementHelper::OutputCampaignCriterion($criterion);

            // There aren't any properties that are specific to the NegativeCampaignCriterion
        }
    }

    static function OutputAdGroupCriterions($criterions)
    {
        if(count((array)$criterions) == 0)
        {
            return;
        }

        foreach ($criterions as $criterion)
        {
            if (empty($criterion))
            {
                print("Criterion is null or invalid.\n");
            }
            else
            {
                $criterion = CampaignManagementHelper::StripEncoding($criterion);
                
                if ($criterion->Type === "BiddableAdGroupCriterion")
                {
                    CampaignManagementHelper::OutputBiddableAdGroupCriterion($criterion);
                    print("\n");
                }
                else if ($criterion->Type === "NegativeAdGroupCriterion")
                {
                    CampaignManagementHelper::OutputNegativeAdGroupCriterion($criterion);
                    print("\n");                    
                }
                else
                {
                    print("Unknown ad group criterion type");
                }
            }
        }
    }

    static function OutputAdGroupCriterion($criterion)
    {
        if ($criterion != null)
        {
            $criterion = CampaignManagementHelper::StripEncoding($criterion);
            printf("AdGroupCriterion Type: %s\n", $criterion->Type);
            printf("AdGroupId: %s\n", $criterion->AdGroupId);
            CampaignManagementHelper::OutputCriterion($criterion->Criterion);
            printf("Id: %s\n", $criterion->Id);
            printf("Status: %s\n", $criterion->Status);
        }
    }

    static function OutputBiddableAdGroupCriterion($criterion)
    {
        if ($criterion != null)
        {
            $criterion = CampaignManagementHelper::StripEncoding($criterion);

            // Output inherited properties of the AdGroupCriterion base class.
            CampaignManagementHelper::OutputAdGroupCriterion($criterion);

            // Output properties that are specific to the BiddableAdGroupCriterion
            CampaignManagementHelper::OutputCriterionBid($criterion->CriterionBid);
                    
            printf("DestinationUrl: %s\n", $criterion->DestinationUrl);
            printf("EditorialStatus: %s\n", $criterion->EditorialStatus);
            print("FinalMobileUrls: \n");
            if ($criterion->FinalMobileUrls != null)
            {
                foreach ($criterion->FinalMobileUrls as $finalMobileUrl)
                {
                    print("\t" . $finalMobileUrl . "\n");
                }
            }
            print("FinalUrls: \n");
            if ($criterion->FinalUrls != null)
            {
                foreach ($criterion->FinalUrls as $finalUrl)
                {
                    print("\t" . $finalUrl . "\n");
                }
            }
            print("TrackingUrlTemplate: " . $criterion->TrackingUrlTemplate . "\n");
            print("UrlCustomParameters: \n");
            if ($criterion->UrlCustomParameters != null)
            {
                CampaignManagementHelper::OutputUrlCustomParameters($criterion->UrlCustomParameters);
            }
        }
    }

    static function OutputUrlCustomParameters($urlCustomParameters)
    {
        if (isset($urlCustomParameters->Parameters) && isset($urlCustomParameters->Parameters->CustomParameter))
        {
            foreach ($urlCustomParameters->Parameters->CustomParameter as $customParameter)
            {
                print("\tKey: " . $customParameter->Key . "\n");
                print("\tValue: " . $customParameter->Value . "\n");
            }
        }
    }

    static function OutputNegativeAdGroupCriterion($criterion)
    {
        if ($criterion != null)
        {
            $criterion = CampaignManagementHelper::StripEncoding($criterion);

            // Output inherited properties of the AdGroupCriterion base class.
            CampaignManagementHelper::OutputAdGroupCriterion($criterion);

            // There aren't any properties that are specific to the NegativeAdGroupCriterion
        }
    }

    static function OutputCriterion($criterion)
    {
        if ($criterion != null)
        {
            $criterion = CampaignManagementHelper::StripEncoding($criterion);

            printf("Type: %s\n", $criterion->Type);
            if ($criterion->Type === "ProductPartition")
            {
                CampaignManagementHelper::OutputProductPartition($criterion);
            }
            else if ($criterion->Type === "ProductScope")
            {
                CampaignManagementHelper::OutputProductScope($criterion);
            }
            else if ($criterion->Type === "Webpage")
            {
                CampaignManagementHelper::OutputWebpage($criterion);
            }
            else if ($criterion->Type === "AudienceCriterion")
            {
                CampaignManagementHelper::OutputAudienceCriterion($criterion);
            }
            else if ($criterion->Type === "AgeCriterion")
            {
                CampaignManagementHelper::OutputAgeCriterion($criterion);
            }
            else if ($criterion->Type === "DayTimeCriterion")
            {
                CampaignManagementHelper::OutputDayTimeCriterion($criterion);
            }
            else if ($criterion->Type === "DeviceCriterion")
            {
                CampaignManagementHelper::OutputDeviceCriterion($criterion);
            }
            else if ($criterion->Type === "GenderCriterion")
            {
                CampaignManagementHelper::OutputGenderCriterion($criterion);
            }
            else if ($criterion->Type === "LocationCriterion")
            {
                CampaignManagementHelper::OutputLocationCriterion($criterion);
            }
            else if ($criterion->Type === "LocationIntentCriterion")
            {
                CampaignManagementHelper::OutputLocationIntentCriterion($criterion);
            }
            else if ($criterion->Type === "RadiusCriterion")
            {
                CampaignManagementHelper::OutputRadiusCriterion($criterion);
            }
        }
    }

    static function OutputCriterionBid($criterionBid)
    {
        if ($criterionBid != null)
        {
            $criterionBid = CampaignManagementHelper::StripEncoding($criterionBid);

            if ($criterionBid->Type === "FixedBid")
            {
                CampaignManagementHelper::OutputFixedBid($criterionBid);
            }
            else if ($criterionBid->Type === "BidMultiplier")
            {
                CampaignManagementHelper::OutputBidMultiplier($criterionBid);
            }
        }
    }

    static function OutputFixedBid($criterionBid)
    {
        if ($criterionBid != null)
        {
            printf("Fixed Bid Amount: %s\n", $criterionBid->Amount);
        }
    }

    static function OutputBidMultiplier($criterionBid)
    {
        if ($criterionBid != null)
        {
            printf("Bid Multiplier: %s\n", $criterionBid->Multiplier);
        }
    }

    static function OutputProductPartition($criterion)
    {
        if ($criterion != null)
        {
            printf("ParentCriterionId: %s\n", $criterion->ParentCriterionId);
            printf("PartitionType: %s\n", $criterion->PartitionType);
            if(isset($criterion->Condition))
            {
                print("Condition:\n");
                printf("Operand: %s\n", $criterion->Condition->Operand);
                printf("Attribute: %s\n", isset($criterion->Condition->Attribute) ?? null);
            }
        }
    }

    static function OutputProductScope($criterion)
    {
        if ($criterion != null and isset($criterion->Conditions))
        {
            print("Product Conditions:\n");
            if (isset($criterion->Conditions->ProductCondition))
            {
                foreach ($criterion->Conditions->ProductCondition as $productCondition)
                {
                    printf("Operand: %s\n", $productCondition->Operand);
                    printf("Attribute: %s\n", $productCondition->Attribute);
                }
            }
        }
    }

    static function OutputWebpage($criterion)
    {
        if ($criterion != null and isset($criterion->Parameter->Conditions))
        {
            printf("Webpage CriterionName: %s\n", $criterion->Parameter->CriterionName);

            print("Webpage Conditions:\n");
            if (isset($criterion->Parameter->Conditions->WebpageCondition))
            {
                foreach ($criterion->Parameter->Conditions->WebpageCondition as $webpageCondition)
                {
                    printf("Operand: %s\n", $webpageCondition->Operand);
                    printf("Attribute: %s\n", isset($webpageCondition->Attribute) ?? null);
                }
            }
        }
    }

    static function OutputAudienceCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("AudienceId: %s\n", $criterion->AudienceId);
            printf("AudienceType: %s\n", $criterion->AudienceType);
        }
    }

    static function OutputAgeCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("AgeRange: %s\n", $criterion->AgeRange);
        }
    }

    static function OutputDayTimeCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("Day: %s\n", $criterion->Day);
            printf("FromHour: %s\n", $criterion->FromHour);
            printf("FromMinute: %s\n", $criterion->FromMinute);
            printf("ToHour: %s\n", $criterion->ToHour);
            printf("ToMinute: %s\n", $criterion->ToMinute);
        }
    }

    static function OutputDeviceCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("DeviceName: %s\n", $criterion->DeviceName);
        }
    }

    static function OutputGenderCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("GenderType: %s\n", $criterion->GenderType);
        }
    }

    static function OutputLocationCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("DisplayName: %s\n", $criterion->DisplayName);
            printf("LocationId: %s\n", $criterion->LocationId);
            printf("LocationType: %s\n", $criterion->LocationType);
        }
    }

    static function OutputLocationIntentCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("IntentOption: %s\n", $criterion->IntentOption);
        }
    }

    static function OutputRadiusCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("LatitudeDegrees: %s\n", $criterion->LatitudeDegrees);
            printf("LongitudeDegrees: %s\n", $criterion->LongitudeDegrees);
            printf("Name: %s\n", $criterion->Name);
            printf("Radius: %s\n", $criterion->Radius);
            printf("RadiusUnit: %s\n", $criterion->RadiusUnit);
        }
    }

    
    static function OutputAccountMigrationStatusesInfo($accountMigrationStatusesInfo)
    {
        if (!empty($accountMigrationStatusesInfo))
        {
            printf("AccountId: %s\n", $accountMigrationStatusesInfo->AccountId);
            foreach ($accountMigrationStatusesInfo->MigrationStatusInfo as $migrationStatusInfo)
            {
                CampaignManagementHelper::OutputMigrationStatusInfo($migrationStatusInfo[0]);
            }
        }
    }

    static function OutputMigrationStatusInfo($migrationStatusInfo)
    {
        if (!empty($migrationStatusInfo))
        {
            printf("MigrationType: %s\n", $migrationStatusInfo->MigrationType);
            printf("StartTimeInUtc: %s\n", $migrationStatusInfo->StartTimeInUtc);
            printf("Status: %s\n\n", $migrationStatusInfo->Status);
        }
    }

    static function OutputAdExtension($extension)
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
                CampaignManagementHelper::OutputSchedule($extension->Scheduling);
            }
            printf("Status: %s\n", $extension->Status);
            printf("Version: %s\n", $extension->Version);
        }
    }

    static function OutputSchedule($schedule)
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

    static function OutputAppAdExtension($extension)
    {
        if (!empty($extension))
        {
            // Output inherited properties of the AdExtension base class.
            CampaignManagementHelper::OutputAdExtension($extension);

            // Output properties that are specific to the AppAdExtension
            printf("AppPlatform: %s\n", $extension->AppPlatform);
            printf("AppStoreId: %s\n", $extension->AppStoreId);
            printf("DisplayText: %s\n", $extension->DisplayText);
            printf("DestinationUrl: %s\n", $extension->DestinationUrl);
            print("\n");
        }
    }

    static function OutputCallAdExtension($extension)
    {
        if (!empty($extension))
        {
            // Output inherited properties of the AdExtension base class.
            CampaignManagementHelper::OutputAdExtension($extension);

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

    static function OutputCalloutAdExtension($extension)
    {
        if (!empty($extension))
        {
            // Output inherited properties of the AdExtension base class.
            CampaignManagementHelper::OutputAdExtension($extension);

            // Output properties that are specific to the CalloutAdExtension
            printf("Text: %s\n", $extension->Text);
            print("\n");
        }
    }

    static function OutputImageAdExtension($extension)
    {
        if (!empty($extension))
        {
            // Output inherited properties of the AdExtension base class.
            CampaignManagementHelper::OutputAdExtension($extension);

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
            if ($extension->UrlCustomParameters != null)
            {
                CampaignManagementHelper::OutputUrlCustomParameters($extension->UrlCustomParameters);
            }
            print("\n");
        }
    }

    static function OutputLocationAdExtension($extension)
    {
        if (!empty($extension))
        {
            // Output inherited properties of the AdExtension base class.
            CampaignManagementHelper::OutputAdExtension($extension);

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

    static function OutputReviewAdExtension($extension)
    {
        if (!empty($extension))
        {
            // Output inherited properties of the AdExtension base class.
            CampaignManagementHelper::OutputAdExtension($extension);

            // Output properties that are specific to the ReviewAdExtension
            printf("IsExact: %s\n", $extension->IsExact);
            printf("Source: %s\n", $extension->Source);
            printf("Text: %s\n", $extension->Text);
            printf("Url: %s\n", $extension->Url);
            print("\n");
        }
    }

    static function OutputSiteLinksAdExtension($extension)
    {
        if (!empty($extension))
        {
            // Output inherited properties of the AdExtension base class.
            CampaignManagementHelper::OutputAdExtension($extension);

            // Output properties that are specific to the SiteLinksAdExtension
            CampaignManagementHelper::OutputSiteLinks($extension->SiteLinks);
        }
    }

    static function OutputSiteLinks($siteLinks)
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
                if ($siteLink->UrlCustomParameters != null)
                {
                    CampaignManagementHelper::OutputUrlCustomParameters($siteLink->UrlCustomParameters);
                }
                print("\n");
            }
        }
    }

    static function OutputSitelink2AdExtension($extension)
    {
        if (!empty($extension))
        {
            // Output inherited properties of the AdExtension base class.
            CampaignManagementHelper::OutputAdExtension($extension);

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
            if ($extension->UrlCustomParameters != null)
            {
                CampaignManagementHelper::OutputUrlCustomParameters($extension->UrlCustomParameters);
            }
            print("\n");
        }
    }

    static function OutputStructuredSnippetAdExtension($extension)
    {
        if (!empty($extension))
        {
            // Output inherited properties of the AdExtension base class.
            CampaignManagementHelper::OutputAdExtension($extension);

            // Output properties that are specific to the StructuredSnippetAdExtension
            printf("Header: %s\n", $extension->Header);
            printf("Values: %s\n", join("; ", $extension->Values->string));
            print("\n");
        }
    }


    /// Set the read-only properties of an ad extension to null. This operation can be useful between calls to
    /// GetAdExtensionsByIds and UpdateAdExtensions. The update operation would fail if you send certain read-only
    /// fields.
    static function SetReadOnlyAdExtensionElementsToNull($extension)
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

    static function StripEncoding($object)
    {
        if(isset($object->enc_value))
        {
            return $object->enc_value;
        }
        else
        {
            return $object;
        }
    }
}

?>
