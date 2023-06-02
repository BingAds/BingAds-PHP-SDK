<?php

namespace Microsoft\BingAds\Samples\V13;

require_once __DIR__ . "/../vendor/autoload.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V13\CampaignManagement classes that will be used.
use Microsoft\BingAds\V13\CampaignManagement\AddAdExtensionsRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddAdGroupCriterionsRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddAdGroupsRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddAdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddAudiencesRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddBidStrategiesRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddBudgetsRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddCampaignCriterionsRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddCampaignsRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddConversionGoalsRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddExperimentsRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddImportJobsRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddKeywordsRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddLabelsRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddListItemsToSharedListRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddMediaRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddNegativeKeywordsToEntitiesRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddSharedEntityRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddUetTagsRequest;
use Microsoft\BingAds\V13\CampaignManagement\AddVideosRequest;
use Microsoft\BingAds\V13\CampaignManagement\AppealEditorialRejectionsRequest;
use Microsoft\BingAds\V13\CampaignManagement\ApplyOfflineConversionAdjustmentsRequest;
use Microsoft\BingAds\V13\CampaignManagement\ApplyOfflineConversionsRequest;
use Microsoft\BingAds\V13\CampaignManagement\ApplyProductPartitionActionsRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteAdExtensionsRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteAdExtensionsAssociationsRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteAdGroupCriterionsRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteAdGroupsRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteAdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteAudiencesRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteBidStrategiesRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteBudgetsRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteCampaignCriterionsRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteCampaignsRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteExperimentsRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteImportJobsRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteKeywordsRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteLabelAssociationsRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteLabelsRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteListItemsFromSharedListRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteMediaRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteNegativeKeywordsFromEntitiesRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteSharedEntitiesRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteSharedEntityAssociationsRequest;
use Microsoft\BingAds\V13\CampaignManagement\DeleteVideosRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetAccountMigrationStatusesRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetAccountPropertiesRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetAdExtensionIdsByAccountIdRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetAdExtensionsAssociationsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetAdExtensionsByIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetAdExtensionsEditorialReasonsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetAdGroupCriterionsByIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetAdGroupsByCampaignIdRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetAdGroupsByIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetAdsByAdGroupIdRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetAdsByEditorialStatusRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetAdsByIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetAudiencesByIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetBidStrategiesByIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetBMCStoresByCustomerIdRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetBSCCountriesRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetBudgetsByIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetCampaignCriterionsByIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetCampaignIdsByBidStrategyIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetCampaignIdsByBudgetIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetCampaignsByAccountIdRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetCampaignsByIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetConversionGoalsByIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetConversionGoalsByTagIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetEditorialReasonsByIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetExperimentsByIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetFileImportUploadUrlRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetGeoLocationsFileUrlRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetImportEntityIdsMappingRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetImportJobsByIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetImportResultsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetKeywordsByAdGroupIdRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetKeywordsByEditorialStatusRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetKeywordsByIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetLabelAssociationsByEntityIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetLabelAssociationsByLabelIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetLabelsByIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetListItemsBySharedListRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetMediaAssociationsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetMediaMetaDataByAccountIdRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetMediaMetaDataByIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetNegativeKeywordsByEntityIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetNegativeSitesByAdGroupIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetNegativeSitesByCampaignIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetProfileDataFileUrlRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetSharedEntitiesRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetSharedEntitiesByAccountIdRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetSharedEntityAssociationsByEntityIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetSharedEntityAssociationsBySharedEntityIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetUetTagsByIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\GetVideosByIdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\SearchCompaniesRequest;
use Microsoft\BingAds\V13\CampaignManagement\SetAccountPropertiesRequest;
use Microsoft\BingAds\V13\CampaignManagement\SetAdExtensionsAssociationsRequest;
use Microsoft\BingAds\V13\CampaignManagement\SetLabelAssociationsRequest;
use Microsoft\BingAds\V13\CampaignManagement\SetNegativeSitesToAdGroupsRequest;
use Microsoft\BingAds\V13\CampaignManagement\SetNegativeSitesToCampaignsRequest;
use Microsoft\BingAds\V13\CampaignManagement\SetSharedEntityAssociationsRequest;
use Microsoft\BingAds\V13\CampaignManagement\UpdateAdExtensionsRequest;
use Microsoft\BingAds\V13\CampaignManagement\UpdateAdGroupCriterionsRequest;
use Microsoft\BingAds\V13\CampaignManagement\UpdateAdGroupsRequest;
use Microsoft\BingAds\V13\CampaignManagement\UpdateAdsRequest;
use Microsoft\BingAds\V13\CampaignManagement\UpdateAudiencesRequest;
use Microsoft\BingAds\V13\CampaignManagement\UpdateBidStrategiesRequest;
use Microsoft\BingAds\V13\CampaignManagement\UpdateBudgetsRequest;
use Microsoft\BingAds\V13\CampaignManagement\UpdateCampaignCriterionsRequest;
use Microsoft\BingAds\V13\CampaignManagement\UpdateCampaignsRequest;
use Microsoft\BingAds\V13\CampaignManagement\UpdateConversionGoalsRequest;
use Microsoft\BingAds\V13\CampaignManagement\UpdateExperimentsRequest;
use Microsoft\BingAds\V13\CampaignManagement\UpdateImportJobsRequest;
use Microsoft\BingAds\V13\CampaignManagement\UpdateKeywordsRequest;
use Microsoft\BingAds\V13\CampaignManagement\UpdateLabelsRequest;
use Microsoft\BingAds\V13\CampaignManagement\UpdateSharedEntitiesRequest;
use Microsoft\BingAds\V13\CampaignManagement\UpdateUetTagsRequest;
use Microsoft\BingAds\V13\CampaignManagement\UpdateVideosRequest;

final class CampaignManagementExampleHelper {
    static function AddAdExtensions(
        $accountId,
        $adExtensions)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddAdExtensionsRequest();

        $request->AccountId = $accountId;
        $request->AdExtensions = $adExtensions;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddAdExtensions($request);
    }
    static function AddAdGroupCriterions(
        $adGroupCriterions,
        $criterionType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddAdGroupCriterionsRequest();

        $request->AdGroupCriterions = $adGroupCriterions;
        $request->CriterionType = $criterionType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddAdGroupCriterions($request);
    }
    static function AddAdGroups(
        $campaignId,
        $adGroups,
        $returnInheritedBidStrategyTypes)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddAdGroupsRequest();

        $request->CampaignId = $campaignId;
        $request->AdGroups = $adGroups;
        $request->ReturnInheritedBidStrategyTypes = $returnInheritedBidStrategyTypes;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddAdGroups($request);
    }
    static function AddAds(
        $adGroupId,
        $ads)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddAdsRequest();

        $request->AdGroupId = $adGroupId;
        $request->Ads = $ads;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddAds($request);
    }
    static function AddAudiences(
        $audiences)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddAudiencesRequest();

        $request->Audiences = $audiences;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddAudiences($request);
    }
    static function AddBidStrategies(
        $bidStrategies)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddBidStrategiesRequest();

        $request->BidStrategies = $bidStrategies;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddBidStrategies($request);
    }
    static function AddBudgets(
        $budgets)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddBudgetsRequest();

        $request->Budgets = $budgets;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddBudgets($request);
    }
    static function AddCampaignCriterions(
        $campaignCriterions,
        $criterionType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddCampaignCriterionsRequest();

        $request->CampaignCriterions = $campaignCriterions;
        $request->CriterionType = $criterionType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddCampaignCriterions($request);
    }
    static function AddCampaigns(
        $accountId,
        $campaigns)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddCampaignsRequest();

        $request->AccountId = $accountId;
        $request->Campaigns = $campaigns;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddCampaigns($request);
    }
    static function AddConversionGoals(
        $conversionGoals)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddConversionGoalsRequest();

        $request->ConversionGoals = $conversionGoals;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddConversionGoals($request);
    }
    static function AddExperiments(
        $experiments)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddExperimentsRequest();

        $request->Experiments = $experiments;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddExperiments($request);
    }
    static function AddImportJobs(
        $importJobs)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddImportJobsRequest();

        $request->ImportJobs = $importJobs;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddImportJobs($request);
    }
    static function AddKeywords(
        $adGroupId,
        $keywords,
        $returnInheritedBidStrategyTypes)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddKeywordsRequest();

        $request->AdGroupId = $adGroupId;
        $request->Keywords = $keywords;
        $request->ReturnInheritedBidStrategyTypes = $returnInheritedBidStrategyTypes;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddKeywords($request);
    }
    static function AddLabels(
        $labels)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddLabelsRequest();

        $request->Labels = $labels;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddLabels($request);
    }
    static function AddListItemsToSharedList(
        $listItems,
        $sharedList,
        $sharedEntityScope)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddListItemsToSharedListRequest();

        $request->ListItems = $listItems;
        $request->SharedList = $sharedList;
        $request->SharedEntityScope = $sharedEntityScope;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddListItemsToSharedList($request);
    }
    static function AddMedia(
        $accountId,
        $media)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddMediaRequest();

        $request->AccountId = $accountId;
        $request->Media = $media;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddMedia($request);
    }
    static function AddNegativeKeywordsToEntities(
        $entityNegativeKeywords)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddNegativeKeywordsToEntitiesRequest();

        $request->EntityNegativeKeywords = $entityNegativeKeywords;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddNegativeKeywordsToEntities($request);
    }
    static function AddSharedEntity(
        $sharedEntity,
        $listItems,
        $sharedEntityScope)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddSharedEntityRequest();

        $request->SharedEntity = $sharedEntity;
        $request->ListItems = $listItems;
        $request->SharedEntityScope = $sharedEntityScope;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddSharedEntity($request);
    }
    static function AddUetTags(
        $uetTags)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddUetTagsRequest();

        $request->UetTags = $uetTags;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddUetTags($request);
    }
    static function AddVideos(
        $videos)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddVideosRequest();

        $request->Videos = $videos;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AddVideos($request);
    }
    static function AppealEditorialRejections(
        $entityIdToParentIdAssociations,
        $entityType,
        $justificationText)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AppealEditorialRejectionsRequest();

        $request->EntityIdToParentIdAssociations = $entityIdToParentIdAssociations;
        $request->EntityType = $entityType;
        $request->JustificationText = $justificationText;

        return $GLOBALS['CampaignManagementProxy']->GetService()->AppealEditorialRejections($request);
    }
    static function ApplyOfflineConversionAdjustments(
        $offlineConversionAdjustments)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new ApplyOfflineConversionAdjustmentsRequest();

        $request->OfflineConversionAdjustments = $offlineConversionAdjustments;

        return $GLOBALS['CampaignManagementProxy']->GetService()->ApplyOfflineConversionAdjustments($request);
    }
    static function ApplyOfflineConversions(
        $offlineConversions)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new ApplyOfflineConversionsRequest();

        $request->OfflineConversions = $offlineConversions;

        return $GLOBALS['CampaignManagementProxy']->GetService()->ApplyOfflineConversions($request);
    }
    static function ApplyProductPartitionActions(
        $criterionActions)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new ApplyProductPartitionActionsRequest();

        $request->CriterionActions = $criterionActions;

        return $GLOBALS['CampaignManagementProxy']->GetService()->ApplyProductPartitionActions($request);
    }
    static function DeleteAdExtensions(
        $accountId,
        $adExtensionIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteAdExtensionsRequest();

        $request->AccountId = $accountId;
        $request->AdExtensionIds = $adExtensionIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteAdExtensions($request);
    }
    static function DeleteAdExtensionsAssociations(
        $accountId,
        $adExtensionIdToEntityIdAssociations,
        $associationType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteAdExtensionsAssociationsRequest();

        $request->AccountId = $accountId;
        $request->AdExtensionIdToEntityIdAssociations = $adExtensionIdToEntityIdAssociations;
        $request->AssociationType = $associationType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteAdExtensionsAssociations($request);
    }
    static function DeleteAdGroupCriterions(
        $adGroupCriterionIds,
        $adGroupId,
        $criterionType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteAdGroupCriterionsRequest();

        $request->AdGroupCriterionIds = $adGroupCriterionIds;
        $request->AdGroupId = $adGroupId;
        $request->CriterionType = $criterionType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteAdGroupCriterions($request);
    }
    static function DeleteAdGroups(
        $campaignId,
        $adGroupIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteAdGroupsRequest();

        $request->CampaignId = $campaignId;
        $request->AdGroupIds = $adGroupIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteAdGroups($request);
    }
    static function DeleteAds(
        $adGroupId,
        $adIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteAdsRequest();

        $request->AdGroupId = $adGroupId;
        $request->AdIds = $adIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteAds($request);
    }
    static function DeleteAudiences(
        $audienceIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteAudiencesRequest();

        $request->AudienceIds = $audienceIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteAudiences($request);
    }
    static function DeleteBidStrategies(
        $bidStrategyIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteBidStrategiesRequest();

        $request->BidStrategyIds = $bidStrategyIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteBidStrategies($request);
    }
    static function DeleteBudgets(
        $budgetIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteBudgetsRequest();

        $request->BudgetIds = $budgetIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteBudgets($request);
    }
    static function DeleteCampaignCriterions(
        $campaignCriterionIds,
        $campaignId,
        $criterionType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteCampaignCriterionsRequest();

        $request->CampaignCriterionIds = $campaignCriterionIds;
        $request->CampaignId = $campaignId;
        $request->CriterionType = $criterionType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteCampaignCriterions($request);
    }
    static function DeleteCampaigns(
        $accountId,
        $campaignIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteCampaignsRequest();

        $request->AccountId = $accountId;
        $request->CampaignIds = $campaignIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteCampaigns($request);
    }
    static function DeleteExperiments(
        $experimentIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteExperimentsRequest();

        $request->ExperimentIds = $experimentIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteExperiments($request);
    }
    static function DeleteImportJobs(
        $importJobIds,
        $importType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteImportJobsRequest();

        $request->ImportJobIds = $importJobIds;
        $request->ImportType = $importType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteImportJobs($request);
    }
    static function DeleteKeywords(
        $adGroupId,
        $keywordIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteKeywordsRequest();

        $request->AdGroupId = $adGroupId;
        $request->KeywordIds = $keywordIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteKeywords($request);
    }
    static function DeleteLabelAssociations(
        $entityType,
        $labelAssociations)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteLabelAssociationsRequest();

        $request->EntityType = $entityType;
        $request->LabelAssociations = $labelAssociations;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteLabelAssociations($request);
    }
    static function DeleteLabels(
        $labelIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteLabelsRequest();

        $request->LabelIds = $labelIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteLabels($request);
    }
    static function DeleteListItemsFromSharedList(
        $listItemIds,
        $sharedList,
        $sharedEntityScope)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteListItemsFromSharedListRequest();

        $request->ListItemIds = $listItemIds;
        $request->SharedList = $sharedList;
        $request->SharedEntityScope = $sharedEntityScope;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteListItemsFromSharedList($request);
    }
    static function DeleteMedia(
        $accountId,
        $mediaIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteMediaRequest();

        $request->AccountId = $accountId;
        $request->MediaIds = $mediaIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteMedia($request);
    }
    static function DeleteNegativeKeywordsFromEntities(
        $entityNegativeKeywords)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteNegativeKeywordsFromEntitiesRequest();

        $request->EntityNegativeKeywords = $entityNegativeKeywords;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteNegativeKeywordsFromEntities($request);
    }
    static function DeleteSharedEntities(
        $sharedEntities,
        $sharedEntityScope)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteSharedEntitiesRequest();

        $request->SharedEntities = $sharedEntities;
        $request->SharedEntityScope = $sharedEntityScope;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteSharedEntities($request);
    }
    static function DeleteSharedEntityAssociations(
        $associations,
        $sharedEntityScope)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteSharedEntityAssociationsRequest();

        $request->Associations = $associations;
        $request->SharedEntityScope = $sharedEntityScope;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteSharedEntityAssociations($request);
    }
    static function DeleteVideos(
        $videoIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteVideosRequest();

        $request->VideoIds = $videoIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteVideos($request);
    }
    static function GetAccountMigrationStatuses(
        $accountIds,
        $migrationType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAccountMigrationStatusesRequest();

        $request->AccountIds = $accountIds;
        $request->MigrationType = $migrationType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetAccountMigrationStatuses($request);
    }
    static function GetAccountProperties(
        $accountPropertyNames)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAccountPropertiesRequest();

        $request->AccountPropertyNames = $accountPropertyNames;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetAccountProperties($request);
    }
    static function GetAdExtensionIdsByAccountId(
        $accountId,
        $adExtensionType,
        $associationType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAdExtensionIdsByAccountIdRequest();

        $request->AccountId = $accountId;
        $request->AdExtensionType = $adExtensionType;
        $request->AssociationType = $associationType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetAdExtensionIdsByAccountId($request);
    }
    static function GetAdExtensionsAssociations(
        $accountId,
        $adExtensionType,
        $associationType,
        $entityIds,
        $returnAdditionalFields)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAdExtensionsAssociationsRequest();

        $request->AccountId = $accountId;
        $request->AdExtensionType = $adExtensionType;
        $request->AssociationType = $associationType;
        $request->EntityIds = $entityIds;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetAdExtensionsAssociations($request);
    }
    static function GetAdExtensionsByIds(
        $accountId,
        $adExtensionIds,
        $adExtensionType,
        $returnAdditionalFields)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAdExtensionsByIdsRequest();

        $request->AccountId = $accountId;
        $request->AdExtensionIds = $adExtensionIds;
        $request->AdExtensionType = $adExtensionType;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetAdExtensionsByIds($request);
    }
    static function GetAdExtensionsEditorialReasons(
        $accountId,
        $adExtensionIdToEntityIdAssociations,
        $associationType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAdExtensionsEditorialReasonsRequest();

        $request->AccountId = $accountId;
        $request->AdExtensionIdToEntityIdAssociations = $adExtensionIdToEntityIdAssociations;
        $request->AssociationType = $associationType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetAdExtensionsEditorialReasons($request);
    }
    static function GetAdGroupCriterionsByIds(
        $adGroupCriterionIds,
        $adGroupId,
        $criterionType,
        $returnAdditionalFields)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAdGroupCriterionsByIdsRequest();

        $request->AdGroupCriterionIds = $adGroupCriterionIds;
        $request->AdGroupId = $adGroupId;
        $request->CriterionType = $criterionType;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetAdGroupCriterionsByIds($request);
    }
    static function GetAdGroupsByCampaignId(
        $campaignId,
        $returnAdditionalFields)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAdGroupsByCampaignIdRequest();

        $request->CampaignId = $campaignId;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetAdGroupsByCampaignId($request);
    }
    static function GetAdGroupsByIds(
        $campaignId,
        $adGroupIds,
        $returnAdditionalFields)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAdGroupsByIdsRequest();

        $request->CampaignId = $campaignId;
        $request->AdGroupIds = $adGroupIds;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetAdGroupsByIds($request);
    }
    static function GetAdsByAdGroupId(
        $adGroupId,
        $adTypes,
        $returnAdditionalFields)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAdsByAdGroupIdRequest();

        $request->AdGroupId = $adGroupId;
        $request->AdTypes = $adTypes;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetAdsByAdGroupId($request);
    }
    static function GetAdsByEditorialStatus(
        $adGroupId,
        $editorialStatus,
        $adTypes,
        $returnAdditionalFields)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAdsByEditorialStatusRequest();

        $request->AdGroupId = $adGroupId;
        $request->EditorialStatus = $editorialStatus;
        $request->AdTypes = $adTypes;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetAdsByEditorialStatus($request);
    }
    static function GetAdsByIds(
        $adGroupId,
        $adIds,
        $adTypes,
        $returnAdditionalFields)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAdsByIdsRequest();

        $request->AdGroupId = $adGroupId;
        $request->AdIds = $adIds;
        $request->AdTypes = $adTypes;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetAdsByIds($request);
    }
    static function GetAudiencesByIds(
        $audienceIds,
        $type,
        $returnAdditionalFields)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAudiencesByIdsRequest();

        $request->AudienceIds = $audienceIds;
        $request->Type = $type;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetAudiencesByIds($request);
    }
    static function GetBidStrategiesByIds(
        $bidStrategyIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetBidStrategiesByIdsRequest();

        $request->BidStrategyIds = $bidStrategyIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetBidStrategiesByIds($request);
    }
    static function GetBMCStoresByCustomerId(
        $returnAdditionalFields)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetBMCStoresByCustomerIdRequest();

        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetBMCStoresByCustomerId($request);
    }
    static function GetBSCCountries()
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetBSCCountriesRequest();


        return $GLOBALS['CampaignManagementProxy']->GetService()->GetBSCCountries($request);
    }
    static function GetBudgetsByIds(
        $budgetIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetBudgetsByIdsRequest();

        $request->BudgetIds = $budgetIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetBudgetsByIds($request);
    }
    static function GetCampaignCriterionsByIds(
        $campaignCriterionIds,
        $campaignId,
        $criterionType,
        $returnAdditionalFields)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetCampaignCriterionsByIdsRequest();

        $request->CampaignCriterionIds = $campaignCriterionIds;
        $request->CampaignId = $campaignId;
        $request->CriterionType = $criterionType;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetCampaignCriterionsByIds($request);
    }
    static function GetCampaignIdsByBidStrategyIds(
        $bidStrategyIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetCampaignIdsByBidStrategyIdsRequest();

        $request->BidStrategyIds = $bidStrategyIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetCampaignIdsByBidStrategyIds($request);
    }
    static function GetCampaignIdsByBudgetIds(
        $budgetIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetCampaignIdsByBudgetIdsRequest();

        $request->BudgetIds = $budgetIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetCampaignIdsByBudgetIds($request);
    }
    static function GetCampaignsByAccountId(
        $accountId,
        $campaignType,
        $returnAdditionalFields)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetCampaignsByAccountIdRequest();

        $request->AccountId = $accountId;
        $request->CampaignType = $campaignType;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetCampaignsByAccountId($request);
    }
    static function GetCampaignsByIds(
        $accountId,
        $campaignIds,
        $campaignType,
        $returnAdditionalFields)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetCampaignsByIdsRequest();

        $request->AccountId = $accountId;
        $request->CampaignIds = $campaignIds;
        $request->CampaignType = $campaignType;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetCampaignsByIds($request);
    }
    static function GetConversionGoalsByIds(
        $conversionGoalIds,
        $conversionGoalTypes,
        $returnAdditionalFields)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetConversionGoalsByIdsRequest();

        $request->ConversionGoalIds = $conversionGoalIds;
        $request->ConversionGoalTypes = $conversionGoalTypes;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetConversionGoalsByIds($request);
    }
    static function GetConversionGoalsByTagIds(
        $tagIds,
        $conversionGoalTypes,
        $returnAdditionalFields)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetConversionGoalsByTagIdsRequest();

        $request->TagIds = $tagIds;
        $request->ConversionGoalTypes = $conversionGoalTypes;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetConversionGoalsByTagIds($request);
    }
    static function GetEditorialReasonsByIds(
        $accountId,
        $entityIdToParentIdAssociations,
        $entityType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetEditorialReasonsByIdsRequest();

        $request->AccountId = $accountId;
        $request->EntityIdToParentIdAssociations = $entityIdToParentIdAssociations;
        $request->EntityType = $entityType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetEditorialReasonsByIds($request);
    }
    static function GetExperimentsByIds(
        $experimentIds,
        $pageInfo)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetExperimentsByIdsRequest();

        $request->ExperimentIds = $experimentIds;
        $request->PageInfo = $pageInfo;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetExperimentsByIds($request);
    }
    static function GetFileImportUploadUrl()
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetFileImportUploadUrlRequest();


        return $GLOBALS['CampaignManagementProxy']->GetService()->GetFileImportUploadUrl($request);
    }
    static function GetGeoLocationsFileUrl(
        $version,
        $languageLocale)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetGeoLocationsFileUrlRequest();

        $request->Version = $version;
        $request->LanguageLocale = $languageLocale;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetGeoLocationsFileUrl($request);
    }
    static function GetImportEntityIdsMapping(
        $importType,
        $sourceEntityIds,
        $importEntityType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetImportEntityIdsMappingRequest();

        $request->ImportType = $importType;
        $request->SourceEntityIds = $sourceEntityIds;
        $request->ImportEntityType = $importEntityType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetImportEntityIdsMapping($request);
    }
    static function GetImportJobsByIds(
        $importJobIds,
        $importType,
        $returnAdditionalFields)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetImportJobsByIdsRequest();

        $request->ImportJobIds = $importJobIds;
        $request->ImportType = $importType;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetImportJobsByIds($request);
    }
    static function GetImportResults(
        $importType,
        $pageInfo,
        $importJobIds,
        $returnAdditionalFields)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetImportResultsRequest();

        $request->ImportType = $importType;
        $request->PageInfo = $pageInfo;
        $request->ImportJobIds = $importJobIds;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetImportResults($request);
    }
    static function GetKeywordsByAdGroupId(
        $adGroupId)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetKeywordsByAdGroupIdRequest();

        $request->AdGroupId = $adGroupId;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetKeywordsByAdGroupId($request);
    }
    static function GetKeywordsByEditorialStatus(
        $adGroupId,
        $editorialStatus)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetKeywordsByEditorialStatusRequest();

        $request->AdGroupId = $adGroupId;
        $request->EditorialStatus = $editorialStatus;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetKeywordsByEditorialStatus($request);
    }
    static function GetKeywordsByIds(
        $adGroupId,
        $keywordIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetKeywordsByIdsRequest();

        $request->AdGroupId = $adGroupId;
        $request->KeywordIds = $keywordIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetKeywordsByIds($request);
    }
    static function GetLabelAssociationsByEntityIds(
        $entityIds,
        $entityType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetLabelAssociationsByEntityIdsRequest();

        $request->EntityIds = $entityIds;
        $request->EntityType = $entityType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetLabelAssociationsByEntityIds($request);
    }
    static function GetLabelAssociationsByLabelIds(
        $entityType,
        $labelIds,
        $pageInfo)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetLabelAssociationsByLabelIdsRequest();

        $request->EntityType = $entityType;
        $request->LabelIds = $labelIds;
        $request->PageInfo = $pageInfo;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetLabelAssociationsByLabelIds($request);
    }
    static function GetLabelsByIds(
        $labelIds,
        $pageInfo)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetLabelsByIdsRequest();

        $request->LabelIds = $labelIds;
        $request->PageInfo = $pageInfo;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetLabelsByIds($request);
    }
    static function GetListItemsBySharedList(
        $sharedList,
        $sharedEntityScope)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetListItemsBySharedListRequest();

        $request->SharedList = $sharedList;
        $request->SharedEntityScope = $sharedEntityScope;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetListItemsBySharedList($request);
    }
    static function GetMediaAssociations(
        $mediaEnabledEntities,
        $mediaIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetMediaAssociationsRequest();

        $request->MediaEnabledEntities = $mediaEnabledEntities;
        $request->MediaIds = $mediaIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetMediaAssociations($request);
    }
    static function GetMediaMetaDataByAccountId(
        $mediaEnabledEntities,
        $pageInfo)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetMediaMetaDataByAccountIdRequest();

        $request->MediaEnabledEntities = $mediaEnabledEntities;
        $request->PageInfo = $pageInfo;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetMediaMetaDataByAccountId($request);
    }
    static function GetMediaMetaDataByIds(
        $mediaIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetMediaMetaDataByIdsRequest();

        $request->MediaIds = $mediaIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetMediaMetaDataByIds($request);
    }
    static function GetNegativeKeywordsByEntityIds(
        $entityIds,
        $entityType,
        $parentEntityId)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetNegativeKeywordsByEntityIdsRequest();

        $request->EntityIds = $entityIds;
        $request->EntityType = $entityType;
        $request->ParentEntityId = $parentEntityId;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetNegativeKeywordsByEntityIds($request);
    }
    static function GetNegativeSitesByAdGroupIds(
        $campaignId,
        $adGroupIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetNegativeSitesByAdGroupIdsRequest();

        $request->CampaignId = $campaignId;
        $request->AdGroupIds = $adGroupIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetNegativeSitesByAdGroupIds($request);
    }
    static function GetNegativeSitesByCampaignIds(
        $accountId,
        $campaignIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetNegativeSitesByCampaignIdsRequest();

        $request->AccountId = $accountId;
        $request->CampaignIds = $campaignIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetNegativeSitesByCampaignIds($request);
    }
    static function GetProfileDataFileUrl(
        $languageLocale,
        $profileType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetProfileDataFileUrlRequest();

        $request->LanguageLocale = $languageLocale;
        $request->ProfileType = $profileType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetProfileDataFileUrl($request);
    }
    static function GetSharedEntities(
        $sharedEntityType,
        $sharedEntityScope)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetSharedEntitiesRequest();

        $request->SharedEntityType = $sharedEntityType;
        $request->SharedEntityScope = $sharedEntityScope;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetSharedEntities($request);
    }
    static function GetSharedEntitiesByAccountId(
        $sharedEntityType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetSharedEntitiesByAccountIdRequest();

        $request->SharedEntityType = $sharedEntityType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetSharedEntitiesByAccountId($request);
    }
    static function GetSharedEntityAssociationsByEntityIds(
        $entityIds,
        $entityType,
        $sharedEntityType,
        $sharedEntityScope)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetSharedEntityAssociationsByEntityIdsRequest();

        $request->EntityIds = $entityIds;
        $request->EntityType = $entityType;
        $request->SharedEntityType = $sharedEntityType;
        $request->SharedEntityScope = $sharedEntityScope;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetSharedEntityAssociationsByEntityIds($request);
    }
    static function GetSharedEntityAssociationsBySharedEntityIds(
        $entityType,
        $sharedEntityIds,
        $sharedEntityType,
        $sharedEntityScope)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetSharedEntityAssociationsBySharedEntityIdsRequest();

        $request->EntityType = $entityType;
        $request->SharedEntityIds = $sharedEntityIds;
        $request->SharedEntityType = $sharedEntityType;
        $request->SharedEntityScope = $sharedEntityScope;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetSharedEntityAssociationsBySharedEntityIds($request);
    }
    static function GetUetTagsByIds(
        $tagIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetUetTagsByIdsRequest();

        $request->TagIds = $tagIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetUetTagsByIds($request);
    }
    static function GetVideosByIds(
        $videoIds,
        $pageInfo)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetVideosByIdsRequest();

        $request->VideoIds = $videoIds;
        $request->PageInfo = $pageInfo;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetVideosByIds($request);
    }
    static function SearchCompanies(
        $companyNameFilter,
        $languageLocale)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new SearchCompaniesRequest();

        $request->CompanyNameFilter = $companyNameFilter;
        $request->LanguageLocale = $languageLocale;

        return $GLOBALS['CampaignManagementProxy']->GetService()->SearchCompanies($request);
    }
    static function SetAccountProperties(
        $accountProperties)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new SetAccountPropertiesRequest();

        $request->AccountProperties = $accountProperties;

        return $GLOBALS['CampaignManagementProxy']->GetService()->SetAccountProperties($request);
    }
    static function SetAdExtensionsAssociations(
        $accountId,
        $adExtensionIdToEntityIdAssociations,
        $associationType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new SetAdExtensionsAssociationsRequest();

        $request->AccountId = $accountId;
        $request->AdExtensionIdToEntityIdAssociations = $adExtensionIdToEntityIdAssociations;
        $request->AssociationType = $associationType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->SetAdExtensionsAssociations($request);
    }
    static function SetLabelAssociations(
        $entityType,
        $labelAssociations)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new SetLabelAssociationsRequest();

        $request->EntityType = $entityType;
        $request->LabelAssociations = $labelAssociations;

        return $GLOBALS['CampaignManagementProxy']->GetService()->SetLabelAssociations($request);
    }
    static function SetNegativeSitesToAdGroups(
        $campaignId,
        $adGroupNegativeSites)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new SetNegativeSitesToAdGroupsRequest();

        $request->CampaignId = $campaignId;
        $request->AdGroupNegativeSites = $adGroupNegativeSites;

        return $GLOBALS['CampaignManagementProxy']->GetService()->SetNegativeSitesToAdGroups($request);
    }
    static function SetNegativeSitesToCampaigns(
        $accountId,
        $campaignNegativeSites)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new SetNegativeSitesToCampaignsRequest();

        $request->AccountId = $accountId;
        $request->CampaignNegativeSites = $campaignNegativeSites;

        return $GLOBALS['CampaignManagementProxy']->GetService()->SetNegativeSitesToCampaigns($request);
    }
    static function SetSharedEntityAssociations(
        $associations,
        $sharedEntityScope)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new SetSharedEntityAssociationsRequest();

        $request->Associations = $associations;
        $request->SharedEntityScope = $sharedEntityScope;

        return $GLOBALS['CampaignManagementProxy']->GetService()->SetSharedEntityAssociations($request);
    }
    static function UpdateAdExtensions(
        $accountId,
        $adExtensions)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateAdExtensionsRequest();

        $request->AccountId = $accountId;
        $request->AdExtensions = $adExtensions;

        return $GLOBALS['CampaignManagementProxy']->GetService()->UpdateAdExtensions($request);
    }
    static function UpdateAdGroupCriterions(
        $adGroupCriterions,
        $criterionType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateAdGroupCriterionsRequest();

        $request->AdGroupCriterions = $adGroupCriterions;
        $request->CriterionType = $criterionType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->UpdateAdGroupCriterions($request);
    }
    static function UpdateAdGroups(
        $campaignId,
        $adGroups,
        $updateAudienceAdsBidAdjustment,
        $returnInheritedBidStrategyTypes)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateAdGroupsRequest();

        $request->CampaignId = $campaignId;
        $request->AdGroups = $adGroups;
        $request->UpdateAudienceAdsBidAdjustment = $updateAudienceAdsBidAdjustment;
        $request->ReturnInheritedBidStrategyTypes = $returnInheritedBidStrategyTypes;

        return $GLOBALS['CampaignManagementProxy']->GetService()->UpdateAdGroups($request);
    }
    static function UpdateAds(
        $adGroupId,
        $ads)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateAdsRequest();

        $request->AdGroupId = $adGroupId;
        $request->Ads = $ads;

        return $GLOBALS['CampaignManagementProxy']->GetService()->UpdateAds($request);
    }
    static function UpdateAudiences(
        $audiences)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateAudiencesRequest();

        $request->Audiences = $audiences;

        return $GLOBALS['CampaignManagementProxy']->GetService()->UpdateAudiences($request);
    }
    static function UpdateBidStrategies(
        $bidStrategies)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateBidStrategiesRequest();

        $request->BidStrategies = $bidStrategies;

        return $GLOBALS['CampaignManagementProxy']->GetService()->UpdateBidStrategies($request);
    }
    static function UpdateBudgets(
        $budgets)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateBudgetsRequest();

        $request->Budgets = $budgets;

        return $GLOBALS['CampaignManagementProxy']->GetService()->UpdateBudgets($request);
    }
    static function UpdateCampaignCriterions(
        $campaignCriterions,
        $criterionType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateCampaignCriterionsRequest();

        $request->CampaignCriterions = $campaignCriterions;
        $request->CriterionType = $criterionType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->UpdateCampaignCriterions($request);
    }
    static function UpdateCampaigns(
        $accountId,
        $campaigns)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateCampaignsRequest();

        $request->AccountId = $accountId;
        $request->Campaigns = $campaigns;

        return $GLOBALS['CampaignManagementProxy']->GetService()->UpdateCampaigns($request);
    }
    static function UpdateConversionGoals(
        $conversionGoals)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateConversionGoalsRequest();

        $request->ConversionGoals = $conversionGoals;

        return $GLOBALS['CampaignManagementProxy']->GetService()->UpdateConversionGoals($request);
    }
    static function UpdateExperiments(
        $experiments)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateExperimentsRequest();

        $request->Experiments = $experiments;

        return $GLOBALS['CampaignManagementProxy']->GetService()->UpdateExperiments($request);
    }
    static function UpdateImportJobs(
        $importJobs)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateImportJobsRequest();

        $request->ImportJobs = $importJobs;

        return $GLOBALS['CampaignManagementProxy']->GetService()->UpdateImportJobs($request);
    }
    static function UpdateKeywords(
        $adGroupId,
        $keywords,
        $returnInheritedBidStrategyTypes)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateKeywordsRequest();

        $request->AdGroupId = $adGroupId;
        $request->Keywords = $keywords;
        $request->ReturnInheritedBidStrategyTypes = $returnInheritedBidStrategyTypes;

        return $GLOBALS['CampaignManagementProxy']->GetService()->UpdateKeywords($request);
    }
    static function UpdateLabels(
        $labels)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateLabelsRequest();

        $request->Labels = $labels;

        return $GLOBALS['CampaignManagementProxy']->GetService()->UpdateLabels($request);
    }
    static function UpdateSharedEntities(
        $sharedEntities,
        $sharedEntityScope)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateSharedEntitiesRequest();

        $request->SharedEntities = $sharedEntities;
        $request->SharedEntityScope = $sharedEntityScope;

        return $GLOBALS['CampaignManagementProxy']->GetService()->UpdateSharedEntities($request);
    }
    static function UpdateUetTags(
        $uetTags)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateUetTagsRequest();

        $request->UetTags = $uetTags;

        return $GLOBALS['CampaignManagementProxy']->GetService()->UpdateUetTags($request);
    }
    static function UpdateVideos(
        $videos)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateVideosRequest();

        $request->Videos = $videos;

        return $GLOBALS['CampaignManagementProxy']->GetService()->UpdateVideos($request);
    }
    static function OutputAccountMigrationStatusesInfo($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAccountMigrationStatusesInfo * * *");
            self::OutputStatusMessage(sprintf("AccountId: %s", $dataObject->AccountId));
            self::OutputStatusMessage("MigrationStatusInfos:");
            self::OutputArrayOfMigrationStatusInfo($dataObject->MigrationStatusInfos);
            self::OutputStatusMessage("* * * End OutputAccountMigrationStatusesInfo * * *");
        }
    }
    static function OutputArrayOfAccountMigrationStatusesInfo($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountMigrationStatusesInfo))
        {
            return;
        }
        foreach ($dataObjects->AccountMigrationStatusesInfo as $dataObject)
        {
            self::OutputAccountMigrationStatusesInfo($dataObject);
        }
    }
    static function OutputAccountProperty($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAccountProperty * * *");
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Value: %s", $dataObject->Value));
            self::OutputStatusMessage("* * * End OutputAccountProperty * * *");
        }
    }
    static function OutputArrayOfAccountProperty($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountProperty))
        {
            return;
        }
        foreach ($dataObjects->AccountProperty as $dataObject)
        {
            self::OutputAccountProperty($dataObject);
        }
    }
    static function OutputActionAdExtension($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputActionAdExtension * * *");
            self::OutputStatusMessage(sprintf("ActionType: %s", $dataObject->ActionType));
            self::OutputStatusMessage("FinalMobileUrls:");
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputStatusMessage(sprintf("FinalUrlSuffix: %s", $dataObject->FinalUrlSuffix));
            self::OutputStatusMessage("FinalUrls:");
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputStatusMessage("UrlCustomParameters:");
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
            self::OutputStatusMessage("* * * End OutputActionAdExtension * * *");
        }
    }
    static function OutputArrayOfActionAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ActionAdExtension))
        {
            return;
        }
        foreach ($dataObjects->ActionAdExtension as $dataObject)
        {
            self::OutputActionAdExtension($dataObject);
        }
    }
    static function OutputAd($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAd * * *");
            self::OutputStatusMessage(sprintf("AdFormatPreference: %s", $dataObject->AdFormatPreference));
            self::OutputStatusMessage(sprintf("DevicePreference: %s", $dataObject->DevicePreference));
            self::OutputStatusMessage(sprintf("EditorialStatus: %s", $dataObject->EditorialStatus));
            self::OutputStatusMessage("FinalAppUrls:");
            self::OutputArrayOfAppUrl($dataObject->FinalAppUrls);
            self::OutputStatusMessage("FinalMobileUrls:");
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputStatusMessage(sprintf("FinalUrlSuffix: %s", $dataObject->FinalUrlSuffix));
            self::OutputStatusMessage("FinalUrls:");
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputStatusMessage("ForwardCompatibilityMap:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            self::OutputStatusMessage("UrlCustomParameters:");
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
            if($dataObject->Type === "AppInstall")
            {
                self::OutputAppInstallAd($dataObject);
            }
            if($dataObject->Type === "DynamicSearch")
            {
                self::OutputDynamicSearchAd($dataObject);
            }
            if($dataObject->Type === "ExpandedText")
            {
                self::OutputExpandedTextAd($dataObject);
            }
            if($dataObject->Type === "Product")
            {
                self::OutputProductAd($dataObject);
            }
            if($dataObject->Type === "ResponsiveAd")
            {
                self::OutputResponsiveAd($dataObject);
            }
            if($dataObject->Type === "ResponsiveSearch")
            {
                self::OutputResponsiveSearchAd($dataObject);
            }
            if($dataObject->Type === "Text")
            {
                self::OutputTextAd($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputAd * * *");
        }
    }
    static function OutputArrayOfAd($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Ad))
        {
            return;
        }
        foreach ($dataObjects->Ad as $dataObject)
        {
            self::OutputAd($dataObject);
        }
    }
    static function OutputAdApiError($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdApiError * * *");
            self::OutputStatusMessage(sprintf("Code: %s", $dataObject->Code));
            self::OutputStatusMessage(sprintf("Detail: %s", $dataObject->Detail));
            self::OutputStatusMessage(sprintf("ErrorCode: %s", $dataObject->ErrorCode));
            self::OutputStatusMessage(sprintf("Message: %s", $dataObject->Message));
            self::OutputStatusMessage("* * * End OutputAdApiError * * *");
        }
    }
    static function OutputArrayOfAdApiError($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdApiError))
        {
            return;
        }
        else if (!is_array($dataObjects->AdApiError))
        {
            self::OutputAdApiError($dataObjects->AdApiError);
            return;
        }
        foreach ($dataObjects->AdApiError as $dataObject)
        {
            self::OutputAdApiError($dataObject);
        }
    }
    static function OutputAdApiFaultDetail($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdApiFaultDetail * * *");
            self::OutputStatusMessage("Errors:");
            self::OutputArrayOfAdApiError($dataObject->Errors);
            self::OutputStatusMessage("* * * End OutputAdApiFaultDetail * * *");
        }
    }
    static function OutputArrayOfAdApiFaultDetail($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdApiFaultDetail))
        {
            return;
        }
        foreach ($dataObjects->AdApiFaultDetail as $dataObject)
        {
            self::OutputAdApiFaultDetail($dataObject);
        }
    }
    static function OutputAddress($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAddress * * *");
            self::OutputStatusMessage(sprintf("CityName: %s", $dataObject->CityName));
            self::OutputStatusMessage(sprintf("CountryCode: %s", $dataObject->CountryCode));
            self::OutputStatusMessage(sprintf("PostalCode: %s", $dataObject->PostalCode));
            self::OutputStatusMessage(sprintf("ProvinceCode: %s", $dataObject->ProvinceCode));
            self::OutputStatusMessage(sprintf("ProvinceName: %s", $dataObject->ProvinceName));
            self::OutputStatusMessage(sprintf("StreetAddress: %s", $dataObject->StreetAddress));
            self::OutputStatusMessage(sprintf("StreetAddress2: %s", $dataObject->StreetAddress2));
            self::OutputStatusMessage("* * * End OutputAddress * * *");
        }
    }
    static function OutputArrayOfAddress($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Address))
        {
            return;
        }
        foreach ($dataObjects->Address as $dataObject)
        {
            self::OutputAddress($dataObject);
        }
    }
    static function OutputAdExtension($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdExtension * * *");
            self::OutputStatusMessage(sprintf("DevicePreference: %s", $dataObject->DevicePreference));
            self::OutputStatusMessage("ForwardCompatibilityMap:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage("Scheduling:");
            self::OutputSchedule($dataObject->Scheduling);
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            self::OutputStatusMessage(sprintf("Version: %s", $dataObject->Version));
            if($dataObject->Type === "ActionAdExtension")
            {
                self::OutputActionAdExtension($dataObject);
            }
            if($dataObject->Type === "AppAdExtension")
            {
                self::OutputAppAdExtension($dataObject);
            }
            if($dataObject->Type === "CallAdExtension")
            {
                self::OutputCallAdExtension($dataObject);
            }
            if($dataObject->Type === "CalloutAdExtension")
            {
                self::OutputCalloutAdExtension($dataObject);
            }
            if($dataObject->Type === "FilterLinkAdExtension")
            {
                self::OutputFilterLinkAdExtension($dataObject);
            }
            if($dataObject->Type === "FlyerAdExtension")
            {
                self::OutputFlyerAdExtension($dataObject);
            }
            if($dataObject->Type === "ImageAdExtension")
            {
                self::OutputImageAdExtension($dataObject);
            }
            if($dataObject->Type === "LocationAdExtension")
            {
                self::OutputLocationAdExtension($dataObject);
            }
            if($dataObject->Type === "PriceAdExtension")
            {
                self::OutputPriceAdExtension($dataObject);
            }
            if($dataObject->Type === "PromotionAdExtension")
            {
                self::OutputPromotionAdExtension($dataObject);
            }
            if($dataObject->Type === "ReviewAdExtension")
            {
                self::OutputReviewAdExtension($dataObject);
            }
            if($dataObject->Type === "SitelinkAdExtension")
            {
                self::OutputSitelinkAdExtension($dataObject);
            }
            if($dataObject->Type === "StructuredSnippetAdExtension")
            {
                self::OutputStructuredSnippetAdExtension($dataObject);
            }
            if($dataObject->Type === "VideoAdExtension")
            {
                self::OutputVideoAdExtension($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputAdExtension * * *");
        }
    }
    static function OutputArrayOfAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtension))
        {
            return;
        }
        foreach ($dataObjects->AdExtension as $dataObject)
        {
            self::OutputAdExtension($dataObject);
        }
    }
    static function OutputAdExtensionAssociation($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdExtensionAssociation * * *");
            self::OutputStatusMessage("AdExtension:");
            self::OutputAdExtension($dataObject->AdExtension);
            self::OutputStatusMessage(sprintf("AssociationType: %s", $dataObject->AssociationType));
            self::OutputStatusMessage(sprintf("EditorialStatus: %s", $dataObject->EditorialStatus));
            self::OutputStatusMessage(sprintf("EntityId: %s", $dataObject->EntityId));
            self::OutputStatusMessage("* * * End OutputAdExtensionAssociation * * *");
        }
    }
    static function OutputArrayOfAdExtensionAssociation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionAssociation))
        {
            return;
        }
        foreach ($dataObjects->AdExtensionAssociation as $dataObject)
        {
            self::OutputAdExtensionAssociation($dataObject);
        }
    }
    static function OutputAdExtensionAssociationCollection($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdExtensionAssociationCollection * * *");
            self::OutputStatusMessage("AdExtensionAssociations:");
            self::OutputArrayOfAdExtensionAssociation($dataObject->AdExtensionAssociations);
            self::OutputStatusMessage("* * * End OutputAdExtensionAssociationCollection * * *");
        }
    }
    static function OutputArrayOfAdExtensionAssociationCollection($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionAssociationCollection))
        {
            return;
        }
        foreach ($dataObjects->AdExtensionAssociationCollection as $dataObject)
        {
            self::OutputAdExtensionAssociationCollection($dataObject);
        }
    }
    static function OutputAdExtensionEditorialReason($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdExtensionEditorialReason * * *");
            self::OutputStatusMessage(sprintf("Location: %s", $dataObject->Location));
            self::OutputStatusMessage("PublisherCountries:");
            self::OutputArrayOfString($dataObject->PublisherCountries);
            self::OutputStatusMessage(sprintf("ReasonCode: %s", $dataObject->ReasonCode));
            self::OutputStatusMessage(sprintf("Term: %s", $dataObject->Term));
            self::OutputStatusMessage("* * * End OutputAdExtensionEditorialReason * * *");
        }
    }
    static function OutputArrayOfAdExtensionEditorialReason($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionEditorialReason))
        {
            return;
        }
        foreach ($dataObjects->AdExtensionEditorialReason as $dataObject)
        {
            self::OutputAdExtensionEditorialReason($dataObject);
        }
    }
    static function OutputAdExtensionEditorialReasonCollection($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdExtensionEditorialReasonCollection * * *");
            self::OutputStatusMessage(sprintf("AdExtensionId: %s", $dataObject->AdExtensionId));
            self::OutputStatusMessage("Reasons:");
            self::OutputArrayOfAdExtensionEditorialReason($dataObject->Reasons);
            self::OutputStatusMessage("* * * End OutputAdExtensionEditorialReasonCollection * * *");
        }
    }
    static function OutputArrayOfAdExtensionEditorialReasonCollection($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionEditorialReasonCollection))
        {
            return;
        }
        foreach ($dataObjects->AdExtensionEditorialReasonCollection as $dataObject)
        {
            self::OutputAdExtensionEditorialReasonCollection($dataObject);
        }
    }
    static function OutputAdExtensionIdentity($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdExtensionIdentity * * *");
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Version: %s", $dataObject->Version));
            self::OutputStatusMessage("* * * End OutputAdExtensionIdentity * * *");
        }
    }
    static function OutputArrayOfAdExtensionIdentity($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionIdentity))
        {
            return;
        }
        foreach ($dataObjects->AdExtensionIdentity as $dataObject)
        {
            self::OutputAdExtensionIdentity($dataObject);
        }
    }
    static function OutputAdExtensionIdToEntityIdAssociation($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdExtensionIdToEntityIdAssociation * * *");
            self::OutputStatusMessage(sprintf("AdExtensionId: %s", $dataObject->AdExtensionId));
            self::OutputStatusMessage(sprintf("EntityId: %s", $dataObject->EntityId));
            self::OutputStatusMessage("* * * End OutputAdExtensionIdToEntityIdAssociation * * *");
        }
    }
    static function OutputArrayOfAdExtensionIdToEntityIdAssociation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionIdToEntityIdAssociation))
        {
            return;
        }
        foreach ($dataObjects->AdExtensionIdToEntityIdAssociation as $dataObject)
        {
            self::OutputAdExtensionIdToEntityIdAssociation($dataObject);
        }
    }
    static function OutputAdGroup($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdGroup * * *");
            self::OutputStatusMessage("AdRotation:");
            self::OutputAdRotation($dataObject->AdRotation);
            self::OutputStatusMessage(sprintf("AudienceAdsBidAdjustment: %s", $dataObject->AudienceAdsBidAdjustment));
            self::OutputStatusMessage("BiddingScheme:");
            self::OutputBiddingScheme($dataObject->BiddingScheme);
            self::OutputStatusMessage("CpcBid:");
            self::OutputBid($dataObject->CpcBid);
            self::OutputStatusMessage("EndDate:");
            self::OutputDate($dataObject->EndDate);
            self::OutputStatusMessage(sprintf("FinalUrlSuffix: %s", $dataObject->FinalUrlSuffix));
            self::OutputStatusMessage("ForwardCompatibilityMap:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage(sprintf("MultimediaAdsBidAdjustment: %s", $dataObject->MultimediaAdsBidAdjustment));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Network: %s", $dataObject->Network));
            self::OutputStatusMessage(sprintf("PrivacyStatus: %s", $dataObject->PrivacyStatus));
            self::OutputStatusMessage("Settings:");
            self::OutputArrayOfSetting($dataObject->Settings);
            self::OutputStatusMessage("StartDate:");
            self::OutputDate($dataObject->StartDate);
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputStatusMessage("UrlCustomParameters:");
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
            self::OutputStatusMessage(sprintf("AdScheduleUseSearcherTimeZone: %s", $dataObject->AdScheduleUseSearcherTimeZone));
            self::OutputStatusMessage(sprintf("AdGroupType: %s", $dataObject->AdGroupType));
            self::OutputStatusMessage("CpvBid:");
            self::OutputBid($dataObject->CpvBid);
            self::OutputStatusMessage("CpmBid:");
            self::OutputBid($dataObject->CpmBid);
            self::OutputStatusMessage("* * * End OutputAdGroup * * *");
        }
    }
    static function OutputArrayOfAdGroup($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroup))
        {
            return;
        }
        foreach ($dataObjects->AdGroup as $dataObject)
        {
            self::OutputAdGroup($dataObject);
        }
    }
    static function OutputAdGroupCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdGroupCriterion * * *");
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
            self::OutputStatusMessage("Criterion:");
            self::OutputCriterion($dataObject->Criterion);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "BiddableAdGroupCriterion")
            {
                self::OutputBiddableAdGroupCriterion($dataObject);
            }
            if($dataObject->Type === "NegativeAdGroupCriterion")
            {
                self::OutputNegativeAdGroupCriterion($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputAdGroupCriterion * * *");
        }
    }
    static function OutputArrayOfAdGroupCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupCriterion))
        {
            return;
        }
        foreach ($dataObjects->AdGroupCriterion as $dataObject)
        {
            self::OutputAdGroupCriterion($dataObject);
        }
    }
    static function OutputAdGroupCriterionAction($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdGroupCriterionAction * * *");
            self::OutputStatusMessage(sprintf("Action: %s", $dataObject->Action));
            self::OutputStatusMessage("AdGroupCriterion:");
            self::OutputAdGroupCriterion($dataObject->AdGroupCriterion);
            self::OutputStatusMessage("* * * End OutputAdGroupCriterionAction * * *");
        }
    }
    static function OutputArrayOfAdGroupCriterionAction($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupCriterionAction))
        {
            return;
        }
        foreach ($dataObjects->AdGroupCriterionAction as $dataObject)
        {
            self::OutputAdGroupCriterionAction($dataObject);
        }
    }
    static function OutputAdGroupNegativeSites($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdGroupNegativeSites * * *");
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
            self::OutputStatusMessage("NegativeSites:");
            self::OutputArrayOfString($dataObject->NegativeSites);
            self::OutputStatusMessage("* * * End OutputAdGroupNegativeSites * * *");
        }
    }
    static function OutputArrayOfAdGroupNegativeSites($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupNegativeSites))
        {
            return;
        }
        foreach ($dataObjects->AdGroupNegativeSites as $dataObject)
        {
            self::OutputAdGroupNegativeSites($dataObject);
        }
    }
    static function OutputAdRotation($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdRotation * * *");
            self::OutputStatusMessage(sprintf("EndDate: %s", $dataObject->EndDate));
            self::OutputStatusMessage(sprintf("StartDate: %s", $dataObject->StartDate));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            self::OutputStatusMessage("* * * End OutputAdRotation * * *");
        }
    }
    static function OutputArrayOfAdRotation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdRotation))
        {
            return;
        }
        foreach ($dataObjects->AdRotation as $dataObject)
        {
            self::OutputAdRotation($dataObject);
        }
    }
    static function OutputAgeCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAgeCriterion * * *");
            self::OutputStatusMessage(sprintf("AgeRange: %s", $dataObject->AgeRange));
            self::OutputStatusMessage("* * * End OutputAgeCriterion * * *");
        }
    }
    static function OutputArrayOfAgeCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AgeCriterion))
        {
            return;
        }
        foreach ($dataObjects->AgeCriterion as $dataObject)
        {
            self::OutputAgeCriterion($dataObject);
        }
    }
    static function OutputApiFaultDetail($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputApiFaultDetail * * *");
            self::OutputStatusMessage("BatchErrors:");
            self::OutputArrayOfBatchError($dataObject->BatchErrors);
            self::OutputStatusMessage("OperationErrors:");
            self::OutputArrayOfOperationError($dataObject->OperationErrors);
            self::OutputStatusMessage("* * * End OutputApiFaultDetail * * *");
        }
    }
    static function OutputArrayOfApiFaultDetail($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ApiFaultDetail))
        {
            return;
        }
        foreach ($dataObjects->ApiFaultDetail as $dataObject)
        {
            self::OutputApiFaultDetail($dataObject);
        }
    }
    static function OutputAppAdExtension($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAppAdExtension * * *");
            self::OutputStatusMessage(sprintf("AppPlatform: %s", $dataObject->AppPlatform));
            self::OutputStatusMessage(sprintf("AppStoreId: %s", $dataObject->AppStoreId));
            self::OutputStatusMessage(sprintf("DestinationUrl: %s", $dataObject->DestinationUrl));
            self::OutputStatusMessage(sprintf("DisplayText: %s", $dataObject->DisplayText));
            self::OutputStatusMessage("FinalAppUrls:");
            self::OutputArrayOfAppUrl($dataObject->FinalAppUrls);
            self::OutputStatusMessage("FinalMobileUrls:");
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputStatusMessage(sprintf("FinalUrlSuffix: %s", $dataObject->FinalUrlSuffix));
            self::OutputStatusMessage("FinalUrls:");
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputStatusMessage("UrlCustomParameters:");
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
            self::OutputStatusMessage("* * * End OutputAppAdExtension * * *");
        }
    }
    static function OutputArrayOfAppAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AppAdExtension))
        {
            return;
        }
        foreach ($dataObjects->AppAdExtension as $dataObject)
        {
            self::OutputAppAdExtension($dataObject);
        }
    }
    static function OutputAppInstallAd($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAppInstallAd * * *");
            self::OutputStatusMessage(sprintf("AppPlatform: %s", $dataObject->AppPlatform));
            self::OutputStatusMessage(sprintf("AppStoreId: %s", $dataObject->AppStoreId));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
            self::OutputStatusMessage(sprintf("Title: %s", $dataObject->Title));
            self::OutputStatusMessage("* * * End OutputAppInstallAd * * *");
        }
    }
    static function OutputArrayOfAppInstallAd($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AppInstallAd))
        {
            return;
        }
        foreach ($dataObjects->AppInstallAd as $dataObject)
        {
            self::OutputAppInstallAd($dataObject);
        }
    }
    static function OutputAppInstallGoal($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAppInstallGoal * * *");
            self::OutputStatusMessage(sprintf("AppPlatform: %s", $dataObject->AppPlatform));
            self::OutputStatusMessage(sprintf("AppStoreId: %s", $dataObject->AppStoreId));
            self::OutputStatusMessage("* * * End OutputAppInstallGoal * * *");
        }
    }
    static function OutputArrayOfAppInstallGoal($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AppInstallGoal))
        {
            return;
        }
        foreach ($dataObjects->AppInstallGoal as $dataObject)
        {
            self::OutputAppInstallGoal($dataObject);
        }
    }
    static function OutputApplicationFault($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputApplicationFault * * *");
            self::OutputStatusMessage(sprintf("TrackingId: %s", $dataObject->TrackingId));
            if($dataObject->Type === "AdApiFaultDetail")
            {
                self::OutputAdApiFaultDetail($dataObject);
            }
            if($dataObject->Type === "ApiFaultDetail")
            {
                self::OutputApiFaultDetail($dataObject);
            }
            if($dataObject->Type === "EditorialApiFaultDetail")
            {
                self::OutputEditorialApiFaultDetail($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputApplicationFault * * *");
        }
    }
    static function OutputArrayOfApplicationFault($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ApplicationFault))
        {
            return;
        }
        foreach ($dataObjects->ApplicationFault as $dataObject)
        {
            self::OutputApplicationFault($dataObject);
        }
    }
    static function OutputAppUrl($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAppUrl * * *");
            self::OutputStatusMessage(sprintf("OsType: %s", $dataObject->OsType));
            self::OutputStatusMessage(sprintf("Url: %s", $dataObject->Url));
            self::OutputStatusMessage("* * * End OutputAppUrl * * *");
        }
    }
    static function OutputArrayOfAppUrl($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AppUrl))
        {
            return;
        }
        foreach ($dataObjects->AppUrl as $dataObject)
        {
            self::OutputAppUrl($dataObject);
        }
    }
    static function OutputAsset($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAsset * * *");
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "ImageAsset")
            {
                self::OutputImageAsset($dataObject);
            }
            if($dataObject->Type === "TextAsset")
            {
                self::OutputTextAsset($dataObject);
            }
            if($dataObject->Type === "VideoAsset")
            {
                self::OutputVideoAsset($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputAsset * * *");
        }
    }
    static function OutputArrayOfAsset($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Asset))
        {
            return;
        }
        foreach ($dataObjects->Asset as $dataObject)
        {
            self::OutputAsset($dataObject);
        }
    }
    static function OutputAssetLink($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAssetLink * * *");
            self::OutputStatusMessage("Asset:");
            self::OutputAsset($dataObject->Asset);
            self::OutputStatusMessage(sprintf("AssetPerformanceLabel: %s", $dataObject->AssetPerformanceLabel));
            self::OutputStatusMessage(sprintf("EditorialStatus: %s", $dataObject->EditorialStatus));
            self::OutputStatusMessage(sprintf("PinnedField: %s", $dataObject->PinnedField));
            self::OutputStatusMessage("* * * End OutputAssetLink * * *");
        }
    }
    static function OutputArrayOfAssetLink($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AssetLink))
        {
            return;
        }
        foreach ($dataObjects->AssetLink as $dataObject)
        {
            self::OutputAssetLink($dataObject);
        }
    }
    static function OutputAudience($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAudience * * *");
            self::OutputStatusMessage(sprintf("AudienceNetworkSize: %s", $dataObject->AudienceNetworkSize));
            self::OutputStatusMessage("CustomerShare:");
            self::OutputCustomerShare($dataObject->CustomerShare);
            self::OutputStatusMessage(sprintf("Description: %s", $dataObject->Description));
            self::OutputStatusMessage("ForwardCompatibilityMap:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("MembershipDuration: %s", $dataObject->MembershipDuration));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("ParentId: %s", $dataObject->ParentId));
            self::OutputStatusMessage(sprintf("Scope: %s", $dataObject->Scope));
            self::OutputStatusMessage(sprintf("SearchSize: %s", $dataObject->SearchSize));
            self::OutputStatusMessage("SupportedCampaignTypes:");
            self::OutputArrayOfString($dataObject->SupportedCampaignTypes);
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "CombinedList")
            {
                self::OutputCombinedList($dataObject);
            }
            if($dataObject->Type === "Custom")
            {
                self::OutputCustomAudience($dataObject);
            }
            if($dataObject->Type === "InMarket")
            {
                self::OutputInMarketAudience($dataObject);
            }
            if($dataObject->Type === "Product")
            {
                self::OutputProductAudience($dataObject);
            }
            if($dataObject->Type === "RemarketingList")
            {
                self::OutputRemarketingList($dataObject);
            }
            if($dataObject->Type === "SimilarRemarketingList")
            {
                self::OutputSimilarRemarketingList($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputAudience * * *");
        }
    }
    static function OutputArrayOfAudience($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Audience))
        {
            return;
        }
        foreach ($dataObjects->Audience as $dataObject)
        {
            self::OutputAudience($dataObject);
        }
    }
    static function OutputAudienceCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAudienceCriterion * * *");
            self::OutputStatusMessage(sprintf("AudienceId: %s", $dataObject->AudienceId));
            self::OutputStatusMessage(sprintf("AudienceType: %s", $dataObject->AudienceType));
            self::OutputStatusMessage("* * * End OutputAudienceCriterion * * *");
        }
    }
    static function OutputArrayOfAudienceCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AudienceCriterion))
        {
            return;
        }
        foreach ($dataObjects->AudienceCriterion as $dataObject)
        {
            self::OutputAudienceCriterion($dataObject);
        }
    }
    static function OutputBatchError($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBatchError * * *");
            self::OutputStatusMessage(sprintf("Code: %s", $dataObject->Code));
            self::OutputStatusMessage(sprintf("Details: %s", $dataObject->Details));
            self::OutputStatusMessage(sprintf("ErrorCode: %s", $dataObject->ErrorCode));
            self::OutputStatusMessage(sprintf("FieldPath: %s", $dataObject->FieldPath));
            self::OutputStatusMessage("ForwardCompatibilityMap:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Index: %s", $dataObject->Index));
            self::OutputStatusMessage(sprintf("Message: %s", $dataObject->Message));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "EditorialError")
            {
                self::OutputEditorialError($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputBatchError * * *");
        }
    }
    static function OutputArrayOfBatchError($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BatchError))
        {
            return;
        }
        foreach ($dataObjects->BatchError as $dataObject)
        {
            self::OutputBatchError($dataObject);
        }
    }
    static function OutputBatchErrorCollection($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBatchErrorCollection * * *");
            self::OutputStatusMessage("BatchErrors:");
            self::OutputArrayOfBatchError($dataObject->BatchErrors);
            self::OutputStatusMessage(sprintf("Code: %s", $dataObject->Code));
            self::OutputStatusMessage(sprintf("Details: %s", $dataObject->Details));
            self::OutputStatusMessage(sprintf("ErrorCode: %s", $dataObject->ErrorCode));
            self::OutputStatusMessage(sprintf("FieldPath: %s", $dataObject->FieldPath));
            self::OutputStatusMessage("ForwardCompatibilityMap:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Index: %s", $dataObject->Index));
            self::OutputStatusMessage(sprintf("Message: %s", $dataObject->Message));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "EditorialErrorCollection")
            {
                self::OutputEditorialErrorCollection($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputBatchErrorCollection * * *");
        }
    }
    static function OutputArrayOfBatchErrorCollection($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BatchErrorCollection))
        {
            return;
        }
        foreach ($dataObjects->BatchErrorCollection as $dataObject)
        {
            self::OutputBatchErrorCollection($dataObject);
        }
    }
    static function OutputBid($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBid * * *");
            self::OutputStatusMessage(sprintf("Amount: %s", $dataObject->Amount));
            self::OutputStatusMessage("* * * End OutputBid * * *");
        }
    }
    static function OutputArrayOfBid($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Bid))
        {
            return;
        }
        foreach ($dataObjects->Bid as $dataObject)
        {
            self::OutputBid($dataObject);
        }
    }
    static function OutputBiddableAdGroupCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBiddableAdGroupCriterion * * *");
            self::OutputStatusMessage("CriterionBid:");
            self::OutputCriterionBid($dataObject->CriterionBid);
            self::OutputStatusMessage(sprintf("DestinationUrl: %s", $dataObject->DestinationUrl));
            self::OutputStatusMessage(sprintf("EditorialStatus: %s", $dataObject->EditorialStatus));
            self::OutputStatusMessage("FinalAppUrls:");
            self::OutputArrayOfAppUrl($dataObject->FinalAppUrls);
            self::OutputStatusMessage("FinalMobileUrls:");
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputStatusMessage(sprintf("FinalUrlSuffix: %s", $dataObject->FinalUrlSuffix));
            self::OutputStatusMessage("FinalUrls:");
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputStatusMessage("UrlCustomParameters:");
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
            self::OutputStatusMessage("CriterionCashback:");
            self::OutputCriterionCashback($dataObject->CriterionCashback);
            self::OutputStatusMessage("* * * End OutputBiddableAdGroupCriterion * * *");
        }
    }
    static function OutputArrayOfBiddableAdGroupCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BiddableAdGroupCriterion))
        {
            return;
        }
        foreach ($dataObjects->BiddableAdGroupCriterion as $dataObject)
        {
            self::OutputBiddableAdGroupCriterion($dataObject);
        }
    }
    static function OutputBiddableCampaignCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBiddableCampaignCriterion * * *");
            self::OutputStatusMessage("CriterionBid:");
            self::OutputCriterionBid($dataObject->CriterionBid);
            self::OutputStatusMessage("CriterionCashback:");
            self::OutputCriterionCashback($dataObject->CriterionCashback);
            self::OutputStatusMessage("* * * End OutputBiddableCampaignCriterion * * *");
        }
    }
    static function OutputArrayOfBiddableCampaignCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BiddableCampaignCriterion))
        {
            return;
        }
        foreach ($dataObjects->BiddableCampaignCriterion as $dataObject)
        {
            self::OutputBiddableCampaignCriterion($dataObject);
        }
    }
    static function OutputBiddingScheme($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBiddingScheme * * *");
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "EnhancedCpcBiddingScheme")
            {
                self::OutputEnhancedCpcBiddingScheme($dataObject);
            }
            if($dataObject->Type === "InheritFromParentBiddingScheme")
            {
                self::OutputInheritFromParentBiddingScheme($dataObject);
            }
            if($dataObject->Type === "ManualCpcBiddingScheme")
            {
                self::OutputManualCpcBiddingScheme($dataObject);
            }
            if($dataObject->Type === "ManualCpmBiddingScheme")
            {
                self::OutputManualCpmBiddingScheme($dataObject);
            }
            if($dataObject->Type === "ManualCpvBiddingScheme")
            {
                self::OutputManualCpvBiddingScheme($dataObject);
            }
            if($dataObject->Type === "MaxClicksBiddingScheme")
            {
                self::OutputMaxClicksBiddingScheme($dataObject);
            }
            if($dataObject->Type === "MaxConversionsBiddingScheme")
            {
                self::OutputMaxConversionsBiddingScheme($dataObject);
            }
            if($dataObject->Type === "MaxConversionValueBiddingScheme")
            {
                self::OutputMaxConversionValueBiddingScheme($dataObject);
            }
            if($dataObject->Type === "MaxRoasBiddingScheme")
            {
                self::OutputMaxRoasBiddingScheme($dataObject);
            }
            if($dataObject->Type === "TargetCpaBiddingScheme")
            {
                self::OutputTargetCpaBiddingScheme($dataObject);
            }
            if($dataObject->Type === "TargetImpressionShareBiddingScheme")
            {
                self::OutputTargetImpressionShareBiddingScheme($dataObject);
            }
            if($dataObject->Type === "TargetRoasBiddingScheme")
            {
                self::OutputTargetRoasBiddingScheme($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputBiddingScheme * * *");
        }
    }
    static function OutputArrayOfBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BiddingScheme))
        {
            return;
        }
        foreach ($dataObjects->BiddingScheme as $dataObject)
        {
            self::OutputBiddingScheme($dataObject);
        }
    }
    static function OutputBidMultiplier($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBidMultiplier * * *");
            self::OutputStatusMessage(sprintf("Multiplier: %s", $dataObject->Multiplier));
            self::OutputStatusMessage("* * * End OutputBidMultiplier * * *");
        }
    }
    static function OutputArrayOfBidMultiplier($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BidMultiplier))
        {
            return;
        }
        foreach ($dataObjects->BidMultiplier as $dataObject)
        {
            self::OutputBidMultiplier($dataObject);
        }
    }
    static function OutputBidStrategy($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBidStrategy * * *");
            self::OutputStatusMessage(sprintf("AssociatedCampaignType: %s", $dataObject->AssociatedCampaignType));
            self::OutputStatusMessage(sprintf("AssociationCount: %s", $dataObject->AssociationCount));
            self::OutputStatusMessage("BiddingScheme:");
            self::OutputBiddingScheme($dataObject->BiddingScheme);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage("* * * End OutputBidStrategy * * *");
        }
    }
    static function OutputArrayOfBidStrategy($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BidStrategy))
        {
            return;
        }
        foreach ($dataObjects->BidStrategy as $dataObject)
        {
            self::OutputBidStrategy($dataObject);
        }
    }
    static function OutputBMCStore($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBMCStore * * *");
            self::OutputStatusMessage(sprintf("HasCatalog: %s", $dataObject->HasCatalog));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("IsActive: %s", $dataObject->IsActive));
            self::OutputStatusMessage(sprintf("IsProductAdsEnabled: %s", $dataObject->IsProductAdsEnabled));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("SubType: %s", $dataObject->SubType));
            self::OutputStatusMessage("* * * End OutputBMCStore * * *");
        }
    }
    static function OutputArrayOfBMCStore($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BMCStore))
        {
            return;
        }
        foreach ($dataObjects->BMCStore as $dataObject)
        {
            self::OutputBMCStore($dataObject);
        }
    }
    static function OutputBudget($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBudget * * *");
            self::OutputStatusMessage(sprintf("Amount: %s", $dataObject->Amount));
            self::OutputStatusMessage(sprintf("AssociationCount: %s", $dataObject->AssociationCount));
            self::OutputStatusMessage(sprintf("BudgetType: %s", $dataObject->BudgetType));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage("* * * End OutputBudget * * *");
        }
    }
    static function OutputArrayOfBudget($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Budget))
        {
            return;
        }
        foreach ($dataObjects->Budget as $dataObject)
        {
            self::OutputBudget($dataObject);
        }
    }
    static function OutputCallAdExtension($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCallAdExtension * * *");
            self::OutputStatusMessage(sprintf("CountryCode: %s", $dataObject->CountryCode));
            self::OutputStatusMessage(sprintf("IsCallOnly: %s", $dataObject->IsCallOnly));
            self::OutputStatusMessage(sprintf("IsCallTrackingEnabled: %s", $dataObject->IsCallTrackingEnabled));
            self::OutputStatusMessage(sprintf("PhoneNumber: %s", $dataObject->PhoneNumber));
            self::OutputStatusMessage(sprintf("RequireTollFreeTrackingNumber: %s", $dataObject->RequireTollFreeTrackingNumber));
            self::OutputStatusMessage("* * * End OutputCallAdExtension * * *");
        }
    }
    static function OutputArrayOfCallAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CallAdExtension))
        {
            return;
        }
        foreach ($dataObjects->CallAdExtension as $dataObject)
        {
            self::OutputCallAdExtension($dataObject);
        }
    }
    static function OutputCalloutAdExtension($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCalloutAdExtension * * *");
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
            self::OutputStatusMessage("* * * End OutputCalloutAdExtension * * *");
        }
    }
    static function OutputArrayOfCalloutAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CalloutAdExtension))
        {
            return;
        }
        foreach ($dataObjects->CalloutAdExtension as $dataObject)
        {
            self::OutputCalloutAdExtension($dataObject);
        }
    }
    static function OutputCampaign($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCampaign * * *");
            self::OutputStatusMessage(sprintf("AudienceAdsBidAdjustment: %s", $dataObject->AudienceAdsBidAdjustment));
            self::OutputStatusMessage("BiddingScheme:");
            self::OutputBiddingScheme($dataObject->BiddingScheme);
            self::OutputStatusMessage(sprintf("BudgetType: %s", $dataObject->BudgetType));
            self::OutputStatusMessage(sprintf("DailyBudget: %s", $dataObject->DailyBudget));
            self::OutputStatusMessage(sprintf("ExperimentId: %s", $dataObject->ExperimentId));
            self::OutputStatusMessage(sprintf("FinalUrlSuffix: %s", $dataObject->FinalUrlSuffix));
            self::OutputStatusMessage("ForwardCompatibilityMap:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("MultimediaAdsBidAdjustment: %s", $dataObject->MultimediaAdsBidAdjustment));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage(sprintf("SubType: %s", $dataObject->SubType));
            self::OutputStatusMessage(sprintf("TimeZone: %s", $dataObject->TimeZone));
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputStatusMessage("UrlCustomParameters:");
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
            self::OutputStatusMessage(sprintf("CampaignType: %s", $dataObject->CampaignType));
            self::OutputStatusMessage("Settings:");
            self::OutputArrayOfSetting($dataObject->Settings);
            self::OutputStatusMessage(sprintf("BudgetId: %s", $dataObject->BudgetId));
            self::OutputStatusMessage("Languages:");
            self::OutputArrayOfString($dataObject->Languages);
            self::OutputStatusMessage(sprintf("AdScheduleUseSearcherTimeZone: %s", $dataObject->AdScheduleUseSearcherTimeZone));
            self::OutputStatusMessage(sprintf("BidStrategyId: %s", $dataObject->BidStrategyId));
            self::OutputStatusMessage("* * * End OutputCampaign * * *");
        }
    }
    static function OutputArrayOfCampaign($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Campaign))
        {
            return;
        }
        foreach ($dataObjects->Campaign as $dataObject)
        {
            self::OutputCampaign($dataObject);
        }
    }
    static function OutputCampaignAdGroupIds($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCampaignAdGroupIds * * *");
            self::OutputStatusMessage(sprintf("ActiveAdGroupsOnly: %s", $dataObject->ActiveAdGroupsOnly));
            self::OutputStatusMessage("AdGroupIds:");
            self::OutputArrayOfLong($dataObject->AdGroupIds);
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
            self::OutputStatusMessage("* * * End OutputCampaignAdGroupIds * * *");
        }
    }
    static function OutputArrayOfCampaignAdGroupIds($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CampaignAdGroupIds))
        {
            return;
        }
        foreach ($dataObjects->CampaignAdGroupIds as $dataObject)
        {
            self::OutputCampaignAdGroupIds($dataObject);
        }
    }
    static function OutputCampaignCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCampaignCriterion * * *");
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
            self::OutputStatusMessage("Criterion:");
            self::OutputCriterion($dataObject->Criterion);
            self::OutputStatusMessage("ForwardCompatibilityMap:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "BiddableCampaignCriterion")
            {
                self::OutputBiddableCampaignCriterion($dataObject);
            }
            if($dataObject->Type === "NegativeCampaignCriterion")
            {
                self::OutputNegativeCampaignCriterion($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputCampaignCriterion * * *");
        }
    }
    static function OutputArrayOfCampaignCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CampaignCriterion))
        {
            return;
        }
        foreach ($dataObjects->CampaignCriterion as $dataObject)
        {
            self::OutputCampaignCriterion($dataObject);
        }
    }
    static function OutputCampaignNegativeSites($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCampaignNegativeSites * * *");
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
            self::OutputStatusMessage("NegativeSites:");
            self::OutputArrayOfString($dataObject->NegativeSites);
            self::OutputStatusMessage("* * * End OutputCampaignNegativeSites * * *");
        }
    }
    static function OutputArrayOfCampaignNegativeSites($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CampaignNegativeSites))
        {
            return;
        }
        foreach ($dataObjects->CampaignNegativeSites as $dataObject)
        {
            self::OutputCampaignNegativeSites($dataObject);
        }
    }
    static function OutputCashbackAdjustment($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCashbackAdjustment * * *");
            self::OutputStatusMessage(sprintf("CashbackPercent: %s", $dataObject->CashbackPercent));
            self::OutputStatusMessage("* * * End OutputCashbackAdjustment * * *");
        }
    }
    static function OutputArrayOfCashbackAdjustment($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CashbackAdjustment))
        {
            return;
        }
        foreach ($dataObjects->CashbackAdjustment as $dataObject)
        {
            self::OutputCashbackAdjustment($dataObject);
        }
    }
    static function OutputCombinationRule($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCombinationRule * * *");
            self::OutputStatusMessage("AudienceIds:");
            self::OutputArrayOfLong($dataObject->AudienceIds);
            self::OutputStatusMessage(sprintf("Operator: %s", $dataObject->Operator));
            self::OutputStatusMessage("* * * End OutputCombinationRule * * *");
        }
    }
    static function OutputArrayOfCombinationRule($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CombinationRule))
        {
            return;
        }
        foreach ($dataObjects->CombinationRule as $dataObject)
        {
            self::OutputCombinationRule($dataObject);
        }
    }
    static function OutputCombinedList($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCombinedList * * *");
            self::OutputStatusMessage("CombinationRules:");
            self::OutputArrayOfCombinationRule($dataObject->CombinationRules);
            self::OutputStatusMessage("* * * End OutputCombinedList * * *");
        }
    }
    static function OutputArrayOfCombinedList($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CombinedList))
        {
            return;
        }
        foreach ($dataObjects->CombinedList as $dataObject)
        {
            self::OutputCombinedList($dataObject);
        }
    }
    static function OutputCompany($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCompany * * *");
            self::OutputStatusMessage(sprintf("LogoUrl: %s", $dataObject->LogoUrl));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("ProfileId: %s", $dataObject->ProfileId));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage("* * * End OutputCompany * * *");
        }
    }
    static function OutputArrayOfCompany($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Company))
        {
            return;
        }
        foreach ($dataObjects->Company as $dataObject)
        {
            self::OutputCompany($dataObject);
        }
    }
    static function OutputConversionGoal($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputConversionGoal * * *");
            self::OutputStatusMessage(sprintf("ConversionWindowInMinutes: %s", $dataObject->ConversionWindowInMinutes));
            self::OutputStatusMessage(sprintf("CountType: %s", $dataObject->CountType));
            self::OutputStatusMessage(sprintf("ExcludeFromBidding: %s", $dataObject->ExcludeFromBidding));
            self::OutputStatusMessage(sprintf("GoalCategory: %s", $dataObject->GoalCategory));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage("Revenue:");
            self::OutputConversionGoalRevenue($dataObject->Revenue);
            self::OutputStatusMessage(sprintf("Scope: %s", $dataObject->Scope));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage(sprintf("TagId: %s", $dataObject->TagId));
            self::OutputStatusMessage(sprintf("TrackingStatus: %s", $dataObject->TrackingStatus));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            self::OutputStatusMessage(sprintf("ViewThroughConversionWindowInMinutes: %s", $dataObject->ViewThroughConversionWindowInMinutes));
            if($dataObject->Type === "AppInstallGoal")
            {
                self::OutputAppInstallGoal($dataObject);
            }
            if($dataObject->Type === "DurationGoal")
            {
                self::OutputDurationGoal($dataObject);
            }
            if($dataObject->Type === "EventGoal")
            {
                self::OutputEventGoal($dataObject);
            }
            if($dataObject->Type === "InStoreTransactionGoal")
            {
                self::OutputInStoreTransactionGoal($dataObject);
            }
            if($dataObject->Type === "OfflineConversionGoal")
            {
                self::OutputOfflineConversionGoal($dataObject);
            }
            if($dataObject->Type === "PagesViewedPerVisitGoal")
            {
                self::OutputPagesViewedPerVisitGoal($dataObject);
            }
            if($dataObject->Type === "UrlGoal")
            {
                self::OutputUrlGoal($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputConversionGoal * * *");
        }
    }
    static function OutputArrayOfConversionGoal($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ConversionGoal))
        {
            return;
        }
        foreach ($dataObjects->ConversionGoal as $dataObject)
        {
            self::OutputConversionGoal($dataObject);
        }
    }
    static function OutputConversionGoalRevenue($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputConversionGoalRevenue * * *");
            self::OutputStatusMessage(sprintf("CurrencyCode: %s", $dataObject->CurrencyCode));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            self::OutputStatusMessage(sprintf("Value: %s", $dataObject->Value));
            self::OutputStatusMessage("* * * End OutputConversionGoalRevenue * * *");
        }
    }
    static function OutputArrayOfConversionGoalRevenue($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ConversionGoalRevenue))
        {
            return;
        }
        foreach ($dataObjects->ConversionGoalRevenue as $dataObject)
        {
            self::OutputConversionGoalRevenue($dataObject);
        }
    }
    static function OutputCoOpSetting($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCoOpSetting * * *");
            self::OutputStatusMessage(sprintf("BidBoostValue: %s", $dataObject->BidBoostValue));
            self::OutputStatusMessage(sprintf("BidMaxValue: %s", $dataObject->BidMaxValue));
            self::OutputStatusMessage(sprintf("BidOption: %s", $dataObject->BidOption));
            self::OutputStatusMessage("* * * End OutputCoOpSetting * * *");
        }
    }
    static function OutputArrayOfCoOpSetting($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CoOpSetting))
        {
            return;
        }
        foreach ($dataObjects->CoOpSetting as $dataObject)
        {
            self::OutputCoOpSetting($dataObject);
        }
    }
    static function OutputCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCriterion * * *");
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "AgeCriterion")
            {
                self::OutputAgeCriterion($dataObject);
            }
            if($dataObject->Type === "AudienceCriterion")
            {
                self::OutputAudienceCriterion($dataObject);
            }
            if($dataObject->Type === "DayTimeCriterion")
            {
                self::OutputDayTimeCriterion($dataObject);
            }
            if($dataObject->Type === "DeviceCriterion")
            {
                self::OutputDeviceCriterion($dataObject);
            }
            if($dataObject->Type === "GenderCriterion")
            {
                self::OutputGenderCriterion($dataObject);
            }
            if($dataObject->Type === "LocationCriterion")
            {
                self::OutputLocationCriterion($dataObject);
            }
            if($dataObject->Type === "LocationIntentCriterion")
            {
                self::OutputLocationIntentCriterion($dataObject);
            }
            if($dataObject->Type === "ProductPartition")
            {
                self::OutputProductPartition($dataObject);
            }
            if($dataObject->Type === "ProductScope")
            {
                self::OutputProductScope($dataObject);
            }
            if($dataObject->Type === "ProfileCriterion")
            {
                self::OutputProfileCriterion($dataObject);
            }
            if($dataObject->Type === "RadiusCriterion")
            {
                self::OutputRadiusCriterion($dataObject);
            }
            if($dataObject->Type === "StoreCriterion")
            {
                self::OutputStoreCriterion($dataObject);
            }
            if($dataObject->Type === "Webpage")
            {
                self::OutputWebpage($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputCriterion * * *");
        }
    }
    static function OutputArrayOfCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Criterion))
        {
            return;
        }
        foreach ($dataObjects->Criterion as $dataObject)
        {
            self::OutputCriterion($dataObject);
        }
    }
    static function OutputCriterionBid($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCriterionBid * * *");
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "BidMultiplier")
            {
                self::OutputBidMultiplier($dataObject);
            }
            if($dataObject->Type === "FixedBid")
            {
                self::OutputFixedBid($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputCriterionBid * * *");
        }
    }
    static function OutputArrayOfCriterionBid($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CriterionBid))
        {
            return;
        }
        foreach ($dataObjects->CriterionBid as $dataObject)
        {
            self::OutputCriterionBid($dataObject);
        }
    }
    static function OutputCriterionCashback($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCriterionCashback * * *");
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "CashbackAdjustment")
            {
                self::OutputCashbackAdjustment($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputCriterionCashback * * *");
        }
    }
    static function OutputArrayOfCriterionCashback($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CriterionCashback))
        {
            return;
        }
        foreach ($dataObjects->CriterionCashback as $dataObject)
        {
            self::OutputCriterionCashback($dataObject);
        }
    }
    static function OutputCustomAudience($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCustomAudience * * *");
            self::OutputStatusMessage("* * * End OutputCustomAudience * * *");
        }
    }
    static function OutputArrayOfCustomAudience($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CustomAudience))
        {
            return;
        }
        foreach ($dataObjects->CustomAudience as $dataObject)
        {
            self::OutputCustomAudience($dataObject);
        }
    }
    static function OutputCustomerAccountShare($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCustomerAccountShare * * *");
            self::OutputStatusMessage(sprintf("AccountId: %s", $dataObject->AccountId));
            self::OutputStatusMessage("Associations:");
            self::OutputArrayOfCustomerAccountShareAssociation($dataObject->Associations);
            self::OutputStatusMessage(sprintf("CustomerId: %s", $dataObject->CustomerId));
            self::OutputStatusMessage("* * * End OutputCustomerAccountShare * * *");
        }
    }
    static function OutputArrayOfCustomerAccountShare($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CustomerAccountShare))
        {
            return;
        }
        foreach ($dataObjects->CustomerAccountShare as $dataObject)
        {
            self::OutputCustomerAccountShare($dataObject);
        }
    }
    static function OutputCustomerAccountShareAssociation($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCustomerAccountShareAssociation * * *");
            self::OutputStatusMessage(sprintf("AssociationCount: %s", $dataObject->AssociationCount));
            self::OutputStatusMessage(sprintf("UsageType: %s", $dataObject->UsageType));
            self::OutputStatusMessage("* * * End OutputCustomerAccountShareAssociation * * *");
        }
    }
    static function OutputArrayOfCustomerAccountShareAssociation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CustomerAccountShareAssociation))
        {
            return;
        }
        foreach ($dataObjects->CustomerAccountShareAssociation as $dataObject)
        {
            self::OutputCustomerAccountShareAssociation($dataObject);
        }
    }
    static function OutputCustomerShare($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCustomerShare * * *");
            self::OutputStatusMessage("CustomerAccountShares:");
            self::OutputArrayOfCustomerAccountShare($dataObject->CustomerAccountShares);
            self::OutputStatusMessage(sprintf("OwnerCustomerId: %s", $dataObject->OwnerCustomerId));
            self::OutputStatusMessage("* * * End OutputCustomerShare * * *");
        }
    }
    static function OutputArrayOfCustomerShare($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CustomerShare))
        {
            return;
        }
        foreach ($dataObjects->CustomerShare as $dataObject)
        {
            self::OutputCustomerShare($dataObject);
        }
    }
    static function OutputCustomEventsRule($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCustomEventsRule * * *");
            self::OutputStatusMessage(sprintf("Action: %s", $dataObject->Action));
            self::OutputStatusMessage(sprintf("ActionOperator: %s", $dataObject->ActionOperator));
            self::OutputStatusMessage(sprintf("Category: %s", $dataObject->Category));
            self::OutputStatusMessage(sprintf("CategoryOperator: %s", $dataObject->CategoryOperator));
            self::OutputStatusMessage(sprintf("Label: %s", $dataObject->Label));
            self::OutputStatusMessage(sprintf("LabelOperator: %s", $dataObject->LabelOperator));
            self::OutputStatusMessage(sprintf("Value: %s", $dataObject->Value));
            self::OutputStatusMessage(sprintf("ValueOperator: %s", $dataObject->ValueOperator));
            self::OutputStatusMessage("* * * End OutputCustomEventsRule * * *");
        }
    }
    static function OutputArrayOfCustomEventsRule($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CustomEventsRule))
        {
            return;
        }
        foreach ($dataObjects->CustomEventsRule as $dataObject)
        {
            self::OutputCustomEventsRule($dataObject);
        }
    }
    static function OutputCustomParameter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCustomParameter * * *");
            self::OutputStatusMessage(sprintf("Key: %s", $dataObject->Key));
            self::OutputStatusMessage(sprintf("Value: %s", $dataObject->Value));
            self::OutputStatusMessage("* * * End OutputCustomParameter * * *");
        }
    }
    static function OutputArrayOfCustomParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CustomParameter))
        {
            return;
        }
        foreach ($dataObjects->CustomParameter as $dataObject)
        {
            self::OutputCustomParameter($dataObject);
        }
    }
    static function OutputCustomParameters($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCustomParameters * * *");
            self::OutputStatusMessage("Parameters:");
            self::OutputArrayOfCustomParameter($dataObject->Parameters);
            self::OutputStatusMessage("* * * End OutputCustomParameters * * *");
        }
    }
    static function OutputArrayOfCustomParameters($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CustomParameters))
        {
            return;
        }
        foreach ($dataObjects->CustomParameters as $dataObject)
        {
            self::OutputCustomParameters($dataObject);
        }
    }
    static function OutputDate($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDate * * *");
            self::OutputStatusMessage(sprintf("Day: %s", $dataObject->Day));
            self::OutputStatusMessage(sprintf("Month: %s", $dataObject->Month));
            self::OutputStatusMessage(sprintf("Year: %s", $dataObject->Year));
            self::OutputStatusMessage("* * * End OutputDate * * *");
        }
    }
    static function OutputArrayOfDate($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Date))
        {
            return;
        }
        foreach ($dataObjects->Date as $dataObject)
        {
            self::OutputDate($dataObject);
        }
    }
    static function OutputDayTime($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDayTime * * *");
            self::OutputStatusMessage(sprintf("Day: %s", $dataObject->Day));
            self::OutputStatusMessage(sprintf("EndHour: %s", $dataObject->EndHour));
            self::OutputStatusMessage(sprintf("EndMinute: %s", $dataObject->EndMinute));
            self::OutputStatusMessage(sprintf("StartHour: %s", $dataObject->StartHour));
            self::OutputStatusMessage(sprintf("StartMinute: %s", $dataObject->StartMinute));
            self::OutputStatusMessage("* * * End OutputDayTime * * *");
        }
    }
    static function OutputArrayOfDayTime($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DayTime))
        {
            return;
        }
        foreach ($dataObjects->DayTime as $dataObject)
        {
            self::OutputDayTime($dataObject);
        }
    }
    static function OutputDayTimeCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDayTimeCriterion * * *");
            self::OutputStatusMessage(sprintf("Day: %s", $dataObject->Day));
            self::OutputStatusMessage(sprintf("FromHour: %s", $dataObject->FromHour));
            self::OutputStatusMessage(sprintf("FromMinute: %s", $dataObject->FromMinute));
            self::OutputStatusMessage(sprintf("ToHour: %s", $dataObject->ToHour));
            self::OutputStatusMessage(sprintf("ToMinute: %s", $dataObject->ToMinute));
            self::OutputStatusMessage("* * * End OutputDayTimeCriterion * * *");
        }
    }
    static function OutputArrayOfDayTimeCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DayTimeCriterion))
        {
            return;
        }
        foreach ($dataObjects->DayTimeCriterion as $dataObject)
        {
            self::OutputDayTimeCriterion($dataObject);
        }
    }
    static function OutputDeviceCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDeviceCriterion * * *");
            self::OutputStatusMessage(sprintf("DeviceName: %s", $dataObject->DeviceName));
            self::OutputStatusMessage(sprintf("OSName: %s", $dataObject->OSName));
            self::OutputStatusMessage("* * * End OutputDeviceCriterion * * *");
        }
    }
    static function OutputArrayOfDeviceCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DeviceCriterion))
        {
            return;
        }
        foreach ($dataObjects->DeviceCriterion as $dataObject)
        {
            self::OutputDeviceCriterion($dataObject);
        }
    }
    static function OutputDurationGoal($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDurationGoal * * *");
            self::OutputStatusMessage(sprintf("MinimumDurationInSeconds: %s", $dataObject->MinimumDurationInSeconds));
            self::OutputStatusMessage("* * * End OutputDurationGoal * * *");
        }
    }
    static function OutputArrayOfDurationGoal($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DurationGoal))
        {
            return;
        }
        foreach ($dataObjects->DurationGoal as $dataObject)
        {
            self::OutputDurationGoal($dataObject);
        }
    }
    static function OutputDynamicFeedSetting($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDynamicFeedSetting * * *");
            self::OutputStatusMessage(sprintf("FeedId: %s", $dataObject->FeedId));
            self::OutputStatusMessage("* * * End OutputDynamicFeedSetting * * *");
        }
    }
    static function OutputArrayOfDynamicFeedSetting($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DynamicFeedSetting))
        {
            return;
        }
        foreach ($dataObjects->DynamicFeedSetting as $dataObject)
        {
            self::OutputDynamicFeedSetting($dataObject);
        }
    }
    static function OutputDynamicSearchAd($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDynamicSearchAd * * *");
            self::OutputStatusMessage(sprintf("Path1: %s", $dataObject->Path1));
            self::OutputStatusMessage(sprintf("Path2: %s", $dataObject->Path2));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
            self::OutputStatusMessage(sprintf("TextPart2: %s", $dataObject->TextPart2));
            self::OutputStatusMessage("* * * End OutputDynamicSearchAd * * *");
        }
    }
    static function OutputArrayOfDynamicSearchAd($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DynamicSearchAd))
        {
            return;
        }
        foreach ($dataObjects->DynamicSearchAd as $dataObject)
        {
            self::OutputDynamicSearchAd($dataObject);
        }
    }
    static function OutputDynamicSearchAdsSetting($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDynamicSearchAdsSetting * * *");
            self::OutputStatusMessage(sprintf("DomainName: %s", $dataObject->DomainName));
            self::OutputStatusMessage(sprintf("DynamicDescriptionEnabled: %s", $dataObject->DynamicDescriptionEnabled));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("PageFeedIds:");
            self::OutputArrayOfLong($dataObject->PageFeedIds);
            self::OutputStatusMessage(sprintf("Source: %s", $dataObject->Source));
            self::OutputStatusMessage("* * * End OutputDynamicSearchAdsSetting * * *");
        }
    }
    static function OutputArrayOfDynamicSearchAdsSetting($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DynamicSearchAdsSetting))
        {
            return;
        }
        foreach ($dataObjects->DynamicSearchAdsSetting as $dataObject)
        {
            self::OutputDynamicSearchAdsSetting($dataObject);
        }
    }
    static function OutputEditorialApiFaultDetail($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputEditorialApiFaultDetail * * *");
            self::OutputStatusMessage("BatchErrors:");
            self::OutputArrayOfBatchError($dataObject->BatchErrors);
            self::OutputStatusMessage("EditorialErrors:");
            self::OutputArrayOfEditorialError($dataObject->EditorialErrors);
            self::OutputStatusMessage("OperationErrors:");
            self::OutputArrayOfOperationError($dataObject->OperationErrors);
            self::OutputStatusMessage("* * * End OutputEditorialApiFaultDetail * * *");
        }
    }
    static function OutputArrayOfEditorialApiFaultDetail($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EditorialApiFaultDetail))
        {
            return;
        }
        foreach ($dataObjects->EditorialApiFaultDetail as $dataObject)
        {
            self::OutputEditorialApiFaultDetail($dataObject);
        }
    }
    static function OutputEditorialError($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputEditorialError * * *");
            self::OutputStatusMessage(sprintf("Appealable: %s", $dataObject->Appealable));
            self::OutputStatusMessage(sprintf("DisapprovedText: %s", $dataObject->DisapprovedText));
            self::OutputStatusMessage(sprintf("Location: %s", $dataObject->Location));
            self::OutputStatusMessage(sprintf("PublisherCountry: %s", $dataObject->PublisherCountry));
            self::OutputStatusMessage(sprintf("ReasonCode: %s", $dataObject->ReasonCode));
            self::OutputStatusMessage("* * * End OutputEditorialError * * *");
        }
    }
    static function OutputArrayOfEditorialError($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EditorialError))
        {
            return;
        }
        else if (!is_array($dataObjects->EditorialError))
        {
            self::OutputEditorialError($dataObjects->EditorialError);
            return;
        }
        foreach ($dataObjects->EditorialError as $dataObject)
        {
            self::OutputEditorialError($dataObject);
        }
    }
    static function OutputEditorialErrorCollection($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputEditorialErrorCollection * * *");
            self::OutputStatusMessage(sprintf("Appealable: %s", $dataObject->Appealable));
            self::OutputStatusMessage(sprintf("DisapprovedText: %s", $dataObject->DisapprovedText));
            self::OutputStatusMessage(sprintf("Location: %s", $dataObject->Location));
            self::OutputStatusMessage(sprintf("PublisherCountry: %s", $dataObject->PublisherCountry));
            self::OutputStatusMessage(sprintf("ReasonCode: %s", $dataObject->ReasonCode));
            self::OutputStatusMessage("* * * End OutputEditorialErrorCollection * * *");
        }
    }
    static function OutputArrayOfEditorialErrorCollection($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EditorialErrorCollection))
        {
            return;
        }
        else if (!is_array($dataObjects->EditorialErrorCollection))
        {
            self::OutputEditorialErrorCollection($dataObjects->EditorialErrorCollection);
            return;
        }
        foreach ($dataObjects->EditorialErrorCollection as $dataObject)
        {
            self::OutputEditorialErrorCollection($dataObject);
        }
    }
    static function OutputEditorialReason($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputEditorialReason * * *");
            self::OutputStatusMessage(sprintf("Location: %s", $dataObject->Location));
            self::OutputStatusMessage("PublisherCountries:");
            self::OutputArrayOfString($dataObject->PublisherCountries);
            self::OutputStatusMessage(sprintf("ReasonCode: %s", $dataObject->ReasonCode));
            self::OutputStatusMessage(sprintf("Term: %s", $dataObject->Term));
            self::OutputStatusMessage("* * * End OutputEditorialReason * * *");
        }
    }
    static function OutputArrayOfEditorialReason($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EditorialReason))
        {
            return;
        }
        foreach ($dataObjects->EditorialReason as $dataObject)
        {
            self::OutputEditorialReason($dataObject);
        }
    }
    static function OutputEditorialReasonCollection($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputEditorialReasonCollection * * *");
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
            self::OutputStatusMessage(sprintf("AdOrKeywordId: %s", $dataObject->AdOrKeywordId));
            self::OutputStatusMessage(sprintf("AppealStatus: %s", $dataObject->AppealStatus));
            self::OutputStatusMessage("Reasons:");
            self::OutputArrayOfEditorialReason($dataObject->Reasons);
            self::OutputStatusMessage("* * * End OutputEditorialReasonCollection * * *");
        }
    }
    static function OutputArrayOfEditorialReasonCollection($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EditorialReasonCollection))
        {
            return;
        }
        foreach ($dataObjects->EditorialReasonCollection as $dataObject)
        {
            self::OutputEditorialReasonCollection($dataObject);
        }
    }
    static function OutputEnhancedCpcBiddingScheme($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputEnhancedCpcBiddingScheme * * *");
            self::OutputStatusMessage("* * * End OutputEnhancedCpcBiddingScheme * * *");
        }
    }
    static function OutputArrayOfEnhancedCpcBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EnhancedCpcBiddingScheme))
        {
            return;
        }
        foreach ($dataObjects->EnhancedCpcBiddingScheme as $dataObject)
        {
            self::OutputEnhancedCpcBiddingScheme($dataObject);
        }
    }
    static function OutputEntityIdToParentIdAssociation($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputEntityIdToParentIdAssociation * * *");
            self::OutputStatusMessage(sprintf("EntityId: %s", $dataObject->EntityId));
            self::OutputStatusMessage(sprintf("ParentId: %s", $dataObject->ParentId));
            self::OutputStatusMessage("* * * End OutputEntityIdToParentIdAssociation * * *");
        }
    }
    static function OutputArrayOfEntityIdToParentIdAssociation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EntityIdToParentIdAssociation))
        {
            return;
        }
        foreach ($dataObjects->EntityIdToParentIdAssociation as $dataObject)
        {
            self::OutputEntityIdToParentIdAssociation($dataObject);
        }
    }
    static function OutputEntityNegativeKeyword($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputEntityNegativeKeyword * * *");
            self::OutputStatusMessage(sprintf("EntityId: %s", $dataObject->EntityId));
            self::OutputStatusMessage(sprintf("EntityType: %s", $dataObject->EntityType));
            self::OutputStatusMessage("NegativeKeywords:");
            self::OutputArrayOfNegativeKeyword($dataObject->NegativeKeywords);
            self::OutputStatusMessage("* * * End OutputEntityNegativeKeyword * * *");
        }
    }
    static function OutputArrayOfEntityNegativeKeyword($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EntityNegativeKeyword))
        {
            return;
        }
        foreach ($dataObjects->EntityNegativeKeyword as $dataObject)
        {
            self::OutputEntityNegativeKeyword($dataObject);
        }
    }
    static function OutputEventGoal($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputEventGoal * * *");
            self::OutputStatusMessage(sprintf("ActionExpression: %s", $dataObject->ActionExpression));
            self::OutputStatusMessage(sprintf("ActionOperator: %s", $dataObject->ActionOperator));
            self::OutputStatusMessage(sprintf("CategoryExpression: %s", $dataObject->CategoryExpression));
            self::OutputStatusMessage(sprintf("CategoryOperator: %s", $dataObject->CategoryOperator));
            self::OutputStatusMessage(sprintf("LabelExpression: %s", $dataObject->LabelExpression));
            self::OutputStatusMessage(sprintf("LabelOperator: %s", $dataObject->LabelOperator));
            self::OutputStatusMessage(sprintf("Value: %s", $dataObject->Value));
            self::OutputStatusMessage(sprintf("ValueOperator: %s", $dataObject->ValueOperator));
            self::OutputStatusMessage("* * * End OutputEventGoal * * *");
        }
    }
    static function OutputArrayOfEventGoal($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EventGoal))
        {
            return;
        }
        foreach ($dataObjects->EventGoal as $dataObject)
        {
            self::OutputEventGoal($dataObject);
        }
    }
    static function OutputExpandedTextAd($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputExpandedTextAd * * *");
            self::OutputStatusMessage(sprintf("Domain: %s", $dataObject->Domain));
            self::OutputStatusMessage(sprintf("Path1: %s", $dataObject->Path1));
            self::OutputStatusMessage(sprintf("Path2: %s", $dataObject->Path2));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
            self::OutputStatusMessage(sprintf("TextPart2: %s", $dataObject->TextPart2));
            self::OutputStatusMessage(sprintf("TitlePart1: %s", $dataObject->TitlePart1));
            self::OutputStatusMessage(sprintf("TitlePart2: %s", $dataObject->TitlePart2));
            self::OutputStatusMessage(sprintf("TitlePart3: %s", $dataObject->TitlePart3));
            self::OutputStatusMessage("* * * End OutputExpandedTextAd * * *");
        }
    }
    static function OutputArrayOfExpandedTextAd($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ExpandedTextAd))
        {
            return;
        }
        foreach ($dataObjects->ExpandedTextAd as $dataObject)
        {
            self::OutputExpandedTextAd($dataObject);
        }
    }
    static function OutputExperiment($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputExperiment * * *");
            self::OutputStatusMessage(sprintf("BaseCampaignId: %s", $dataObject->BaseCampaignId));
            self::OutputStatusMessage("EndDate:");
            self::OutputDate($dataObject->EndDate);
            self::OutputStatusMessage(sprintf("ExperimentCampaignId: %s", $dataObject->ExperimentCampaignId));
            self::OutputStatusMessage(sprintf("ExperimentStatus: %s", $dataObject->ExperimentStatus));
            self::OutputStatusMessage(sprintf("ExperimentType: %s", $dataObject->ExperimentType));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage("StartDate:");
            self::OutputDate($dataObject->StartDate);
            self::OutputStatusMessage(sprintf("TrafficSplitPercent: %s", $dataObject->TrafficSplitPercent));
            self::OutputStatusMessage("* * * End OutputExperiment * * *");
        }
    }
    static function OutputArrayOfExperiment($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Experiment))
        {
            return;
        }
        foreach ($dataObjects->Experiment as $dataObject)
        {
            self::OutputExperiment($dataObject);
        }
    }
    static function OutputFileImportJob($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputFileImportJob * * *");
            self::OutputStatusMessage(sprintf("FileSource: %s", $dataObject->FileSource));
            self::OutputStatusMessage(sprintf("FileUrl: %s", $dataObject->FileUrl));
            self::OutputStatusMessage("* * * End OutputFileImportJob * * *");
        }
    }
    static function OutputArrayOfFileImportJob($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->FileImportJob))
        {
            return;
        }
        foreach ($dataObjects->FileImportJob as $dataObject)
        {
            self::OutputFileImportJob($dataObject);
        }
    }
    static function OutputFileImportOption($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputFileImportOption * * *");
            self::OutputStatusMessage("* * * End OutputFileImportOption * * *");
        }
    }
    static function OutputArrayOfFileImportOption($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->FileImportOption))
        {
            return;
        }
        foreach ($dataObjects->FileImportOption as $dataObject)
        {
            self::OutputFileImportOption($dataObject);
        }
    }
    static function OutputFilterLinkAdExtension($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputFilterLinkAdExtension * * *");
            self::OutputStatusMessage(sprintf("AdExtensionHeaderType: %s", $dataObject->AdExtensionHeaderType));
            self::OutputStatusMessage("FinalMobileUrls:");
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputStatusMessage(sprintf("FinalUrlSuffix: %s", $dataObject->FinalUrlSuffix));
            self::OutputStatusMessage("FinalUrls:");
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("Texts:");
            self::OutputArrayOfString($dataObject->Texts);
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputStatusMessage("UrlCustomParameters:");
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
            self::OutputStatusMessage("* * * End OutputFilterLinkAdExtension * * *");
        }
    }
    static function OutputArrayOfFilterLinkAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->FilterLinkAdExtension))
        {
            return;
        }
        foreach ($dataObjects->FilterLinkAdExtension as $dataObject)
        {
            self::OutputFilterLinkAdExtension($dataObject);
        }
    }
    static function OutputFixedBid($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputFixedBid * * *");
            self::OutputStatusMessage(sprintf("Amount: %s", $dataObject->Amount));
            self::OutputStatusMessage("* * * End OutputFixedBid * * *");
        }
    }
    static function OutputArrayOfFixedBid($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->FixedBid))
        {
            return;
        }
        foreach ($dataObjects->FixedBid as $dataObject)
        {
            self::OutputFixedBid($dataObject);
        }
    }
    static function OutputFlyerAdExtension($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputFlyerAdExtension * * *");
            self::OutputStatusMessage(sprintf("Description: %s", $dataObject->Description));
            self::OutputStatusMessage("FinalAppUrls:");
            self::OutputArrayOfAppUrl($dataObject->FinalAppUrls);
            self::OutputStatusMessage("FinalMobileUrls:");
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputStatusMessage(sprintf("FinalUrlSuffix: %s", $dataObject->FinalUrlSuffix));
            self::OutputStatusMessage("FinalUrls:");
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputStatusMessage(sprintf("FlyerName: %s", $dataObject->FlyerName));
            self::OutputStatusMessage("ImageMediaIds:");
            self::OutputArrayOfLong($dataObject->ImageMediaIds);
            self::OutputStatusMessage("ImageMediaUrls:");
            self::OutputArrayOfString($dataObject->ImageMediaUrls);
            self::OutputStatusMessage(sprintf("StoreId: %s", $dataObject->StoreId));
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputStatusMessage("UrlCustomParameters:");
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
            self::OutputStatusMessage("* * * End OutputFlyerAdExtension * * *");
        }
    }
    static function OutputArrayOfFlyerAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->FlyerAdExtension))
        {
            return;
        }
        foreach ($dataObjects->FlyerAdExtension as $dataObject)
        {
            self::OutputFlyerAdExtension($dataObject);
        }
    }
    static function OutputFrequency($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputFrequency * * *");
            self::OutputStatusMessage(sprintf("Cron: %s", $dataObject->Cron));
            self::OutputStatusMessage(sprintf("TimeZone: %s", $dataObject->TimeZone));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            self::OutputStatusMessage("* * * End OutputFrequency * * *");
        }
    }
    static function OutputArrayOfFrequency($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Frequency))
        {
            return;
        }
        foreach ($dataObjects->Frequency as $dataObject)
        {
            self::OutputFrequency($dataObject);
        }
    }
    static function OutputGenderCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputGenderCriterion * * *");
            self::OutputStatusMessage(sprintf("GenderType: %s", $dataObject->GenderType));
            self::OutputStatusMessage("* * * End OutputGenderCriterion * * *");
        }
    }
    static function OutputArrayOfGenderCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->GenderCriterion))
        {
            return;
        }
        foreach ($dataObjects->GenderCriterion as $dataObject)
        {
            self::OutputGenderCriterion($dataObject);
        }
    }
    static function OutputGeoPoint($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputGeoPoint * * *");
            self::OutputStatusMessage(sprintf("LatitudeInMicroDegrees: %s", $dataObject->LatitudeInMicroDegrees));
            self::OutputStatusMessage(sprintf("LongitudeInMicroDegrees: %s", $dataObject->LongitudeInMicroDegrees));
            self::OutputStatusMessage("* * * End OutputGeoPoint * * *");
        }
    }
    static function OutputArrayOfGeoPoint($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->GeoPoint))
        {
            return;
        }
        foreach ($dataObjects->GeoPoint as $dataObject)
        {
            self::OutputGeoPoint($dataObject);
        }
    }
    static function OutputGoogleImportJob($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputGoogleImportJob * * *");
            self::OutputStatusMessage("CampaignAdGroupIds:");
            self::OutputArrayOfCampaignAdGroupIds($dataObject->CampaignAdGroupIds);
            self::OutputStatusMessage(sprintf("CredentialId: %s", $dataObject->CredentialId));
            self::OutputStatusMessage(sprintf("GoogleAccountId: %s", $dataObject->GoogleAccountId));
            self::OutputStatusMessage(sprintf("GoogleUserName: %s", $dataObject->GoogleUserName));
            self::OutputStatusMessage("* * * End OutputGoogleImportJob * * *");
        }
    }
    static function OutputArrayOfGoogleImportJob($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->GoogleImportJob))
        {
            return;
        }
        foreach ($dataObjects->GoogleImportJob as $dataObject)
        {
            self::OutputGoogleImportJob($dataObject);
        }
    }
    static function OutputGoogleImportOption($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputGoogleImportOption * * *");
            self::OutputStatusMessage(sprintf("AccountUrlOptions: %s", $dataObject->AccountUrlOptions));
            self::OutputStatusMessage(sprintf("AdjustmentForBids: %s", $dataObject->AdjustmentForBids));
            self::OutputStatusMessage(sprintf("AdjustmentForCampaignBudgets: %s", $dataObject->AdjustmentForCampaignBudgets));
            self::OutputStatusMessage(sprintf("AssociatedStoreId: %s", $dataObject->AssociatedStoreId));
            self::OutputStatusMessage(sprintf("AssociatedUetTagId: %s", $dataObject->AssociatedUetTagId));
            self::OutputStatusMessage(sprintf("AutoDeviceBidOptimization: %s", $dataObject->AutoDeviceBidOptimization));
            self::OutputStatusMessage(sprintf("DeleteRemovedEntities: %s", $dataObject->DeleteRemovedEntities));
            self::OutputStatusMessage(sprintf("EnableAutoCurrencyConversion: %s", $dataObject->EnableAutoCurrencyConversion));
            self::OutputStatusMessage(sprintf("EnableParentLocationMapping: %s", $dataObject->EnableParentLocationMapping));
            self::OutputStatusMessage(sprintf("NewActiveAdsForExistingAdGroups: %s", $dataObject->NewActiveAdsForExistingAdGroups));
            self::OutputStatusMessage(sprintf("NewActiveCampaignsAndChildEntities: %s", $dataObject->NewActiveCampaignsAndChildEntities));
            self::OutputStatusMessage(sprintf("NewAdCustomizerFeeds: %s", $dataObject->NewAdCustomizerFeeds));
            self::OutputStatusMessage(sprintf("NewAdGroupsAndChildEntitiesForExistingCampaigns: %s", $dataObject->NewAdGroupsAndChildEntitiesForExistingCampaigns));
            self::OutputStatusMessage(sprintf("NewAdSchedules: %s", $dataObject->NewAdSchedules));
            self::OutputStatusMessage(sprintf("NewAppAdExtensions: %s", $dataObject->NewAppAdExtensions));
            self::OutputStatusMessage(sprintf("NewAudienceTargets: %s", $dataObject->NewAudienceTargets));
            self::OutputStatusMessage(sprintf("NewCallAdExtensions: %s", $dataObject->NewCallAdExtensions));
            self::OutputStatusMessage(sprintf("NewCalloutAdExtensions: %s", $dataObject->NewCalloutAdExtensions));
            self::OutputStatusMessage(sprintf("NewDemographicTargets: %s", $dataObject->NewDemographicTargets));
            self::OutputStatusMessage(sprintf("NewDeviceTargets: %s", $dataObject->NewDeviceTargets));
            self::OutputStatusMessage(sprintf("NewEntities: %s", $dataObject->NewEntities));
            self::OutputStatusMessage(sprintf("NewKeywordUrls: %s", $dataObject->NewKeywordUrls));
            self::OutputStatusMessage(sprintf("NewKeywordsForExistingAdGroups: %s", $dataObject->NewKeywordsForExistingAdGroups));
            self::OutputStatusMessage(sprintf("NewLabels: %s", $dataObject->NewLabels));
            self::OutputStatusMessage(sprintf("NewLocationAdExtensions: %s", $dataObject->NewLocationAdExtensions));
            self::OutputStatusMessage(sprintf("NewLocationTargets: %s", $dataObject->NewLocationTargets));
            self::OutputStatusMessage(sprintf("NewNegativeKeywordLists: %s", $dataObject->NewNegativeKeywordLists));
            self::OutputStatusMessage(sprintf("NewNegativeKeywordsForExistingParents: %s", $dataObject->NewNegativeKeywordsForExistingParents));
            self::OutputStatusMessage(sprintf("NewNegativeSites: %s", $dataObject->NewNegativeSites));
            self::OutputStatusMessage(sprintf("NewPageFeeds: %s", $dataObject->NewPageFeeds));
            self::OutputStatusMessage(sprintf("NewPausedAdsForExistingAdGroups: %s", $dataObject->NewPausedAdsForExistingAdGroups));
            self::OutputStatusMessage(sprintf("NewPausedCampaignsAndChildEntities: %s", $dataObject->NewPausedCampaignsAndChildEntities));
            self::OutputStatusMessage(sprintf("NewPriceAdExtensions: %s", $dataObject->NewPriceAdExtensions));
            self::OutputStatusMessage(sprintf("NewProductFilters: %s", $dataObject->NewProductFilters));
            self::OutputStatusMessage(sprintf("NewPromotionAdExtensions: %s", $dataObject->NewPromotionAdExtensions));
            self::OutputStatusMessage(sprintf("NewReviewAdExtensions: %s", $dataObject->NewReviewAdExtensions));
            self::OutputStatusMessage(sprintf("NewSitelinkAdExtensions: %s", $dataObject->NewSitelinkAdExtensions));
            self::OutputStatusMessage(sprintf("NewStructuredSnippetAdExtensions: %s", $dataObject->NewStructuredSnippetAdExtensions));
            self::OutputStatusMessage(sprintf("NewUrlOptions: %s", $dataObject->NewUrlOptions));
            self::OutputStatusMessage(sprintf("PauseCampaignsWithoutSupportedLocations: %s", $dataObject->PauseCampaignsWithoutSupportedLocations));
            self::OutputStatusMessage(sprintf("PauseNewCampaigns: %s", $dataObject->PauseNewCampaigns));
            self::OutputStatusMessage(sprintf("RaiseBidsToMinimum: %s", $dataObject->RaiseBidsToMinimum));
            self::OutputStatusMessage(sprintf("RaiseCampaignBudgetsToMinimum: %s", $dataObject->RaiseCampaignBudgetsToMinimum));
            self::OutputStatusMessage(sprintf("RaiseProductGroupBidsToMinimum: %s", $dataObject->RaiseProductGroupBidsToMinimum));
            self::OutputStatusMessage(sprintf("SearchAndDsaMixedCampaignAsSearchCampaign: %s", $dataObject->SearchAndDsaMixedCampaignAsSearchCampaign));
            self::OutputStatusMessage("SearchAndReplaceForCampaignNames:");
            self::OutputImportSearchAndReplaceForStringProperty($dataObject->SearchAndReplaceForCampaignNames);
            self::OutputStatusMessage("SearchAndReplaceForCustomParameters:");
            self::OutputImportSearchAndReplaceForStringProperty($dataObject->SearchAndReplaceForCustomParameters);
            self::OutputStatusMessage("SearchAndReplaceForTrackingTemplates:");
            self::OutputImportSearchAndReplaceForStringProperty($dataObject->SearchAndReplaceForTrackingTemplates);
            self::OutputStatusMessage("SearchAndReplaceForUrls:");
            self::OutputImportSearchAndReplaceForStringProperty($dataObject->SearchAndReplaceForUrls);
            self::OutputStatusMessage(sprintf("SuffixForCampaignNames: %s", $dataObject->SuffixForCampaignNames));
            self::OutputStatusMessage(sprintf("SuffixForTrackingTemplates: %s", $dataObject->SuffixForTrackingTemplates));
            self::OutputStatusMessage(sprintf("SuffixForUrls: %s", $dataObject->SuffixForUrls));
            self::OutputStatusMessage(sprintf("UpdateAdCustomizerFeeds: %s", $dataObject->UpdateAdCustomizerFeeds));
            self::OutputStatusMessage(sprintf("UpdateAdGroupNetwork: %s", $dataObject->UpdateAdGroupNetwork));
            self::OutputStatusMessage(sprintf("UpdateAdSchedules: %s", $dataObject->UpdateAdSchedules));
            self::OutputStatusMessage(sprintf("UpdateAppAdExtensions: %s", $dataObject->UpdateAppAdExtensions));
            self::OutputStatusMessage(sprintf("UpdateAudienceTargets: %s", $dataObject->UpdateAudienceTargets));
            self::OutputStatusMessage(sprintf("UpdateBiddingStrategies: %s", $dataObject->UpdateBiddingStrategies));
            self::OutputStatusMessage(sprintf("UpdateBids: %s", $dataObject->UpdateBids));
            self::OutputStatusMessage(sprintf("UpdateCallAdExtensions: %s", $dataObject->UpdateCallAdExtensions));
            self::OutputStatusMessage(sprintf("UpdateCalloutAdExtensions: %s", $dataObject->UpdateCalloutAdExtensions));
            self::OutputStatusMessage(sprintf("UpdateCampaignAdGroupLanguages: %s", $dataObject->UpdateCampaignAdGroupLanguages));
            self::OutputStatusMessage(sprintf("UpdateCampaignBudgets: %s", $dataObject->UpdateCampaignBudgets));
            self::OutputStatusMessage(sprintf("UpdateCampaignNames: %s", $dataObject->UpdateCampaignNames));
            self::OutputStatusMessage(sprintf("UpdateDemographicTargets: %s", $dataObject->UpdateDemographicTargets));
            self::OutputStatusMessage(sprintf("UpdateDeviceTargets: %s", $dataObject->UpdateDeviceTargets));
            self::OutputStatusMessage(sprintf("UpdateEntities: %s", $dataObject->UpdateEntities));
            self::OutputStatusMessage(sprintf("UpdateKeywordUrls: %s", $dataObject->UpdateKeywordUrls));
            self::OutputStatusMessage(sprintf("UpdateLabels: %s", $dataObject->UpdateLabels));
            self::OutputStatusMessage(sprintf("UpdateLocationAdExtensions: %s", $dataObject->UpdateLocationAdExtensions));
            self::OutputStatusMessage(sprintf("UpdateLocationTargets: %s", $dataObject->UpdateLocationTargets));
            self::OutputStatusMessage(sprintf("UpdateNegativeKeywordLists: %s", $dataObject->UpdateNegativeKeywordLists));
            self::OutputStatusMessage(sprintf("UpdateNegativeSites: %s", $dataObject->UpdateNegativeSites));
            self::OutputStatusMessage(sprintf("UpdatePageFeeds: %s", $dataObject->UpdatePageFeeds));
            self::OutputStatusMessage(sprintf("UpdatePriceAdExtensions: %s", $dataObject->UpdatePriceAdExtensions));
            self::OutputStatusMessage(sprintf("UpdateProductFilters: %s", $dataObject->UpdateProductFilters));
            self::OutputStatusMessage(sprintf("UpdatePromotionAdExtensions: %s", $dataObject->UpdatePromotionAdExtensions));
            self::OutputStatusMessage(sprintf("UpdateReviewAdExtensions: %s", $dataObject->UpdateReviewAdExtensions));
            self::OutputStatusMessage(sprintf("UpdateSitelinkAdExtensions: %s", $dataObject->UpdateSitelinkAdExtensions));
            self::OutputStatusMessage(sprintf("UpdateStatusForAdGroups: %s", $dataObject->UpdateStatusForAdGroups));
            self::OutputStatusMessage(sprintf("UpdateStatusForAds: %s", $dataObject->UpdateStatusForAds));
            self::OutputStatusMessage(sprintf("UpdateStatusForCampaigns: %s", $dataObject->UpdateStatusForCampaigns));
            self::OutputStatusMessage(sprintf("UpdateStatusForKeywords: %s", $dataObject->UpdateStatusForKeywords));
            self::OutputStatusMessage(sprintf("UpdateStructuredSnippetAdExtensions: %s", $dataObject->UpdateStructuredSnippetAdExtensions));
            self::OutputStatusMessage(sprintf("UpdateUrlOptions: %s", $dataObject->UpdateUrlOptions));
            self::OutputStatusMessage("* * * End OutputGoogleImportOption * * *");
        }
    }
    static function OutputArrayOfGoogleImportOption($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->GoogleImportOption))
        {
            return;
        }
        foreach ($dataObjects->GoogleImportOption as $dataObject)
        {
            self::OutputGoogleImportOption($dataObject);
        }
    }
    static function OutputIdCollection($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputIdCollection * * *");
            self::OutputStatusMessage("Ids:");
            self::OutputArrayOfLong($dataObject->Ids);
            self::OutputStatusMessage("* * * End OutputIdCollection * * *");
        }
    }
    static function OutputArrayOfIdCollection($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->IdCollection))
        {
            return;
        }
        foreach ($dataObjects->IdCollection as $dataObject)
        {
            self::OutputIdCollection($dataObject);
        }
    }
    static function OutputImage($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputImage * * *");
            self::OutputStatusMessage(sprintf("Data: %s", $dataObject->Data));
            self::OutputStatusMessage("* * * End OutputImage * * *");
        }
    }
    static function OutputArrayOfImage($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Image))
        {
            return;
        }
        foreach ($dataObjects->Image as $dataObject)
        {
            self::OutputImage($dataObject);
        }
    }
    static function OutputImageAdExtension($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputImageAdExtension * * *");
            self::OutputStatusMessage(sprintf("AlternativeText: %s", $dataObject->AlternativeText));
            self::OutputStatusMessage(sprintf("Description: %s", $dataObject->Description));
            self::OutputStatusMessage(sprintf("DestinationUrl: %s", $dataObject->DestinationUrl));
            self::OutputStatusMessage(sprintf("DisplayText: %s", $dataObject->DisplayText));
            self::OutputStatusMessage("FinalAppUrls:");
            self::OutputArrayOfAppUrl($dataObject->FinalAppUrls);
            self::OutputStatusMessage("FinalMobileUrls:");
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputStatusMessage(sprintf("FinalUrlSuffix: %s", $dataObject->FinalUrlSuffix));
            self::OutputStatusMessage("FinalUrls:");
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputStatusMessage("ImageMediaIds:");
            self::OutputArrayOfLong($dataObject->ImageMediaIds);
            self::OutputStatusMessage("Images:");
            self::OutputArrayOfAssetLink($dataObject->Images);
            self::OutputStatusMessage("Layouts:");
            self::OutputArrayOfString($dataObject->Layouts);
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputStatusMessage("UrlCustomParameters:");
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
            self::OutputStatusMessage("* * * End OutputImageAdExtension * * *");
        }
    }
    static function OutputArrayOfImageAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ImageAdExtension))
        {
            return;
        }
        foreach ($dataObjects->ImageAdExtension as $dataObject)
        {
            self::OutputImageAdExtension($dataObject);
        }
    }
    static function OutputImageAsset($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputImageAsset * * *");
            self::OutputStatusMessage(sprintf("CropHeight: %s", $dataObject->CropHeight));
            self::OutputStatusMessage(sprintf("CropWidth: %s", $dataObject->CropWidth));
            self::OutputStatusMessage(sprintf("CropX: %s", $dataObject->CropX));
            self::OutputStatusMessage(sprintf("CropY: %s", $dataObject->CropY));
            self::OutputStatusMessage(sprintf("SubType: %s", $dataObject->SubType));
            self::OutputStatusMessage("* * * End OutputImageAsset * * *");
        }
    }
    static function OutputArrayOfImageAsset($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ImageAsset))
        {
            return;
        }
        foreach ($dataObjects->ImageAsset as $dataObject)
        {
            self::OutputImageAsset($dataObject);
        }
    }
    static function OutputImageMediaRepresentation($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputImageMediaRepresentation * * *");
            self::OutputStatusMessage(sprintf("Height: %s", $dataObject->Height));
            self::OutputStatusMessage(sprintf("Width: %s", $dataObject->Width));
            self::OutputStatusMessage("* * * End OutputImageMediaRepresentation * * *");
        }
    }
    static function OutputArrayOfImageMediaRepresentation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ImageMediaRepresentation))
        {
            return;
        }
        foreach ($dataObjects->ImageMediaRepresentation as $dataObject)
        {
            self::OutputImageMediaRepresentation($dataObject);
        }
    }
    static function OutputImportEntityStatistics($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputImportEntityStatistics * * *");
            self::OutputStatusMessage(sprintf("Additions: %s", $dataObject->Additions));
            self::OutputStatusMessage(sprintf("Changes: %s", $dataObject->Changes));
            self::OutputStatusMessage(sprintf("Deletions: %s", $dataObject->Deletions));
            self::OutputStatusMessage(sprintf("EntityType: %s", $dataObject->EntityType));
            self::OutputStatusMessage(sprintf("Errors: %s", $dataObject->Errors));
            self::OutputStatusMessage(sprintf("Total: %s", $dataObject->Total));
            self::OutputStatusMessage("* * * End OutputImportEntityStatistics * * *");
        }
    }
    static function OutputArrayOfImportEntityStatistics($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ImportEntityStatistics))
        {
            return;
        }
        foreach ($dataObjects->ImportEntityStatistics as $dataObject)
        {
            self::OutputImportEntityStatistics($dataObject);
        }
    }
    static function OutputImportJob($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputImportJob * * *");
            self::OutputStatusMessage(sprintf("CreatedByUserId: %s", $dataObject->CreatedByUserId));
            self::OutputStatusMessage(sprintf("CreatedByUserName: %s", $dataObject->CreatedByUserName));
            self::OutputStatusMessage(sprintf("CreatedDateTimeInUTC: %s", $dataObject->CreatedDateTimeInUTC));
            self::OutputStatusMessage("Frequency:");
            self::OutputFrequency($dataObject->Frequency);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage("ImportOption:");
            self::OutputImportOption($dataObject->ImportOption);
            self::OutputStatusMessage(sprintf("LastRunTimeInUTC: %s", $dataObject->LastRunTimeInUTC));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("NotificationEmail: %s", $dataObject->NotificationEmail));
            self::OutputStatusMessage(sprintf("NotificationType: %s", $dataObject->NotificationType));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "FileImportJob")
            {
                self::OutputFileImportJob($dataObject);
            }
            if($dataObject->Type === "GoogleImportJob")
            {
                self::OutputGoogleImportJob($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputImportJob * * *");
        }
    }
    static function OutputArrayOfImportJob($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ImportJob))
        {
            return;
        }
        foreach ($dataObjects->ImportJob as $dataObject)
        {
            self::OutputImportJob($dataObject);
        }
    }
    static function OutputImportOption($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputImportOption * * *");
            self::OutputStatusMessage("ForwardCompatibilityMap:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "FileImportOption")
            {
                self::OutputFileImportOption($dataObject);
            }
            if($dataObject->Type === "GoogleImportOption")
            {
                self::OutputGoogleImportOption($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputImportOption * * *");
        }
    }
    static function OutputArrayOfImportOption($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ImportOption))
        {
            return;
        }
        foreach ($dataObjects->ImportOption as $dataObject)
        {
            self::OutputImportOption($dataObject);
        }
    }
    static function OutputImportResult($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputImportResult * * *");
            self::OutputStatusMessage("EntityStatistics:");
            self::OutputArrayOfImportEntityStatistics($dataObject->EntityStatistics);
            self::OutputStatusMessage(sprintf("ErrorLogUrl: %s", $dataObject->ErrorLogUrl));
            self::OutputStatusMessage("ForwardCompatibilityMap:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage("ImportJob:");
            self::OutputImportJob($dataObject->ImportJob);
            self::OutputStatusMessage(sprintf("StartTimeInUTC: %s", $dataObject->StartTimeInUTC));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage("* * * End OutputImportResult * * *");
        }
    }
    static function OutputArrayOfImportResult($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ImportResult))
        {
            return;
        }
        foreach ($dataObjects->ImportResult as $dataObject)
        {
            self::OutputImportResult($dataObject);
        }
    }
    static function OutputImportSearchAndReplaceForStringProperty($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputImportSearchAndReplaceForStringProperty * * *");
            self::OutputStatusMessage(sprintf("ReplaceString: %s", $dataObject->ReplaceString));
            self::OutputStatusMessage(sprintf("SearchString: %s", $dataObject->SearchString));
            self::OutputStatusMessage("* * * End OutputImportSearchAndReplaceForStringProperty * * *");
        }
    }
    static function OutputArrayOfImportSearchAndReplaceForStringProperty($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ImportSearchAndReplaceForStringProperty))
        {
            return;
        }
        foreach ($dataObjects->ImportSearchAndReplaceForStringProperty as $dataObject)
        {
            self::OutputImportSearchAndReplaceForStringProperty($dataObject);
        }
    }
    static function OutputInheritFromParentBiddingScheme($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputInheritFromParentBiddingScheme * * *");
            self::OutputStatusMessage(sprintf("InheritedBidStrategyType: %s", $dataObject->InheritedBidStrategyType));
            self::OutputStatusMessage("* * * End OutputInheritFromParentBiddingScheme * * *");
        }
    }
    static function OutputArrayOfInheritFromParentBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->InheritFromParentBiddingScheme))
        {
            return;
        }
        foreach ($dataObjects->InheritFromParentBiddingScheme as $dataObject)
        {
            self::OutputInheritFromParentBiddingScheme($dataObject);
        }
    }
    static function OutputInMarketAudience($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputInMarketAudience * * *");
            self::OutputStatusMessage("* * * End OutputInMarketAudience * * *");
        }
    }
    static function OutputArrayOfInMarketAudience($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->InMarketAudience))
        {
            return;
        }
        foreach ($dataObjects->InMarketAudience as $dataObject)
        {
            self::OutputInMarketAudience($dataObject);
        }
    }
    static function OutputInStoreTransactionGoal($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputInStoreTransactionGoal * * *");
            self::OutputStatusMessage("* * * End OutputInStoreTransactionGoal * * *");
        }
    }
    static function OutputArrayOfInStoreTransactionGoal($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->InStoreTransactionGoal))
        {
            return;
        }
        foreach ($dataObjects->InStoreTransactionGoal as $dataObject)
        {
            self::OutputInStoreTransactionGoal($dataObject);
        }
    }
    static function OutputKeyValuePairOflonglong($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeyValuePairOflonglong * * *");
            self::OutputStatusMessage(sprintf("key: %s", $dataObject->key));
            self::OutputStatusMessage(sprintf("value: %s", $dataObject->value));
            self::OutputStatusMessage("* * * End OutputKeyValuePairOflonglong * * *");
        }
    }
    static function OutputArrayOfKeyValuePairOflonglong($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeyValuePairOflonglong))
        {
            return;
        }
        foreach ($dataObjects->KeyValuePairOflonglong as $dataObject)
        {
            self::OutputKeyValuePairOflonglong($dataObject);
        }
    }
    static function OutputKeyValuePairOfstringstring($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeyValuePairOfstringstring * * *");
            self::OutputStatusMessage(sprintf("key: %s", $dataObject->key));
            self::OutputStatusMessage(sprintf("value: %s", $dataObject->value));
            self::OutputStatusMessage("* * * End OutputKeyValuePairOfstringstring * * *");
        }
    }
    static function OutputArrayOfKeyValuePairOfstringstring($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeyValuePairOfstringstring))
        {
            return;
        }
        foreach ($dataObjects->KeyValuePairOfstringstring as $dataObject)
        {
            self::OutputKeyValuePairOfstringstring($dataObject);
        }
    }
    static function OutputKeyword($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeyword * * *");
            self::OutputStatusMessage("Bid:");
            self::OutputBid($dataObject->Bid);
            self::OutputStatusMessage("BiddingScheme:");
            self::OutputBiddingScheme($dataObject->BiddingScheme);
            self::OutputStatusMessage(sprintf("DestinationUrl: %s", $dataObject->DestinationUrl));
            self::OutputStatusMessage(sprintf("EditorialStatus: %s", $dataObject->EditorialStatus));
            self::OutputStatusMessage("FinalAppUrls:");
            self::OutputArrayOfAppUrl($dataObject->FinalAppUrls);
            self::OutputStatusMessage("FinalMobileUrls:");
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputStatusMessage(sprintf("FinalUrlSuffix: %s", $dataObject->FinalUrlSuffix));
            self::OutputStatusMessage("FinalUrls:");
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputStatusMessage("ForwardCompatibilityMap:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("MatchType: %s", $dataObject->MatchType));
            self::OutputStatusMessage(sprintf("Param1: %s", $dataObject->Param1));
            self::OutputStatusMessage(sprintf("Param2: %s", $dataObject->Param2));
            self::OutputStatusMessage(sprintf("Param3: %s", $dataObject->Param3));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputStatusMessage("UrlCustomParameters:");
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
            self::OutputStatusMessage("* * * End OutputKeyword * * *");
        }
    }
    static function OutputArrayOfKeyword($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Keyword))
        {
            return;
        }
        foreach ($dataObjects->Keyword as $dataObject)
        {
            self::OutputKeyword($dataObject);
        }
    }
    static function OutputLabel($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputLabel * * *");
            self::OutputStatusMessage(sprintf("ColorCode: %s", $dataObject->ColorCode));
            self::OutputStatusMessage(sprintf("Description: %s", $dataObject->Description));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage("* * * End OutputLabel * * *");
        }
    }
    static function OutputArrayOfLabel($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Label))
        {
            return;
        }
        foreach ($dataObjects->Label as $dataObject)
        {
            self::OutputLabel($dataObject);
        }
    }
    static function OutputLabelAssociation($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputLabelAssociation * * *");
            self::OutputStatusMessage(sprintf("EntityId: %s", $dataObject->EntityId));
            self::OutputStatusMessage(sprintf("LabelId: %s", $dataObject->LabelId));
            self::OutputStatusMessage("* * * End OutputLabelAssociation * * *");
        }
    }
    static function OutputArrayOfLabelAssociation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->LabelAssociation))
        {
            return;
        }
        foreach ($dataObjects->LabelAssociation as $dataObject)
        {
            self::OutputLabelAssociation($dataObject);
        }
    }
    static function OutputLocationAdExtension($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputLocationAdExtension * * *");
            self::OutputStatusMessage("Address:");
            self::OutputAddress($dataObject->Address);
            self::OutputStatusMessage(sprintf("CompanyName: %s", $dataObject->CompanyName));
            self::OutputStatusMessage(sprintf("GeoCodeStatus: %s", $dataObject->GeoCodeStatus));
            self::OutputStatusMessage("GeoPoint:");
            self::OutputGeoPoint($dataObject->GeoPoint);
            self::OutputStatusMessage(sprintf("PhoneNumber: %s", $dataObject->PhoneNumber));
            self::OutputStatusMessage("* * * End OutputLocationAdExtension * * *");
        }
    }
    static function OutputArrayOfLocationAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->LocationAdExtension))
        {
            return;
        }
        foreach ($dataObjects->LocationAdExtension as $dataObject)
        {
            self::OutputLocationAdExtension($dataObject);
        }
    }
    static function OutputLocationCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputLocationCriterion * * *");
            self::OutputStatusMessage(sprintf("DisplayName: %s", $dataObject->DisplayName));
            self::OutputStatusMessage("EnclosedLocationIds:");
            self::OutputArrayOfLong($dataObject->EnclosedLocationIds);
            self::OutputStatusMessage(sprintf("LocationId: %s", $dataObject->LocationId));
            self::OutputStatusMessage(sprintf("LocationType: %s", $dataObject->LocationType));
            self::OutputStatusMessage("* * * End OutputLocationCriterion * * *");
        }
    }
    static function OutputArrayOfLocationCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->LocationCriterion))
        {
            return;
        }
        foreach ($dataObjects->LocationCriterion as $dataObject)
        {
            self::OutputLocationCriterion($dataObject);
        }
    }
    static function OutputLocationIntentCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputLocationIntentCriterion * * *");
            self::OutputStatusMessage(sprintf("IntentOption: %s", $dataObject->IntentOption));
            self::OutputStatusMessage("* * * End OutputLocationIntentCriterion * * *");
        }
    }
    static function OutputArrayOfLocationIntentCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->LocationIntentCriterion))
        {
            return;
        }
        foreach ($dataObjects->LocationIntentCriterion as $dataObject)
        {
            self::OutputLocationIntentCriterion($dataObject);
        }
    }
    static function OutputManualCpcBiddingScheme($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputManualCpcBiddingScheme * * *");
            self::OutputStatusMessage("* * * End OutputManualCpcBiddingScheme * * *");
        }
    }
    static function OutputArrayOfManualCpcBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ManualCpcBiddingScheme))
        {
            return;
        }
        foreach ($dataObjects->ManualCpcBiddingScheme as $dataObject)
        {
            self::OutputManualCpcBiddingScheme($dataObject);
        }
    }
    static function OutputManualCpmBiddingScheme($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputManualCpmBiddingScheme * * *");
            self::OutputStatusMessage("* * * End OutputManualCpmBiddingScheme * * *");
        }
    }
    static function OutputArrayOfManualCpmBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ManualCpmBiddingScheme))
        {
            return;
        }
        foreach ($dataObjects->ManualCpmBiddingScheme as $dataObject)
        {
            self::OutputManualCpmBiddingScheme($dataObject);
        }
    }
    static function OutputManualCpvBiddingScheme($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputManualCpvBiddingScheme * * *");
            self::OutputStatusMessage("* * * End OutputManualCpvBiddingScheme * * *");
        }
    }
    static function OutputArrayOfManualCpvBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ManualCpvBiddingScheme))
        {
            return;
        }
        foreach ($dataObjects->ManualCpvBiddingScheme as $dataObject)
        {
            self::OutputManualCpvBiddingScheme($dataObject);
        }
    }
    static function OutputMaxClicksBiddingScheme($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputMaxClicksBiddingScheme * * *");
            self::OutputStatusMessage("MaxCpc:");
            self::OutputBid($dataObject->MaxCpc);
            self::OutputStatusMessage("* * * End OutputMaxClicksBiddingScheme * * *");
        }
    }
    static function OutputArrayOfMaxClicksBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->MaxClicksBiddingScheme))
        {
            return;
        }
        foreach ($dataObjects->MaxClicksBiddingScheme as $dataObject)
        {
            self::OutputMaxClicksBiddingScheme($dataObject);
        }
    }
    static function OutputMaxConversionsBiddingScheme($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputMaxConversionsBiddingScheme * * *");
            self::OutputStatusMessage("MaxCpc:");
            self::OutputBid($dataObject->MaxCpc);
            self::OutputStatusMessage("* * * End OutputMaxConversionsBiddingScheme * * *");
        }
    }
    static function OutputArrayOfMaxConversionsBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->MaxConversionsBiddingScheme))
        {
            return;
        }
        foreach ($dataObjects->MaxConversionsBiddingScheme as $dataObject)
        {
            self::OutputMaxConversionsBiddingScheme($dataObject);
        }
    }
    static function OutputMaxConversionValueBiddingScheme($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputMaxConversionValueBiddingScheme * * *");
            self::OutputStatusMessage(sprintf("TargetRoas: %s", $dataObject->TargetRoas));
            self::OutputStatusMessage("* * * End OutputMaxConversionValueBiddingScheme * * *");
        }
    }
    static function OutputArrayOfMaxConversionValueBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->MaxConversionValueBiddingScheme))
        {
            return;
        }
        foreach ($dataObjects->MaxConversionValueBiddingScheme as $dataObject)
        {
            self::OutputMaxConversionValueBiddingScheme($dataObject);
        }
    }
    static function OutputMaxRoasBiddingScheme($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputMaxRoasBiddingScheme * * *");
            self::OutputStatusMessage("MaxCpc:");
            self::OutputBid($dataObject->MaxCpc);
            self::OutputStatusMessage("* * * End OutputMaxRoasBiddingScheme * * *");
        }
    }
    static function OutputArrayOfMaxRoasBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->MaxRoasBiddingScheme))
        {
            return;
        }
        foreach ($dataObjects->MaxRoasBiddingScheme as $dataObject)
        {
            self::OutputMaxRoasBiddingScheme($dataObject);
        }
    }
    static function OutputMedia($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputMedia * * *");
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("MediaType: %s", $dataObject->MediaType));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "Image")
            {
                self::OutputImage($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputMedia * * *");
        }
    }
    static function OutputArrayOfMedia($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Media))
        {
            return;
        }
        foreach ($dataObjects->Media as $dataObject)
        {
            self::OutputMedia($dataObject);
        }
    }
    static function OutputMediaAssociation($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputMediaAssociation * * *");
            self::OutputStatusMessage(sprintf("EntityId: %s", $dataObject->EntityId));
            self::OutputStatusMessage(sprintf("MediaEnabledEntity: %s", $dataObject->MediaEnabledEntity));
            self::OutputStatusMessage(sprintf("MediaId: %s", $dataObject->MediaId));
            self::OutputStatusMessage("* * * End OutputMediaAssociation * * *");
        }
    }
    static function OutputArrayOfMediaAssociation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->MediaAssociation))
        {
            return;
        }
        foreach ($dataObjects->MediaAssociation as $dataObject)
        {
            self::OutputMediaAssociation($dataObject);
        }
    }
    static function OutputMediaMetaData($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputMediaMetaData * * *");
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("MediaType: %s", $dataObject->MediaType));
            self::OutputStatusMessage("Representations:");
            self::OutputArrayOfMediaRepresentation($dataObject->Representations);
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            self::OutputStatusMessage("* * * End OutputMediaMetaData * * *");
        }
    }
    static function OutputArrayOfMediaMetaData($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->MediaMetaData))
        {
            return;
        }
        foreach ($dataObjects->MediaMetaData as $dataObject)
        {
            self::OutputMediaMetaData($dataObject);
        }
    }
    static function OutputMediaRepresentation($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputMediaRepresentation * * *");
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            self::OutputStatusMessage(sprintf("Url: %s", $dataObject->Url));
            if($dataObject->Type === "ImageMediaRepresentation")
            {
                self::OutputImageMediaRepresentation($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputMediaRepresentation * * *");
        }
    }
    static function OutputArrayOfMediaRepresentation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->MediaRepresentation))
        {
            return;
        }
        foreach ($dataObjects->MediaRepresentation as $dataObject)
        {
            self::OutputMediaRepresentation($dataObject);
        }
    }
    static function OutputMigrationStatusInfo($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputMigrationStatusInfo * * *");
            self::OutputStatusMessage(sprintf("MigrationType: %s", $dataObject->MigrationType));
            self::OutputStatusMessage(sprintf("StartTimeInUtc: %s", $dataObject->StartTimeInUtc));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage("* * * End OutputMigrationStatusInfo * * *");
        }
    }
    static function OutputArrayOfMigrationStatusInfo($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->MigrationStatusInfo))
        {
            return;
        }
        foreach ($dataObjects->MigrationStatusInfo as $dataObject)
        {
            self::OutputMigrationStatusInfo($dataObject);
        }
    }
    static function OutputNegativeAdGroupCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputNegativeAdGroupCriterion * * *");
            self::OutputStatusMessage("* * * End OutputNegativeAdGroupCriterion * * *");
        }
    }
    static function OutputArrayOfNegativeAdGroupCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NegativeAdGroupCriterion))
        {
            return;
        }
        foreach ($dataObjects->NegativeAdGroupCriterion as $dataObject)
        {
            self::OutputNegativeAdGroupCriterion($dataObject);
        }
    }
    static function OutputNegativeCampaignCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputNegativeCampaignCriterion * * *");
            self::OutputStatusMessage("* * * End OutputNegativeCampaignCriterion * * *");
        }
    }
    static function OutputArrayOfNegativeCampaignCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NegativeCampaignCriterion))
        {
            return;
        }
        foreach ($dataObjects->NegativeCampaignCriterion as $dataObject)
        {
            self::OutputNegativeCampaignCriterion($dataObject);
        }
    }
    static function OutputNegativeKeyword($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputNegativeKeyword * * *");
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("MatchType: %s", $dataObject->MatchType));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
            self::OutputStatusMessage("* * * End OutputNegativeKeyword * * *");
        }
    }
    static function OutputArrayOfNegativeKeyword($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NegativeKeyword))
        {
            return;
        }
        foreach ($dataObjects->NegativeKeyword as $dataObject)
        {
            self::OutputNegativeKeyword($dataObject);
        }
    }
    static function OutputNegativeKeywordList($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputNegativeKeywordList * * *");
            self::OutputStatusMessage("* * * End OutputNegativeKeywordList * * *");
        }
    }
    static function OutputArrayOfNegativeKeywordList($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NegativeKeywordList))
        {
            return;
        }
        foreach ($dataObjects->NegativeKeywordList as $dataObject)
        {
            self::OutputNegativeKeywordList($dataObject);
        }
    }
    static function OutputNegativeSite($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputNegativeSite * * *");
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Url: %s", $dataObject->Url));
            self::OutputStatusMessage("* * * End OutputNegativeSite * * *");
        }
    }
    static function OutputArrayOfNegativeSite($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NegativeSite))
        {
            return;
        }
        foreach ($dataObjects->NegativeSite as $dataObject)
        {
            self::OutputNegativeSite($dataObject);
        }
    }
    static function OutputOfflineConversion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputOfflineConversion * * *");
            self::OutputStatusMessage(sprintf("ConversionCurrencyCode: %s", $dataObject->ConversionCurrencyCode));
            self::OutputStatusMessage(sprintf("ConversionName: %s", $dataObject->ConversionName));
            self::OutputStatusMessage(sprintf("ConversionTime: %s", $dataObject->ConversionTime));
            self::OutputStatusMessage(sprintf("ConversionValue: %s", $dataObject->ConversionValue));
            self::OutputStatusMessage(sprintf("ExternalAttributionCredit: %s", $dataObject->ExternalAttributionCredit));
            self::OutputStatusMessage(sprintf("ExternalAttributionModel: %s", $dataObject->ExternalAttributionModel));
            self::OutputStatusMessage(sprintf("MicrosoftClickId: %s", $dataObject->MicrosoftClickId));
            self::OutputStatusMessage("* * * End OutputOfflineConversion * * *");
        }
    }
    static function OutputArrayOfOfflineConversion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->OfflineConversion))
        {
            return;
        }
        foreach ($dataObjects->OfflineConversion as $dataObject)
        {
            self::OutputOfflineConversion($dataObject);
        }
    }
    static function OutputOfflineConversionAdjustment($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputOfflineConversionAdjustment * * *");
            self::OutputStatusMessage(sprintf("AdjustmentCurrencyCode: %s", $dataObject->AdjustmentCurrencyCode));
            self::OutputStatusMessage(sprintf("AdjustmentTime: %s", $dataObject->AdjustmentTime));
            self::OutputStatusMessage(sprintf("AdjustmentType: %s", $dataObject->AdjustmentType));
            self::OutputStatusMessage(sprintf("AdjustmentValue: %s", $dataObject->AdjustmentValue));
            self::OutputStatusMessage(sprintf("ConversionName: %s", $dataObject->ConversionName));
            self::OutputStatusMessage(sprintf("ConversionTime: %s", $dataObject->ConversionTime));
            self::OutputStatusMessage(sprintf("MicrosoftClickId: %s", $dataObject->MicrosoftClickId));
            self::OutputStatusMessage("* * * End OutputOfflineConversionAdjustment * * *");
        }
    }
    static function OutputArrayOfOfflineConversionAdjustment($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->OfflineConversionAdjustment))
        {
            return;
        }
        foreach ($dataObjects->OfflineConversionAdjustment as $dataObject)
        {
            self::OutputOfflineConversionAdjustment($dataObject);
        }
    }
    static function OutputOfflineConversionGoal($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputOfflineConversionGoal * * *");
            self::OutputStatusMessage(sprintf("IsExternallyAttributed: %s", $dataObject->IsExternallyAttributed));
            self::OutputStatusMessage("* * * End OutputOfflineConversionGoal * * *");
        }
    }
    static function OutputArrayOfOfflineConversionGoal($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->OfflineConversionGoal))
        {
            return;
        }
        foreach ($dataObjects->OfflineConversionGoal as $dataObject)
        {
            self::OutputOfflineConversionGoal($dataObject);
        }
    }
    static function OutputOperationError($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputOperationError * * *");
            self::OutputStatusMessage(sprintf("Code: %s", $dataObject->Code));
            self::OutputStatusMessage(sprintf("Details: %s", $dataObject->Details));
            self::OutputStatusMessage(sprintf("ErrorCode: %s", $dataObject->ErrorCode));
            self::OutputStatusMessage(sprintf("Message: %s", $dataObject->Message));
            self::OutputStatusMessage("* * * End OutputOperationError * * *");
        }
    }
    static function OutputArrayOfOperationError($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->OperationError))
        {
            return;
        }
        else if (!is_array($dataObjects->OperationError))
        {
            self::OutputOperationError($dataObjects->OperationError);
            return;
        }
        foreach ($dataObjects->OperationError as $dataObject)
        {
            self::OutputOperationError($dataObject);
        }
    }
    static function OutputPagesViewedPerVisitGoal($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputPagesViewedPerVisitGoal * * *");
            self::OutputStatusMessage(sprintf("MinimumPagesViewed: %s", $dataObject->MinimumPagesViewed));
            self::OutputStatusMessage("* * * End OutputPagesViewedPerVisitGoal * * *");
        }
    }
    static function OutputArrayOfPagesViewedPerVisitGoal($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PagesViewedPerVisitGoal))
        {
            return;
        }
        foreach ($dataObjects->PagesViewedPerVisitGoal as $dataObject)
        {
            self::OutputPagesViewedPerVisitGoal($dataObject);
        }
    }
    static function OutputPageVisitorsRule($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputPageVisitorsRule * * *");
            self::OutputStatusMessage(sprintf("NormalForm: %s", $dataObject->NormalForm));
            self::OutputStatusMessage("RuleItemGroups:");
            self::OutputArrayOfRuleItemGroup($dataObject->RuleItemGroups);
            self::OutputStatusMessage("* * * End OutputPageVisitorsRule * * *");
        }
    }
    static function OutputArrayOfPageVisitorsRule($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PageVisitorsRule))
        {
            return;
        }
        foreach ($dataObjects->PageVisitorsRule as $dataObject)
        {
            self::OutputPageVisitorsRule($dataObject);
        }
    }
    static function OutputPageVisitorsWhoDidNotVisitAnotherPageRule($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputPageVisitorsWhoDidNotVisitAnotherPageRule * * *");
            self::OutputStatusMessage("ExcludeRuleItemGroups:");
            self::OutputArrayOfRuleItemGroup($dataObject->ExcludeRuleItemGroups);
            self::OutputStatusMessage("IncludeRuleItemGroups:");
            self::OutputArrayOfRuleItemGroup($dataObject->IncludeRuleItemGroups);
            self::OutputStatusMessage("* * * End OutputPageVisitorsWhoDidNotVisitAnotherPageRule * * *");
        }
    }
    static function OutputArrayOfPageVisitorsWhoDidNotVisitAnotherPageRule($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PageVisitorsWhoDidNotVisitAnotherPageRule))
        {
            return;
        }
        foreach ($dataObjects->PageVisitorsWhoDidNotVisitAnotherPageRule as $dataObject)
        {
            self::OutputPageVisitorsWhoDidNotVisitAnotherPageRule($dataObject);
        }
    }
    static function OutputPageVisitorsWhoVisitedAnotherPageRule($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputPageVisitorsWhoVisitedAnotherPageRule * * *");
            self::OutputStatusMessage("AnotherRuleItemGroups:");
            self::OutputArrayOfRuleItemGroup($dataObject->AnotherRuleItemGroups);
            self::OutputStatusMessage("RuleItemGroups:");
            self::OutputArrayOfRuleItemGroup($dataObject->RuleItemGroups);
            self::OutputStatusMessage("* * * End OutputPageVisitorsWhoVisitedAnotherPageRule * * *");
        }
    }
    static function OutputArrayOfPageVisitorsWhoVisitedAnotherPageRule($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PageVisitorsWhoVisitedAnotherPageRule))
        {
            return;
        }
        foreach ($dataObjects->PageVisitorsWhoVisitedAnotherPageRule as $dataObject)
        {
            self::OutputPageVisitorsWhoVisitedAnotherPageRule($dataObject);
        }
    }
    static function OutputPaging($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputPaging * * *");
            self::OutputStatusMessage(sprintf("Index: %s", $dataObject->Index));
            self::OutputStatusMessage(sprintf("Size: %s", $dataObject->Size));
            self::OutputStatusMessage("* * * End OutputPaging * * *");
        }
    }
    static function OutputArrayOfPaging($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Paging))
        {
            return;
        }
        foreach ($dataObjects->Paging as $dataObject)
        {
            self::OutputPaging($dataObject);
        }
    }
    static function OutputPlacementExclusionList($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputPlacementExclusionList * * *");
            self::OutputStatusMessage("* * * End OutputPlacementExclusionList * * *");
        }
    }
    static function OutputArrayOfPlacementExclusionList($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PlacementExclusionList))
        {
            return;
        }
        foreach ($dataObjects->PlacementExclusionList as $dataObject)
        {
            self::OutputPlacementExclusionList($dataObject);
        }
    }
    static function OutputPriceAdExtension($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputPriceAdExtension * * *");
            self::OutputStatusMessage(sprintf("FinalUrlSuffix: %s", $dataObject->FinalUrlSuffix));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage(sprintf("PriceExtensionType: %s", $dataObject->PriceExtensionType));
            self::OutputStatusMessage("TableRows:");
            self::OutputArrayOfPriceTableRow($dataObject->TableRows);
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputStatusMessage("UrlCustomParameters:");
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
            self::OutputStatusMessage("* * * End OutputPriceAdExtension * * *");
        }
    }
    static function OutputArrayOfPriceAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PriceAdExtension))
        {
            return;
        }
        foreach ($dataObjects->PriceAdExtension as $dataObject)
        {
            self::OutputPriceAdExtension($dataObject);
        }
    }
    static function OutputPriceTableRow($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputPriceTableRow * * *");
            self::OutputStatusMessage(sprintf("CurrencyCode: %s", $dataObject->CurrencyCode));
            self::OutputStatusMessage(sprintf("Description: %s", $dataObject->Description));
            self::OutputStatusMessage("FinalMobileUrls:");
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputStatusMessage("FinalUrls:");
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputStatusMessage(sprintf("Header: %s", $dataObject->Header));
            self::OutputStatusMessage(sprintf("Price: %s", $dataObject->Price));
            self::OutputStatusMessage(sprintf("PriceQualifier: %s", $dataObject->PriceQualifier));
            self::OutputStatusMessage(sprintf("PriceUnit: %s", $dataObject->PriceUnit));
            self::OutputStatusMessage(sprintf("TermsAndConditions: %s", $dataObject->TermsAndConditions));
            self::OutputStatusMessage(sprintf("TermsAndConditionsUrl: %s", $dataObject->TermsAndConditionsUrl));
            self::OutputStatusMessage("* * * End OutputPriceTableRow * * *");
        }
    }
    static function OutputArrayOfPriceTableRow($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PriceTableRow))
        {
            return;
        }
        foreach ($dataObjects->PriceTableRow as $dataObject)
        {
            self::OutputPriceTableRow($dataObject);
        }
    }
    static function OutputProductAd($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProductAd * * *");
            self::OutputStatusMessage(sprintf("PromotionalText: %s", $dataObject->PromotionalText));
            self::OutputStatusMessage("* * * End OutputProductAd * * *");
        }
    }
    static function OutputArrayOfProductAd($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductAd))
        {
            return;
        }
        foreach ($dataObjects->ProductAd as $dataObject)
        {
            self::OutputProductAd($dataObject);
        }
    }
    static function OutputProductAudience($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProductAudience * * *");
            self::OutputStatusMessage(sprintf("ProductAudienceType: %s", $dataObject->ProductAudienceType));
            self::OutputStatusMessage(sprintf("TagId: %s", $dataObject->TagId));
            self::OutputStatusMessage("* * * End OutputProductAudience * * *");
        }
    }
    static function OutputArrayOfProductAudience($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductAudience))
        {
            return;
        }
        foreach ($dataObjects->ProductAudience as $dataObject)
        {
            self::OutputProductAudience($dataObject);
        }
    }
    static function OutputProductCondition($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProductCondition * * *");
            self::OutputStatusMessage(sprintf("Attribute: %s", $dataObject->Attribute));
            self::OutputStatusMessage(sprintf("Operand: %s", $dataObject->Operand));
            self::OutputStatusMessage("* * * End OutputProductCondition * * *");
        }
    }
    static function OutputArrayOfProductCondition($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductCondition))
        {
            return;
        }
        foreach ($dataObjects->ProductCondition as $dataObject)
        {
            self::OutputProductCondition($dataObject);
        }
    }
    static function OutputProductPartition($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProductPartition * * *");
            self::OutputStatusMessage("Condition:");
            self::OutputProductCondition($dataObject->Condition);
            self::OutputStatusMessage(sprintf("ParentCriterionId: %s", $dataObject->ParentCriterionId));
            self::OutputStatusMessage(sprintf("PartitionType: %s", $dataObject->PartitionType));
            self::OutputStatusMessage("* * * End OutputProductPartition * * *");
        }
    }
    static function OutputArrayOfProductPartition($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductPartition))
        {
            return;
        }
        foreach ($dataObjects->ProductPartition as $dataObject)
        {
            self::OutputProductPartition($dataObject);
        }
    }
    static function OutputProductScope($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProductScope * * *");
            self::OutputStatusMessage("Conditions:");
            self::OutputArrayOfProductCondition($dataObject->Conditions);
            self::OutputStatusMessage("* * * End OutputProductScope * * *");
        }
    }
    static function OutputArrayOfProductScope($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductScope))
        {
            return;
        }
        foreach ($dataObjects->ProductScope as $dataObject)
        {
            self::OutputProductScope($dataObject);
        }
    }
    static function OutputProfileCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProfileCriterion * * *");
            self::OutputStatusMessage(sprintf("ProfileId: %s", $dataObject->ProfileId));
            self::OutputStatusMessage(sprintf("ProfileType: %s", $dataObject->ProfileType));
            self::OutputStatusMessage("* * * End OutputProfileCriterion * * *");
        }
    }
    static function OutputArrayOfProfileCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProfileCriterion))
        {
            return;
        }
        foreach ($dataObjects->ProfileCriterion as $dataObject)
        {
            self::OutputProfileCriterion($dataObject);
        }
    }
    static function OutputPromotionAdExtension($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputPromotionAdExtension * * *");
            self::OutputStatusMessage(sprintf("CurrencyCode: %s", $dataObject->CurrencyCode));
            self::OutputStatusMessage(sprintf("DiscountModifier: %s", $dataObject->DiscountModifier));
            self::OutputStatusMessage("FinalAppUrls:");
            self::OutputArrayOfAppUrl($dataObject->FinalAppUrls);
            self::OutputStatusMessage("FinalMobileUrls:");
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputStatusMessage(sprintf("FinalUrlSuffix: %s", $dataObject->FinalUrlSuffix));
            self::OutputStatusMessage("FinalUrls:");
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage(sprintf("MoneyAmountOff: %s", $dataObject->MoneyAmountOff));
            self::OutputStatusMessage(sprintf("OrdersOverAmount: %s", $dataObject->OrdersOverAmount));
            self::OutputStatusMessage(sprintf("PercentOff: %s", $dataObject->PercentOff));
            self::OutputStatusMessage(sprintf("PromotionCode: %s", $dataObject->PromotionCode));
            self::OutputStatusMessage("PromotionEndDate:");
            self::OutputDate($dataObject->PromotionEndDate);
            self::OutputStatusMessage(sprintf("PromotionItem: %s", $dataObject->PromotionItem));
            self::OutputStatusMessage(sprintf("PromotionOccasion: %s", $dataObject->PromotionOccasion));
            self::OutputStatusMessage("PromotionStartDate:");
            self::OutputDate($dataObject->PromotionStartDate);
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputStatusMessage("UrlCustomParameters:");
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
            self::OutputStatusMessage("* * * End OutputPromotionAdExtension * * *");
        }
    }
    static function OutputArrayOfPromotionAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PromotionAdExtension))
        {
            return;
        }
        foreach ($dataObjects->PromotionAdExtension as $dataObject)
        {
            self::OutputPromotionAdExtension($dataObject);
        }
    }
    static function OutputRadiusCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputRadiusCriterion * * *");
            self::OutputStatusMessage(sprintf("LatitudeDegrees: %s", $dataObject->LatitudeDegrees));
            self::OutputStatusMessage(sprintf("LongitudeDegrees: %s", $dataObject->LongitudeDegrees));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Radius: %s", $dataObject->Radius));
            self::OutputStatusMessage(sprintf("RadiusUnit: %s", $dataObject->RadiusUnit));
            self::OutputStatusMessage("* * * End OutputRadiusCriterion * * *");
        }
    }
    static function OutputArrayOfRadiusCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->RadiusCriterion))
        {
            return;
        }
        foreach ($dataObjects->RadiusCriterion as $dataObject)
        {
            self::OutputRadiusCriterion($dataObject);
        }
    }
    static function OutputRemarketingList($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputRemarketingList * * *");
            self::OutputStatusMessage("Rule:");
            self::OutputRemarketingRule($dataObject->Rule);
            self::OutputStatusMessage(sprintf("TagId: %s", $dataObject->TagId));
            self::OutputStatusMessage("* * * End OutputRemarketingList * * *");
        }
    }
    static function OutputArrayOfRemarketingList($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->RemarketingList))
        {
            return;
        }
        foreach ($dataObjects->RemarketingList as $dataObject)
        {
            self::OutputRemarketingList($dataObject);
        }
    }
    static function OutputRemarketingRule($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputRemarketingRule * * *");
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "CustomEventsRule")
            {
                self::OutputCustomEventsRule($dataObject);
            }
            if($dataObject->Type === "PageVisitorsRule")
            {
                self::OutputPageVisitorsRule($dataObject);
            }
            if($dataObject->Type === "PageVisitorsWhoDidNotVisitAnotherPageRule")
            {
                self::OutputPageVisitorsWhoDidNotVisitAnotherPageRule($dataObject);
            }
            if($dataObject->Type === "PageVisitorsWhoVisitedAnotherPageRule")
            {
                self::OutputPageVisitorsWhoVisitedAnotherPageRule($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputRemarketingRule * * *");
        }
    }
    static function OutputArrayOfRemarketingRule($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->RemarketingRule))
        {
            return;
        }
        foreach ($dataObjects->RemarketingRule as $dataObject)
        {
            self::OutputRemarketingRule($dataObject);
        }
    }
    static function OutputResponsiveAd($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputResponsiveAd * * *");
            self::OutputStatusMessage(sprintf("BusinessName: %s", $dataObject->BusinessName));
            self::OutputStatusMessage(sprintf("CallToAction: %s", $dataObject->CallToAction));
            self::OutputStatusMessage(sprintf("CallToActionLanguage: %s", $dataObject->CallToActionLanguage));
            self::OutputStatusMessage("Descriptions:");
            self::OutputArrayOfAssetLink($dataObject->Descriptions);
            self::OutputStatusMessage(sprintf("Headline: %s", $dataObject->Headline));
            self::OutputStatusMessage("Headlines:");
            self::OutputArrayOfAssetLink($dataObject->Headlines);
            self::OutputStatusMessage("Images:");
            self::OutputArrayOfAssetLink($dataObject->Images);
            self::OutputStatusMessage("ImpressionTrackingUrls:");
            self::OutputArrayOfString($dataObject->ImpressionTrackingUrls);
            self::OutputStatusMessage("LongHeadline:");
            self::OutputAssetLink($dataObject->LongHeadline);
            self::OutputStatusMessage(sprintf("LongHeadlineString: %s", $dataObject->LongHeadlineString));
            self::OutputStatusMessage("LongHeadlines:");
            self::OutputArrayOfAssetLink($dataObject->LongHeadlines);
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
            self::OutputStatusMessage("Videos:");
            self::OutputArrayOfAssetLink($dataObject->Videos);
            self::OutputStatusMessage("* * * End OutputResponsiveAd * * *");
        }
    }
    static function OutputArrayOfResponsiveAd($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ResponsiveAd))
        {
            return;
        }
        foreach ($dataObjects->ResponsiveAd as $dataObject)
        {
            self::OutputResponsiveAd($dataObject);
        }
    }
    static function OutputResponsiveSearchAd($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputResponsiveSearchAd * * *");
            self::OutputStatusMessage("Descriptions:");
            self::OutputArrayOfAssetLink($dataObject->Descriptions);
            self::OutputStatusMessage(sprintf("Domain: %s", $dataObject->Domain));
            self::OutputStatusMessage("Headlines:");
            self::OutputArrayOfAssetLink($dataObject->Headlines);
            self::OutputStatusMessage(sprintf("Path1: %s", $dataObject->Path1));
            self::OutputStatusMessage(sprintf("Path2: %s", $dataObject->Path2));
            self::OutputStatusMessage("* * * End OutputResponsiveSearchAd * * *");
        }
    }
    static function OutputArrayOfResponsiveSearchAd($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ResponsiveSearchAd))
        {
            return;
        }
        foreach ($dataObjects->ResponsiveSearchAd as $dataObject)
        {
            self::OutputResponsiveSearchAd($dataObject);
        }
    }
    static function OutputReviewAdExtension($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputReviewAdExtension * * *");
            self::OutputStatusMessage(sprintf("IsExact: %s", $dataObject->IsExact));
            self::OutputStatusMessage(sprintf("Source: %s", $dataObject->Source));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
            self::OutputStatusMessage(sprintf("Url: %s", $dataObject->Url));
            self::OutputStatusMessage("* * * End OutputReviewAdExtension * * *");
        }
    }
    static function OutputArrayOfReviewAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ReviewAdExtension))
        {
            return;
        }
        foreach ($dataObjects->ReviewAdExtension as $dataObject)
        {
            self::OutputReviewAdExtension($dataObject);
        }
    }
    static function OutputRuleItem($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputRuleItem * * *");
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "StringRuleItem")
            {
                self::OutputStringRuleItem($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputRuleItem * * *");
        }
    }
    static function OutputArrayOfRuleItem($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->RuleItem))
        {
            return;
        }
        foreach ($dataObjects->RuleItem as $dataObject)
        {
            self::OutputRuleItem($dataObject);
        }
    }
    static function OutputRuleItemGroup($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputRuleItemGroup * * *");
            self::OutputStatusMessage("Items:");
            self::OutputArrayOfRuleItem($dataObject->Items);
            self::OutputStatusMessage("* * * End OutputRuleItemGroup * * *");
        }
    }
    static function OutputArrayOfRuleItemGroup($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->RuleItemGroup))
        {
            return;
        }
        foreach ($dataObjects->RuleItemGroup as $dataObject)
        {
            self::OutputRuleItemGroup($dataObject);
        }
    }
    static function OutputSchedule($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputSchedule * * *");
            self::OutputStatusMessage("DayTimeRanges:");
            self::OutputArrayOfDayTime($dataObject->DayTimeRanges);
            self::OutputStatusMessage("EndDate:");
            self::OutputDate($dataObject->EndDate);
            self::OutputStatusMessage("StartDate:");
            self::OutputDate($dataObject->StartDate);
            self::OutputStatusMessage(sprintf("UseSearcherTimeZone: %s", $dataObject->UseSearcherTimeZone));
            self::OutputStatusMessage("* * * End OutputSchedule * * *");
        }
    }
    static function OutputArrayOfSchedule($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Schedule))
        {
            return;
        }
        foreach ($dataObjects->Schedule as $dataObject)
        {
            self::OutputSchedule($dataObject);
        }
    }
    static function OutputSetting($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputSetting * * *");
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "CoOpSetting")
            {
                self::OutputCoOpSetting($dataObject);
            }
            if($dataObject->Type === "DynamicFeedSetting")
            {
                self::OutputDynamicFeedSetting($dataObject);
            }
            if($dataObject->Type === "DynamicSearchAdsSetting")
            {
                self::OutputDynamicSearchAdsSetting($dataObject);
            }
            if($dataObject->Type === "ShoppingSetting")
            {
                self::OutputShoppingSetting($dataObject);
            }
            if($dataObject->Type === "TargetSetting")
            {
                self::OutputTargetSetting($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputSetting * * *");
        }
    }
    static function OutputArrayOfSetting($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Setting))
        {
            return;
        }
        foreach ($dataObjects->Setting as $dataObject)
        {
            self::OutputSetting($dataObject);
        }
    }
    static function OutputSharedEntity($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputSharedEntity * * *");
            self::OutputStatusMessage(sprintf("AssociationCount: %s", $dataObject->AssociationCount));
            self::OutputStatusMessage("ForwardCompatibilityMap:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "SharedList")
            {
                self::OutputSharedList($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputSharedEntity * * *");
        }
    }
    static function OutputArrayOfSharedEntity($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SharedEntity))
        {
            return;
        }
        foreach ($dataObjects->SharedEntity as $dataObject)
        {
            self::OutputSharedEntity($dataObject);
        }
    }
    static function OutputSharedEntityAssociation($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputSharedEntityAssociation * * *");
            self::OutputStatusMessage(sprintf("EntityId: %s", $dataObject->EntityId));
            self::OutputStatusMessage(sprintf("EntityType: %s", $dataObject->EntityType));
            self::OutputStatusMessage(sprintf("SharedEntityCustomerId: %s", $dataObject->SharedEntityCustomerId));
            self::OutputStatusMessage(sprintf("SharedEntityId: %s", $dataObject->SharedEntityId));
            self::OutputStatusMessage(sprintf("SharedEntityType: %s", $dataObject->SharedEntityType));
            self::OutputStatusMessage("* * * End OutputSharedEntityAssociation * * *");
        }
    }
    static function OutputArrayOfSharedEntityAssociation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SharedEntityAssociation))
        {
            return;
        }
        foreach ($dataObjects->SharedEntityAssociation as $dataObject)
        {
            self::OutputSharedEntityAssociation($dataObject);
        }
    }
    static function OutputSharedList($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputSharedList * * *");
            self::OutputStatusMessage(sprintf("ItemCount: %s", $dataObject->ItemCount));
            if($dataObject->Type === "NegativeKeywordList")
            {
                self::OutputNegativeKeywordList($dataObject);
            }
            if($dataObject->Type === "PlacementExclusionList")
            {
                self::OutputPlacementExclusionList($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputSharedList * * *");
        }
    }
    static function OutputArrayOfSharedList($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SharedList))
        {
            return;
        }
        foreach ($dataObjects->SharedList as $dataObject)
        {
            self::OutputSharedList($dataObject);
        }
    }
    static function OutputSharedListItem($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputSharedListItem * * *");
            self::OutputStatusMessage("ForwardCompatibilityMap:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "NegativeKeyword")
            {
                self::OutputNegativeKeyword($dataObject);
            }
            if($dataObject->Type === "NegativeSite")
            {
                self::OutputNegativeSite($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputSharedListItem * * *");
        }
    }
    static function OutputArrayOfSharedListItem($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SharedListItem))
        {
            return;
        }
        foreach ($dataObjects->SharedListItem as $dataObject)
        {
            self::OutputSharedListItem($dataObject);
        }
    }
    static function OutputShoppingSetting($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputShoppingSetting * * *");
            self::OutputStatusMessage(sprintf("LocalInventoryAdsEnabled: %s", $dataObject->LocalInventoryAdsEnabled));
            self::OutputStatusMessage(sprintf("Priority: %s", $dataObject->Priority));
            self::OutputStatusMessage(sprintf("SalesCountryCode: %s", $dataObject->SalesCountryCode));
            self::OutputStatusMessage(sprintf("StoreId: %s", $dataObject->StoreId));
            self::OutputStatusMessage("* * * End OutputShoppingSetting * * *");
        }
    }
    static function OutputArrayOfShoppingSetting($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ShoppingSetting))
        {
            return;
        }
        foreach ($dataObjects->ShoppingSetting as $dataObject)
        {
            self::OutputShoppingSetting($dataObject);
        }
    }
    static function OutputSimilarRemarketingList($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputSimilarRemarketingList * * *");
            self::OutputStatusMessage(sprintf("SourceId: %s", $dataObject->SourceId));
            self::OutputStatusMessage("* * * End OutputSimilarRemarketingList * * *");
        }
    }
    static function OutputArrayOfSimilarRemarketingList($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SimilarRemarketingList))
        {
            return;
        }
        foreach ($dataObjects->SimilarRemarketingList as $dataObject)
        {
            self::OutputSimilarRemarketingList($dataObject);
        }
    }
    static function OutputSitelinkAdExtension($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputSitelinkAdExtension * * *");
            self::OutputStatusMessage(sprintf("Description1: %s", $dataObject->Description1));
            self::OutputStatusMessage(sprintf("Description2: %s", $dataObject->Description2));
            self::OutputStatusMessage(sprintf("DestinationUrl: %s", $dataObject->DestinationUrl));
            self::OutputStatusMessage(sprintf("DisplayText: %s", $dataObject->DisplayText));
            self::OutputStatusMessage("FinalAppUrls:");
            self::OutputArrayOfAppUrl($dataObject->FinalAppUrls);
            self::OutputStatusMessage("FinalMobileUrls:");
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputStatusMessage(sprintf("FinalUrlSuffix: %s", $dataObject->FinalUrlSuffix));
            self::OutputStatusMessage("FinalUrls:");
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputStatusMessage("UrlCustomParameters:");
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
            self::OutputStatusMessage("* * * End OutputSitelinkAdExtension * * *");
        }
    }
    static function OutputArrayOfSitelinkAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SitelinkAdExtension))
        {
            return;
        }
        foreach ($dataObjects->SitelinkAdExtension as $dataObject)
        {
            self::OutputSitelinkAdExtension($dataObject);
        }
    }
    static function OutputStoreCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputStoreCriterion * * *");
            self::OutputStatusMessage(sprintf("StoreId: %s", $dataObject->StoreId));
            self::OutputStatusMessage("* * * End OutputStoreCriterion * * *");
        }
    }
    static function OutputArrayOfStoreCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->StoreCriterion))
        {
            return;
        }
        foreach ($dataObjects->StoreCriterion as $dataObject)
        {
            self::OutputStoreCriterion($dataObject);
        }
    }
    static function OutputStringRuleItem($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputStringRuleItem * * *");
            self::OutputStatusMessage(sprintf("Operand: %s", $dataObject->Operand));
            self::OutputStatusMessage(sprintf("Operator: %s", $dataObject->Operator));
            self::OutputStatusMessage(sprintf("Value: %s", $dataObject->Value));
            self::OutputStatusMessage("* * * End OutputStringRuleItem * * *");
        }
    }
    static function OutputArrayOfStringRuleItem($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->StringRuleItem))
        {
            return;
        }
        foreach ($dataObjects->StringRuleItem as $dataObject)
        {
            self::OutputStringRuleItem($dataObject);
        }
    }
    static function OutputStructuredSnippetAdExtension($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputStructuredSnippetAdExtension * * *");
            self::OutputStatusMessage(sprintf("Header: %s", $dataObject->Header));
            self::OutputStatusMessage("Values:");
            self::OutputArrayOfString($dataObject->Values);
            self::OutputStatusMessage("* * * End OutputStructuredSnippetAdExtension * * *");
        }
    }
    static function OutputArrayOfStructuredSnippetAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->StructuredSnippetAdExtension))
        {
            return;
        }
        foreach ($dataObjects->StructuredSnippetAdExtension as $dataObject)
        {
            self::OutputStructuredSnippetAdExtension($dataObject);
        }
    }
    static function OutputTargetCpaBiddingScheme($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputTargetCpaBiddingScheme * * *");
            self::OutputStatusMessage("MaxCpc:");
            self::OutputBid($dataObject->MaxCpc);
            self::OutputStatusMessage(sprintf("TargetCpa: %s", $dataObject->TargetCpa));
            self::OutputStatusMessage("* * * End OutputTargetCpaBiddingScheme * * *");
        }
    }
    static function OutputArrayOfTargetCpaBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->TargetCpaBiddingScheme))
        {
            return;
        }
        foreach ($dataObjects->TargetCpaBiddingScheme as $dataObject)
        {
            self::OutputTargetCpaBiddingScheme($dataObject);
        }
    }
    static function OutputTargetImpressionShareBiddingScheme($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputTargetImpressionShareBiddingScheme * * *");
            self::OutputStatusMessage("MaxCpc:");
            self::OutputBid($dataObject->MaxCpc);
            self::OutputStatusMessage(sprintf("TargetAdPosition: %s", $dataObject->TargetAdPosition));
            self::OutputStatusMessage(sprintf("TargetImpressionShare: %s", $dataObject->TargetImpressionShare));
            self::OutputStatusMessage("* * * End OutputTargetImpressionShareBiddingScheme * * *");
        }
    }
    static function OutputArrayOfTargetImpressionShareBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->TargetImpressionShareBiddingScheme))
        {
            return;
        }
        foreach ($dataObjects->TargetImpressionShareBiddingScheme as $dataObject)
        {
            self::OutputTargetImpressionShareBiddingScheme($dataObject);
        }
    }
    static function OutputTargetRoasBiddingScheme($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputTargetRoasBiddingScheme * * *");
            self::OutputStatusMessage("MaxCpc:");
            self::OutputBid($dataObject->MaxCpc);
            self::OutputStatusMessage(sprintf("TargetRoas: %s", $dataObject->TargetRoas));
            self::OutputStatusMessage("* * * End OutputTargetRoasBiddingScheme * * *");
        }
    }
    static function OutputArrayOfTargetRoasBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->TargetRoasBiddingScheme))
        {
            return;
        }
        foreach ($dataObjects->TargetRoasBiddingScheme as $dataObject)
        {
            self::OutputTargetRoasBiddingScheme($dataObject);
        }
    }
    static function OutputTargetSetting($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputTargetSetting * * *");
            self::OutputStatusMessage("Details:");
            self::OutputArrayOfTargetSettingDetail($dataObject->Details);
            self::OutputStatusMessage("* * * End OutputTargetSetting * * *");
        }
    }
    static function OutputArrayOfTargetSetting($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->TargetSetting))
        {
            return;
        }
        foreach ($dataObjects->TargetSetting as $dataObject)
        {
            self::OutputTargetSetting($dataObject);
        }
    }
    static function OutputTargetSettingDetail($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputTargetSettingDetail * * *");
            self::OutputStatusMessage(sprintf("CriterionTypeGroup: %s", $dataObject->CriterionTypeGroup));
            self::OutputStatusMessage(sprintf("TargetAndBid: %s", $dataObject->TargetAndBid));
            self::OutputStatusMessage("* * * End OutputTargetSettingDetail * * *");
        }
    }
    static function OutputArrayOfTargetSettingDetail($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->TargetSettingDetail))
        {
            return;
        }
        foreach ($dataObjects->TargetSettingDetail as $dataObject)
        {
            self::OutputTargetSettingDetail($dataObject);
        }
    }
    static function OutputTextAd($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputTextAd * * *");
            self::OutputStatusMessage(sprintf("DestinationUrl: %s", $dataObject->DestinationUrl));
            self::OutputStatusMessage(sprintf("DisplayUrl: %s", $dataObject->DisplayUrl));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
            self::OutputStatusMessage(sprintf("Title: %s", $dataObject->Title));
            self::OutputStatusMessage("* * * End OutputTextAd * * *");
        }
    }
    static function OutputArrayOfTextAd($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->TextAd))
        {
            return;
        }
        foreach ($dataObjects->TextAd as $dataObject)
        {
            self::OutputTextAd($dataObject);
        }
    }
    static function OutputTextAsset($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputTextAsset * * *");
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
            self::OutputStatusMessage("* * * End OutputTextAsset * * *");
        }
    }
    static function OutputArrayOfTextAsset($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->TextAsset))
        {
            return;
        }
        foreach ($dataObjects->TextAsset as $dataObject)
        {
            self::OutputTextAsset($dataObject);
        }
    }
    static function OutputUetTag($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputUetTag * * *");
            self::OutputStatusMessage("CustomerShare:");
            self::OutputCustomerShare($dataObject->CustomerShare);
            self::OutputStatusMessage(sprintf("Description: %s", $dataObject->Description));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("TrackingNoScript: %s", $dataObject->TrackingNoScript));
            self::OutputStatusMessage(sprintf("TrackingScript: %s", $dataObject->TrackingScript));
            self::OutputStatusMessage(sprintf("TrackingStatus: %s", $dataObject->TrackingStatus));
            self::OutputStatusMessage("* * * End OutputUetTag * * *");
        }
    }
    static function OutputArrayOfUetTag($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->UetTag))
        {
            return;
        }
        foreach ($dataObjects->UetTag as $dataObject)
        {
            self::OutputUetTag($dataObject);
        }
    }
    static function OutputUrlGoal($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputUrlGoal * * *");
            self::OutputStatusMessage(sprintf("UrlExpression: %s", $dataObject->UrlExpression));
            self::OutputStatusMessage(sprintf("UrlOperator: %s", $dataObject->UrlOperator));
            self::OutputStatusMessage("* * * End OutputUrlGoal * * *");
        }
    }
    static function OutputArrayOfUrlGoal($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->UrlGoal))
        {
            return;
        }
        foreach ($dataObjects->UrlGoal as $dataObject)
        {
            self::OutputUrlGoal($dataObject);
        }
    }
    static function OutputVideo($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputVideo * * *");
            self::OutputStatusMessage(sprintf("AspectRatio: %s", $dataObject->AspectRatio));
            self::OutputStatusMessage(sprintf("CreatedDateTimeInUTC: %s", $dataObject->CreatedDateTimeInUTC));
            self::OutputStatusMessage(sprintf("Description: %s", $dataObject->Description));
            self::OutputStatusMessage(sprintf("DurationInMilliseconds: %s", $dataObject->DurationInMilliseconds));
            self::OutputStatusMessage(sprintf("FailureCode: %s", $dataObject->FailureCode));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("ModifiedDateTimeInUTC: %s", $dataObject->ModifiedDateTimeInUTC));
            self::OutputStatusMessage(sprintf("SourceUrl: %s", $dataObject->SourceUrl));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage(sprintf("ThumbnailUrl: %s", $dataObject->ThumbnailUrl));
            self::OutputStatusMessage(sprintf("Url: %s", $dataObject->Url));
            self::OutputStatusMessage("* * * End OutputVideo * * *");
        }
    }
    static function OutputArrayOfVideo($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Video))
        {
            return;
        }
        foreach ($dataObjects->Video as $dataObject)
        {
            self::OutputVideo($dataObject);
        }
    }
    static function OutputVideoAdExtension($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputVideoAdExtension * * *");
            self::OutputStatusMessage(sprintf("ActionText: %s", $dataObject->ActionText));
            self::OutputStatusMessage(sprintf("AlternativeText: %s", $dataObject->AlternativeText));
            self::OutputStatusMessage(sprintf("DisplayText: %s", $dataObject->DisplayText));
            self::OutputStatusMessage("FinalAppUrls:");
            self::OutputArrayOfAppUrl($dataObject->FinalAppUrls);
            self::OutputStatusMessage("FinalMobileUrls:");
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputStatusMessage(sprintf("FinalUrlSuffix: %s", $dataObject->FinalUrlSuffix));
            self::OutputStatusMessage("FinalUrls:");
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("ThumbnailId: %s", $dataObject->ThumbnailId));
            self::OutputStatusMessage(sprintf("ThumbnailUrl: %s", $dataObject->ThumbnailUrl));
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputStatusMessage("UrlCustomParameters:");
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
            self::OutputStatusMessage(sprintf("VideoId: %s", $dataObject->VideoId));
            self::OutputStatusMessage("* * * End OutputVideoAdExtension * * *");
        }
    }
    static function OutputArrayOfVideoAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->VideoAdExtension))
        {
            return;
        }
        foreach ($dataObjects->VideoAdExtension as $dataObject)
        {
            self::OutputVideoAdExtension($dataObject);
        }
    }
    static function OutputVideoAsset($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputVideoAsset * * *");
            self::OutputStatusMessage(sprintf("SubType: %s", $dataObject->SubType));
            self::OutputStatusMessage("ThumbnailImage:");
            self::OutputImageAsset($dataObject->ThumbnailImage);
            self::OutputStatusMessage("* * * End OutputVideoAsset * * *");
        }
    }
    static function OutputArrayOfVideoAsset($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->VideoAsset))
        {
            return;
        }
        foreach ($dataObjects->VideoAsset as $dataObject)
        {
            self::OutputVideoAsset($dataObject);
        }
    }
    static function OutputWebpage($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputWebpage * * *");
            self::OutputStatusMessage("Parameter:");
            self::OutputWebpageParameter($dataObject->Parameter);
            self::OutputStatusMessage("* * * End OutputWebpage * * *");
        }
    }
    static function OutputArrayOfWebpage($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Webpage))
        {
            return;
        }
        foreach ($dataObjects->Webpage as $dataObject)
        {
            self::OutputWebpage($dataObject);
        }
    }
    static function OutputWebpageCondition($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputWebpageCondition * * *");
            self::OutputStatusMessage(sprintf("Argument: %s", $dataObject->Argument));
            self::OutputStatusMessage(sprintf("Operand: %s", $dataObject->Operand));
            self::OutputStatusMessage("* * * End OutputWebpageCondition * * *");
        }
    }
    static function OutputArrayOfWebpageCondition($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->WebpageCondition))
        {
            return;
        }
        foreach ($dataObjects->WebpageCondition as $dataObject)
        {
            self::OutputWebpageCondition($dataObject);
        }
    }
    static function OutputWebpageParameter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputWebpageParameter * * *");
            self::OutputStatusMessage("Conditions:");
            self::OutputArrayOfWebpageCondition($dataObject->Conditions);
            self::OutputStatusMessage(sprintf("CriterionName: %s", $dataObject->CriterionName));
            self::OutputStatusMessage("* * * End OutputWebpageParameter * * *");
        }
    }
    static function OutputArrayOfWebpageParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->WebpageParameter))
        {
            return;
        }
        foreach ($dataObjects->WebpageParameter as $dataObject)
        {
            self::OutputWebpageParameter($dataObject);
        }
    }
    static function OutputAdEditorialStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdEditorialStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdEditorialStatus * * *");
    }
    static function OutputArrayOfAdEditorialStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdEditorialStatus * * *");
        foreach ($valueSets->AdEditorialStatus as $valueSet)
        {
            self::OutputAdEditorialStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdEditorialStatus * * *");
    }
    static function OutputAdStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdStatus * * *");
    }
    static function OutputArrayOfAdStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdStatus * * *");
        foreach ($valueSets->AdStatus as $valueSet)
        {
            self::OutputAdStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdStatus * * *");
    }
    static function OutputAdType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdType * * *");
    }
    static function OutputArrayOfAdType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdType * * *");
        foreach ($valueSets->AdType as $valueSet)
        {
            self::OutputAdType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdType * * *");
    }
    static function OutputCallToAction($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCallToAction * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCallToAction * * *");
    }
    static function OutputArrayOfCallToAction($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCallToAction * * *");
        foreach ($valueSets->CallToAction as $valueSet)
        {
            self::OutputCallToAction($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCallToAction * * *");
    }
    static function OutputLanguageName($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputLanguageName * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputLanguageName * * *");
    }
    static function OutputArrayOfLanguageName($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLanguageName * * *");
        foreach ($valueSets->LanguageName as $valueSet)
        {
            self::OutputLanguageName($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLanguageName * * *");
    }
    static function OutputAssetLinkEditorialStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAssetLinkEditorialStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAssetLinkEditorialStatus * * *");
    }
    static function OutputArrayOfAssetLinkEditorialStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAssetLinkEditorialStatus * * *");
        foreach ($valueSets->AssetLinkEditorialStatus as $valueSet)
        {
            self::OutputAssetLinkEditorialStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAssetLinkEditorialStatus * * *");
    }
    static function OutputBudgetLimitType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputBudgetLimitType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputBudgetLimitType * * *");
    }
    static function OutputArrayOfBudgetLimitType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBudgetLimitType * * *");
        foreach ($valueSets->BudgetLimitType as $valueSet)
        {
            self::OutputBudgetLimitType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBudgetLimitType * * *");
    }
    static function OutputCampaignStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCampaignStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCampaignStatus * * *");
    }
    static function OutputArrayOfCampaignStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCampaignStatus * * *");
        foreach ($valueSets->CampaignStatus as $valueSet)
        {
            self::OutputCampaignStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCampaignStatus * * *");
    }
    static function OutputCampaignType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCampaignType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCampaignType * * *");
    }
    static function OutputArrayOfCampaignType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCampaignType * * *");
        foreach ($valueSets->CampaignType as $valueSet)
        {
            self::OutputCampaignType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCampaignType * * *");
    }
    static function OutputDynamicSearchAdsSource($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputDynamicSearchAdsSource * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputDynamicSearchAdsSource * * *");
    }
    static function OutputArrayOfDynamicSearchAdsSource($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDynamicSearchAdsSource * * *");
        foreach ($valueSets->DynamicSearchAdsSource as $valueSet)
        {
            self::OutputDynamicSearchAdsSource($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDynamicSearchAdsSource * * *");
    }
    static function OutputCriterionTypeGroup($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCriterionTypeGroup * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCriterionTypeGroup * * *");
    }
    static function OutputArrayOfCriterionTypeGroup($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCriterionTypeGroup * * *");
        foreach ($valueSets->CriterionTypeGroup as $valueSet)
        {
            self::OutputCriterionTypeGroup($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCriterionTypeGroup * * *");
    }
    static function OutputBidOption($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputBidOption * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputBidOption * * *");
    }
    static function OutputArrayOfBidOption($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBidOption * * *");
        foreach ($valueSets->BidOption as $valueSet)
        {
            self::OutputBidOption($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBidOption * * *");
    }
    static function OutputCampaignAdditionalField($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCampaignAdditionalField * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCampaignAdditionalField * * *");
    }
    static function OutputArrayOfCampaignAdditionalField($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCampaignAdditionalField * * *");
        foreach ($valueSets->CampaignAdditionalField as $valueSet)
        {
            self::OutputCampaignAdditionalField($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCampaignAdditionalField * * *");
    }
    static function OutputAdRotationType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdRotationType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdRotationType * * *");
    }
    static function OutputArrayOfAdRotationType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdRotationType * * *");
        foreach ($valueSets->AdRotationType as $valueSet)
        {
            self::OutputAdRotationType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdRotationType * * *");
    }
    static function OutputNetwork($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputNetwork * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputNetwork * * *");
    }
    static function OutputArrayOfNetwork($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfNetwork * * *");
        foreach ($valueSets->Network as $valueSet)
        {
            self::OutputNetwork($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfNetwork * * *");
    }
    static function OutputAdGroupPrivacyStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupPrivacyStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdGroupPrivacyStatus * * *");
    }
    static function OutputArrayOfAdGroupPrivacyStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupPrivacyStatus * * *");
        foreach ($valueSets->AdGroupPrivacyStatus as $valueSet)
        {
            self::OutputAdGroupPrivacyStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupPrivacyStatus * * *");
    }
    static function OutputAdGroupStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdGroupStatus * * *");
    }
    static function OutputArrayOfAdGroupStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupStatus * * *");
        foreach ($valueSets->AdGroupStatus as $valueSet)
        {
            self::OutputAdGroupStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupStatus * * *");
    }
    static function OutputAdGroupAdditionalField($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupAdditionalField * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdGroupAdditionalField * * *");
    }
    static function OutputArrayOfAdGroupAdditionalField($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupAdditionalField * * *");
        foreach ($valueSets->AdGroupAdditionalField as $valueSet)
        {
            self::OutputAdGroupAdditionalField($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupAdditionalField * * *");
    }
    static function OutputAdAdditionalField($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdAdditionalField * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdAdditionalField * * *");
    }
    static function OutputArrayOfAdAdditionalField($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdAdditionalField * * *");
        foreach ($valueSets->AdAdditionalField as $valueSet)
        {
            self::OutputAdAdditionalField($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdAdditionalField * * *");
    }
    static function OutputKeywordEditorialStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordEditorialStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputKeywordEditorialStatus * * *");
    }
    static function OutputArrayOfKeywordEditorialStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordEditorialStatus * * *");
        foreach ($valueSets->KeywordEditorialStatus as $valueSet)
        {
            self::OutputKeywordEditorialStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordEditorialStatus * * *");
    }
    static function OutputMatchType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputMatchType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputMatchType * * *");
    }
    static function OutputArrayOfMatchType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfMatchType * * *");
        foreach ($valueSets->MatchType as $valueSet)
        {
            self::OutputMatchType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfMatchType * * *");
    }
    static function OutputKeywordStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputKeywordStatus * * *");
    }
    static function OutputArrayOfKeywordStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordStatus * * *");
        foreach ($valueSets->KeywordStatus as $valueSet)
        {
            self::OutputKeywordStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordStatus * * *");
    }
    static function OutputEntityType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputEntityType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputEntityType * * *");
    }
    static function OutputArrayOfEntityType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfEntityType * * *");
        foreach ($valueSets->EntityType as $valueSet)
        {
            self::OutputEntityType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfEntityType * * *");
    }
    static function OutputAppealStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAppealStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAppealStatus * * *");
    }
    static function OutputArrayOfAppealStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAppealStatus * * *");
        foreach ($valueSets->AppealStatus as $valueSet)
        {
            self::OutputAppealStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAppealStatus * * *");
    }
    static function OutputMigrationStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputMigrationStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputMigrationStatus * * *");
    }
    static function OutputArrayOfMigrationStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfMigrationStatus * * *");
        foreach ($valueSets->MigrationStatus as $valueSet)
        {
            self::OutputMigrationStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfMigrationStatus * * *");
    }
    static function OutputAccountPropertyName($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAccountPropertyName * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAccountPropertyName * * *");
    }
    static function OutputArrayOfAccountPropertyName($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccountPropertyName * * *");
        foreach ($valueSets->AccountPropertyName as $valueSet)
        {
            self::OutputAccountPropertyName($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccountPropertyName * * *");
    }
    static function OutputDay($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputDay * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputDay * * *");
    }
    static function OutputArrayOfDay($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDay * * *");
        foreach ($valueSets->Day as $valueSet)
        {
            self::OutputDay($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDay * * *");
    }
    static function OutputMinute($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputMinute * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputMinute * * *");
    }
    static function OutputArrayOfMinute($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfMinute * * *");
        foreach ($valueSets->Minute as $valueSet)
        {
            self::OutputMinute($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfMinute * * *");
    }
    static function OutputAdExtensionStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionStatus * * *");
    }
    static function OutputArrayOfAdExtensionStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionStatus * * *");
        foreach ($valueSets->AdExtensionStatus as $valueSet)
        {
            self::OutputAdExtensionStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionStatus * * *");
    }
    static function OutputBusinessGeoCodeStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputBusinessGeoCodeStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputBusinessGeoCodeStatus * * *");
    }
    static function OutputArrayOfBusinessGeoCodeStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBusinessGeoCodeStatus * * *");
        foreach ($valueSets->BusinessGeoCodeStatus as $valueSet)
        {
            self::OutputBusinessGeoCodeStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBusinessGeoCodeStatus * * *");
    }
    static function OutputActionAdExtensionActionType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputActionAdExtensionActionType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputActionAdExtensionActionType * * *");
    }
    static function OutputArrayOfActionAdExtensionActionType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfActionAdExtensionActionType * * *");
        foreach ($valueSets->ActionAdExtensionActionType as $valueSet)
        {
            self::OutputActionAdExtensionActionType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfActionAdExtensionActionType * * *");
    }
    static function OutputPriceExtensionType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputPriceExtensionType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputPriceExtensionType * * *");
    }
    static function OutputArrayOfPriceExtensionType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPriceExtensionType * * *");
        foreach ($valueSets->PriceExtensionType as $valueSet)
        {
            self::OutputPriceExtensionType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPriceExtensionType * * *");
    }
    static function OutputPriceQualifier($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputPriceQualifier * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputPriceQualifier * * *");
    }
    static function OutputArrayOfPriceQualifier($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPriceQualifier * * *");
        foreach ($valueSets->PriceQualifier as $valueSet)
        {
            self::OutputPriceQualifier($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPriceQualifier * * *");
    }
    static function OutputPriceUnit($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputPriceUnit * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputPriceUnit * * *");
    }
    static function OutputArrayOfPriceUnit($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPriceUnit * * *");
        foreach ($valueSets->PriceUnit as $valueSet)
        {
            self::OutputPriceUnit($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPriceUnit * * *");
    }
    static function OutputPromotionDiscountModifier($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputPromotionDiscountModifier * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputPromotionDiscountModifier * * *");
    }
    static function OutputArrayOfPromotionDiscountModifier($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPromotionDiscountModifier * * *");
        foreach ($valueSets->PromotionDiscountModifier as $valueSet)
        {
            self::OutputPromotionDiscountModifier($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPromotionDiscountModifier * * *");
    }
    static function OutputPromotionOccasion($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputPromotionOccasion * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputPromotionOccasion * * *");
    }
    static function OutputArrayOfPromotionOccasion($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPromotionOccasion * * *");
        foreach ($valueSets->PromotionOccasion as $valueSet)
        {
            self::OutputPromotionOccasion($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPromotionOccasion * * *");
    }
    static function OutputAdExtensionHeaderType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionHeaderType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionHeaderType * * *");
    }
    static function OutputArrayOfAdExtensionHeaderType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionHeaderType * * *");
        foreach ($valueSets->AdExtensionHeaderType as $valueSet)
        {
            self::OutputAdExtensionHeaderType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionHeaderType * * *");
    }
    static function OutputAdExtensionsTypeFilter($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionsTypeFilter * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionsTypeFilter * * *");
    }
    static function OutputArrayOfAdExtensionsTypeFilter($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionsTypeFilter * * *");
        foreach ($valueSets->AdExtensionsTypeFilter as $valueSet)
        {
            self::OutputAdExtensionsTypeFilter($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionsTypeFilter * * *");
    }
    static function OutputAdExtensionAdditionalField($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionAdditionalField * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionAdditionalField * * *");
    }
    static function OutputArrayOfAdExtensionAdditionalField($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionAdditionalField * * *");
        foreach ($valueSets->AdExtensionAdditionalField as $valueSet)
        {
            self::OutputAdExtensionAdditionalField($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionAdditionalField * * *");
    }
    static function OutputAssociationType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAssociationType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAssociationType * * *");
    }
    static function OutputArrayOfAssociationType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAssociationType * * *");
        foreach ($valueSets->AssociationType as $valueSet)
        {
            self::OutputAssociationType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAssociationType * * *");
    }
    static function OutputAdExtensionEditorialStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionEditorialStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionEditorialStatus * * *");
    }
    static function OutputArrayOfAdExtensionEditorialStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionEditorialStatus * * *");
        foreach ($valueSets->AdExtensionEditorialStatus as $valueSet)
        {
            self::OutputAdExtensionEditorialStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionEditorialStatus * * *");
    }
    static function OutputMediaEnabledEntityFilter($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputMediaEnabledEntityFilter * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputMediaEnabledEntityFilter * * *");
    }
    static function OutputArrayOfMediaEnabledEntityFilter($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfMediaEnabledEntityFilter * * *");
        foreach ($valueSets->MediaEnabledEntityFilter as $valueSet)
        {
            self::OutputMediaEnabledEntityFilter($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfMediaEnabledEntityFilter * * *");
    }
    static function OutputAdGroupCriterionType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupCriterionType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdGroupCriterionType * * *");
    }
    static function OutputArrayOfAdGroupCriterionType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupCriterionType * * *");
        foreach ($valueSets->AdGroupCriterionType as $valueSet)
        {
            self::OutputAdGroupCriterionType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupCriterionType * * *");
    }
    static function OutputCriterionAdditionalField($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCriterionAdditionalField * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCriterionAdditionalField * * *");
    }
    static function OutputArrayOfCriterionAdditionalField($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCriterionAdditionalField * * *");
        foreach ($valueSets->CriterionAdditionalField as $valueSet)
        {
            self::OutputCriterionAdditionalField($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCriterionAdditionalField * * *");
    }
    static function OutputProductPartitionType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputProductPartitionType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputProductPartitionType * * *");
    }
    static function OutputArrayOfProductPartitionType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductPartitionType * * *");
        foreach ($valueSets->ProductPartitionType as $valueSet)
        {
            self::OutputProductPartitionType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductPartitionType * * *");
    }
    static function OutputWebpageConditionOperand($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputWebpageConditionOperand * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputWebpageConditionOperand * * *");
    }
    static function OutputArrayOfWebpageConditionOperand($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfWebpageConditionOperand * * *");
        foreach ($valueSets->WebpageConditionOperand as $valueSet)
        {
            self::OutputWebpageConditionOperand($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfWebpageConditionOperand * * *");
    }
    static function OutputAgeRange($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAgeRange * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAgeRange * * *");
    }
    static function OutputArrayOfAgeRange($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAgeRange * * *");
        foreach ($valueSets->AgeRange as $valueSet)
        {
            self::OutputAgeRange($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAgeRange * * *");
    }
    static function OutputGenderType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputGenderType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputGenderType * * *");
    }
    static function OutputArrayOfGenderType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfGenderType * * *");
        foreach ($valueSets->GenderType as $valueSet)
        {
            self::OutputGenderType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfGenderType * * *");
    }
    static function OutputDistanceUnit($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputDistanceUnit * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputDistanceUnit * * *");
    }
    static function OutputArrayOfDistanceUnit($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDistanceUnit * * *");
        foreach ($valueSets->DistanceUnit as $valueSet)
        {
            self::OutputDistanceUnit($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDistanceUnit * * *");
    }
    static function OutputIntentOption($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputIntentOption * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputIntentOption * * *");
    }
    static function OutputArrayOfIntentOption($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfIntentOption * * *");
        foreach ($valueSets->IntentOption as $valueSet)
        {
            self::OutputIntentOption($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfIntentOption * * *");
    }
    static function OutputAudienceType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAudienceType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAudienceType * * *");
    }
    static function OutputArrayOfAudienceType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAudienceType * * *");
        foreach ($valueSets->AudienceType as $valueSet)
        {
            self::OutputAudienceType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAudienceType * * *");
    }
    static function OutputProfileType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputProfileType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputProfileType * * *");
    }
    static function OutputArrayOfProfileType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProfileType * * *");
        foreach ($valueSets->ProfileType as $valueSet)
        {
            self::OutputProfileType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProfileType * * *");
    }
    static function OutputAdGroupCriterionStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupCriterionStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdGroupCriterionStatus * * *");
    }
    static function OutputArrayOfAdGroupCriterionStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupCriterionStatus * * *");
        foreach ($valueSets->AdGroupCriterionStatus as $valueSet)
        {
            self::OutputAdGroupCriterionStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupCriterionStatus * * *");
    }
    static function OutputAdGroupCriterionEditorialStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupCriterionEditorialStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdGroupCriterionEditorialStatus * * *");
    }
    static function OutputArrayOfAdGroupCriterionEditorialStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupCriterionEditorialStatus * * *");
        foreach ($valueSets->AdGroupCriterionEditorialStatus as $valueSet)
        {
            self::OutputAdGroupCriterionEditorialStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupCriterionEditorialStatus * * *");
    }
    static function OutputItemAction($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputItemAction * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputItemAction * * *");
    }
    static function OutputArrayOfItemAction($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfItemAction * * *");
        foreach ($valueSets->ItemAction as $valueSet)
        {
            self::OutputItemAction($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfItemAction * * *");
    }
    static function OutputBMCStoreAdditionalField($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputBMCStoreAdditionalField * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputBMCStoreAdditionalField * * *");
    }
    static function OutputArrayOfBMCStoreAdditionalField($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBMCStoreAdditionalField * * *");
        foreach ($valueSets->BMCStoreAdditionalField as $valueSet)
        {
            self::OutputBMCStoreAdditionalField($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBMCStoreAdditionalField * * *");
    }
    static function OutputBMCStoreSubType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputBMCStoreSubType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputBMCStoreSubType * * *");
    }
    static function OutputArrayOfBMCStoreSubType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBMCStoreSubType * * *");
        foreach ($valueSets->BMCStoreSubType as $valueSet)
        {
            self::OutputBMCStoreSubType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBMCStoreSubType * * *");
    }
    static function OutputEntityScope($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputEntityScope * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputEntityScope * * *");
    }
    static function OutputArrayOfEntityScope($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfEntityScope * * *");
        foreach ($valueSets->EntityScope as $valueSet)
        {
            self::OutputEntityScope($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfEntityScope * * *");
    }
    static function OutputCampaignCriterionStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCampaignCriterionStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCampaignCriterionStatus * * *");
    }
    static function OutputArrayOfCampaignCriterionStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCampaignCriterionStatus * * *");
        foreach ($valueSets->CampaignCriterionStatus as $valueSet)
        {
            self::OutputCampaignCriterionStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCampaignCriterionStatus * * *");
    }
    static function OutputCampaignCriterionType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCampaignCriterionType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCampaignCriterionType * * *");
    }
    static function OutputArrayOfCampaignCriterionType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCampaignCriterionType * * *");
        foreach ($valueSets->CampaignCriterionType as $valueSet)
        {
            self::OutputCampaignCriterionType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCampaignCriterionType * * *");
    }
    static function OutputNormalForm($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputNormalForm * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputNormalForm * * *");
    }
    static function OutputArrayOfNormalForm($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfNormalForm * * *");
        foreach ($valueSets->NormalForm as $valueSet)
        {
            self::OutputNormalForm($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfNormalForm * * *");
    }
    static function OutputStringOperator($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputStringOperator * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputStringOperator * * *");
    }
    static function OutputArrayOfStringOperator($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfStringOperator * * *");
        foreach ($valueSets->StringOperator as $valueSet)
        {
            self::OutputStringOperator($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfStringOperator * * *");
    }
    static function OutputNumberOperator($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputNumberOperator * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputNumberOperator * * *");
    }
    static function OutputArrayOfNumberOperator($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfNumberOperator * * *");
        foreach ($valueSets->NumberOperator as $valueSet)
        {
            self::OutputNumberOperator($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfNumberOperator * * *");
    }
    static function OutputProductAudienceType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputProductAudienceType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputProductAudienceType * * *");
    }
    static function OutputArrayOfProductAudienceType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductAudienceType * * *");
        foreach ($valueSets->ProductAudienceType as $valueSet)
        {
            self::OutputProductAudienceType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductAudienceType * * *");
    }
    static function OutputLogicalOperator($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputLogicalOperator * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputLogicalOperator * * *");
    }
    static function OutputArrayOfLogicalOperator($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLogicalOperator * * *");
        foreach ($valueSets->LogicalOperator as $valueSet)
        {
            self::OutputLogicalOperator($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLogicalOperator * * *");
    }
    static function OutputAudienceAdditionalField($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAudienceAdditionalField * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAudienceAdditionalField * * *");
    }
    static function OutputArrayOfAudienceAdditionalField($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAudienceAdditionalField * * *");
        foreach ($valueSets->AudienceAdditionalField as $valueSet)
        {
            self::OutputAudienceAdditionalField($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAudienceAdditionalField * * *");
    }
    static function OutputUetTagTrackingStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputUetTagTrackingStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputUetTagTrackingStatus * * *");
    }
    static function OutputArrayOfUetTagTrackingStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfUetTagTrackingStatus * * *");
        foreach ($valueSets->UetTagTrackingStatus as $valueSet)
        {
            self::OutputUetTagTrackingStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfUetTagTrackingStatus * * *");
    }
    static function OutputConversionGoalType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputConversionGoalType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputConversionGoalType * * *");
    }
    static function OutputArrayOfConversionGoalType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfConversionGoalType * * *");
        foreach ($valueSets->ConversionGoalType as $valueSet)
        {
            self::OutputConversionGoalType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfConversionGoalType * * *");
    }
    static function OutputConversionGoalAdditionalField($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputConversionGoalAdditionalField * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputConversionGoalAdditionalField * * *");
    }
    static function OutputArrayOfConversionGoalAdditionalField($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfConversionGoalAdditionalField * * *");
        foreach ($valueSets->ConversionGoalAdditionalField as $valueSet)
        {
            self::OutputConversionGoalAdditionalField($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfConversionGoalAdditionalField * * *");
    }
    static function OutputConversionGoalCountType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputConversionGoalCountType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputConversionGoalCountType * * *");
    }
    static function OutputArrayOfConversionGoalCountType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfConversionGoalCountType * * *");
        foreach ($valueSets->ConversionGoalCountType as $valueSet)
        {
            self::OutputConversionGoalCountType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfConversionGoalCountType * * *");
    }
    static function OutputConversionGoalCategory($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputConversionGoalCategory * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputConversionGoalCategory * * *");
    }
    static function OutputArrayOfConversionGoalCategory($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfConversionGoalCategory * * *");
        foreach ($valueSets->ConversionGoalCategory as $valueSet)
        {
            self::OutputConversionGoalCategory($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfConversionGoalCategory * * *");
    }
    static function OutputConversionGoalRevenueType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputConversionGoalRevenueType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputConversionGoalRevenueType * * *");
    }
    static function OutputArrayOfConversionGoalRevenueType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfConversionGoalRevenueType * * *");
        foreach ($valueSets->ConversionGoalRevenueType as $valueSet)
        {
            self::OutputConversionGoalRevenueType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfConversionGoalRevenueType * * *");
    }
    static function OutputConversionGoalStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputConversionGoalStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputConversionGoalStatus * * *");
    }
    static function OutputArrayOfConversionGoalStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfConversionGoalStatus * * *");
        foreach ($valueSets->ConversionGoalStatus as $valueSet)
        {
            self::OutputConversionGoalStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfConversionGoalStatus * * *");
    }
    static function OutputConversionGoalTrackingStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputConversionGoalTrackingStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputConversionGoalTrackingStatus * * *");
    }
    static function OutputArrayOfConversionGoalTrackingStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfConversionGoalTrackingStatus * * *");
        foreach ($valueSets->ConversionGoalTrackingStatus as $valueSet)
        {
            self::OutputConversionGoalTrackingStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfConversionGoalTrackingStatus * * *");
    }
    static function OutputExpressionOperator($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputExpressionOperator * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputExpressionOperator * * *");
    }
    static function OutputArrayOfExpressionOperator($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfExpressionOperator * * *");
        foreach ($valueSets->ExpressionOperator as $valueSet)
        {
            self::OutputExpressionOperator($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfExpressionOperator * * *");
    }
    static function OutputValueOperator($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputValueOperator * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputValueOperator * * *");
    }
    static function OutputArrayOfValueOperator($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfValueOperator * * *");
        foreach ($valueSets->ValueOperator as $valueSet)
        {
            self::OutputValueOperator($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfValueOperator * * *");
    }
    static function OutputImportAdditionalField($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputImportAdditionalField * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputImportAdditionalField * * *");
    }
    static function OutputArrayOfImportAdditionalField($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfImportAdditionalField * * *");
        foreach ($valueSets->ImportAdditionalField as $valueSet)
        {
            self::OutputImportAdditionalField($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfImportAdditionalField * * *");
    }
    static function OutputImportEntityType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputImportEntityType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputImportEntityType * * *");
    }
    static function OutputArrayOfImportEntityType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfImportEntityType * * *");
        foreach ($valueSets->ImportEntityType as $valueSet)
        {
            self::OutputImportEntityType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfImportEntityType * * *");
    }
    static function OutputStatusMessage($message)
    {
        printf(" % s\n", $message);
    }
    static function OutputArrayOfString($items)
    {
        if(count((array)$items) == 0 || !isset($items->string))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfString * * *");
        foreach ($items->string as $item)
        {
            self::OutputStatusMessage(sprintf("%s", $item));
        }
        self::OutputStatusMessage("* * * End OutputArrayOfString * * *");
    }
    static function OutputArrayOfLong($items)
    {
        if(count((array)$items) == 0 || !isset($items->long))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLong * * *");
        foreach ($items->long as $item)
        {
            self::OutputStatusMessage(sprintf("%s", $item));
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLong * * *");
    }
    static function OutputArrayOfInt($items)
    {
        if(count((array)$items) == 0 || !isset($items->int))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfInt * * *");
        foreach ($items->int as $item)
        {
            self::OutputStatusMessage(sprintf("%s", $item));
        }
        self::OutputStatusMessage("* * * End OutputArrayOfInt * * *");
    }
}
