<?php

namespace Microsoft\BingAds\Samples\V12;

require_once __DIR__ . "/../vendor/autoload.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V12\CampaignManagement classes that will be used.
use Microsoft\BingAds\V12\CampaignManagement\AddAdExtensionsRequest;
use Microsoft\BingAds\V12\CampaignManagement\AddAdGroupCriterionsRequest;
use Microsoft\BingAds\V12\CampaignManagement\AddAdGroupsRequest;
use Microsoft\BingAds\V12\CampaignManagement\AddAdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\AddAudiencesRequest;
use Microsoft\BingAds\V12\CampaignManagement\AddBudgetsRequest;
use Microsoft\BingAds\V12\CampaignManagement\AddCampaignCriterionsRequest;
use Microsoft\BingAds\V12\CampaignManagement\AddCampaignsRequest;
use Microsoft\BingAds\V12\CampaignManagement\AddConversionGoalsRequest;
use Microsoft\BingAds\V12\CampaignManagement\AddExperimentsRequest;
use Microsoft\BingAds\V12\CampaignManagement\AddKeywordsRequest;
use Microsoft\BingAds\V12\CampaignManagement\AddLabelsRequest;
use Microsoft\BingAds\V12\CampaignManagement\AddListItemsToSharedListRequest;
use Microsoft\BingAds\V12\CampaignManagement\AddMediaRequest;
use Microsoft\BingAds\V12\CampaignManagement\AddNegativeKeywordsToEntitiesRequest;
use Microsoft\BingAds\V12\CampaignManagement\AddSharedEntityRequest;
use Microsoft\BingAds\V12\CampaignManagement\AddUetTagsRequest;
use Microsoft\BingAds\V12\CampaignManagement\AppealEditorialRejectionsRequest;
use Microsoft\BingAds\V12\CampaignManagement\ApplyOfflineConversionsRequest;
use Microsoft\BingAds\V12\CampaignManagement\ApplyProductPartitionActionsRequest;
use Microsoft\BingAds\V12\CampaignManagement\DeleteAdExtensionsRequest;
use Microsoft\BingAds\V12\CampaignManagement\DeleteAdExtensionsAssociationsRequest;
use Microsoft\BingAds\V12\CampaignManagement\DeleteAdGroupCriterionsRequest;
use Microsoft\BingAds\V12\CampaignManagement\DeleteAdGroupsRequest;
use Microsoft\BingAds\V12\CampaignManagement\DeleteAdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\DeleteAudiencesRequest;
use Microsoft\BingAds\V12\CampaignManagement\DeleteBudgetsRequest;
use Microsoft\BingAds\V12\CampaignManagement\DeleteCampaignCriterionsRequest;
use Microsoft\BingAds\V12\CampaignManagement\DeleteCampaignsRequest;
use Microsoft\BingAds\V12\CampaignManagement\DeleteExperimentsRequest;
use Microsoft\BingAds\V12\CampaignManagement\DeleteKeywordsRequest;
use Microsoft\BingAds\V12\CampaignManagement\DeleteLabelAssociationsRequest;
use Microsoft\BingAds\V12\CampaignManagement\DeleteLabelsRequest;
use Microsoft\BingAds\V12\CampaignManagement\DeleteListItemsFromSharedListRequest;
use Microsoft\BingAds\V12\CampaignManagement\DeleteMediaRequest;
use Microsoft\BingAds\V12\CampaignManagement\DeleteNegativeKeywordsFromEntitiesRequest;
use Microsoft\BingAds\V12\CampaignManagement\DeleteSharedEntitiesRequest;
use Microsoft\BingAds\V12\CampaignManagement\DeleteSharedEntityAssociationsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetAccountMigrationStatusesRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetAccountPropertiesRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetAdExtensionIdsByAccountIdRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetAdExtensionsAssociationsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetAdExtensionsByIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetAdExtensionsEditorialReasonsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetAdGroupCriterionsByIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetAdGroupsByCampaignIdRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetAdGroupsByIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetAdsByAdGroupIdRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetAdsByEditorialStatusRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetAdsByIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetAudiencesByIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetBMCStoresByCustomerIdRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetBSCCountriesRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetBudgetsByIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetCampaignCriterionsByIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetCampaignIdsByBudgetIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetCampaignsByAccountIdRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetCampaignsByIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetConversionGoalsByIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetConversionGoalsByTagIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetEditorialReasonsByIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetExperimentsByIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetGeoLocationsFileUrlRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetKeywordsByAdGroupIdRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetKeywordsByEditorialStatusRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetKeywordsByIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetLabelAssociationsByEntityIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetLabelAssociationsByLabelIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetLabelsByIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetListItemsBySharedListRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetMediaAssociationsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetMediaMetaDataByAccountIdRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetMediaMetaDataByIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetNegativeKeywordsByEntityIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetNegativeSitesByAdGroupIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetNegativeSitesByCampaignIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetProfileDataFileUrlRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetSharedEntitiesByAccountIdRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetSharedEntityAssociationsByEntityIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetSharedEntityAssociationsBySharedEntityIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\GetUetTagsByIdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\SetAccountPropertiesRequest;
use Microsoft\BingAds\V12\CampaignManagement\SetAdExtensionsAssociationsRequest;
use Microsoft\BingAds\V12\CampaignManagement\SetLabelAssociationsRequest;
use Microsoft\BingAds\V12\CampaignManagement\SetNegativeSitesToAdGroupsRequest;
use Microsoft\BingAds\V12\CampaignManagement\SetNegativeSitesToCampaignsRequest;
use Microsoft\BingAds\V12\CampaignManagement\SetSharedEntityAssociationsRequest;
use Microsoft\BingAds\V12\CampaignManagement\UpdateAdExtensionsRequest;
use Microsoft\BingAds\V12\CampaignManagement\UpdateAdGroupCriterionsRequest;
use Microsoft\BingAds\V12\CampaignManagement\UpdateAdGroupsRequest;
use Microsoft\BingAds\V12\CampaignManagement\UpdateAdsRequest;
use Microsoft\BingAds\V12\CampaignManagement\UpdateAudiencesRequest;
use Microsoft\BingAds\V12\CampaignManagement\UpdateBudgetsRequest;
use Microsoft\BingAds\V12\CampaignManagement\UpdateCampaignCriterionsRequest;
use Microsoft\BingAds\V12\CampaignManagement\UpdateCampaignsRequest;
use Microsoft\BingAds\V12\CampaignManagement\UpdateConversionGoalsRequest;
use Microsoft\BingAds\V12\CampaignManagement\UpdateExperimentsRequest;
use Microsoft\BingAds\V12\CampaignManagement\UpdateKeywordsRequest;
use Microsoft\BingAds\V12\CampaignManagement\UpdateLabelsRequest;
use Microsoft\BingAds\V12\CampaignManagement\UpdateSharedEntitiesRequest;
use Microsoft\BingAds\V12\CampaignManagement\UpdateUetTagsRequest;

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
        $campaigns,
        $includeDynamicSearchAdsSource)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddCampaignsRequest();

        $request->AccountId = $accountId;
        $request->Campaigns = $campaigns;
        $request->IncludeDynamicSearchAdsSource = $includeDynamicSearchAdsSource;

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
        $sharedList)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddListItemsToSharedListRequest();

        $request->ListItems = $listItems;
        $request->SharedList = $sharedList;

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
        $listItems)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new AddSharedEntityRequest();

        $request->SharedEntity = $sharedEntity;
        $request->ListItems = $listItems;

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
        $sharedList)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteListItemsFromSharedListRequest();

        $request->ListItemIds = $listItemIds;
        $request->SharedList = $sharedList;

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
        $sharedEntities)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteSharedEntitiesRequest();

        $request->SharedEntities = $sharedEntities;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteSharedEntities($request);
    }
    static function DeleteSharedEntityAssociations(
        $associations)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new DeleteSharedEntityAssociationsRequest();

        $request->Associations = $associations;

        return $GLOBALS['CampaignManagementProxy']->GetService()->DeleteSharedEntityAssociations($request);
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
        $entityIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAdExtensionsAssociationsRequest();

        $request->AccountId = $accountId;
        $request->AdExtensionType = $adExtensionType;
        $request->AssociationType = $associationType;
        $request->EntityIds = $entityIds;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetAdExtensionsAssociations($request);
    }
    static function GetAdExtensionsByIds(
        $accountId,
        $adExtensionIds,
        $adExtensionType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAdExtensionsByIdsRequest();

        $request->AccountId = $accountId;
        $request->AdExtensionIds = $adExtensionIds;
        $request->AdExtensionType = $adExtensionType;

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
        $criterionType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAdGroupCriterionsByIdsRequest();

        $request->AdGroupCriterionIds = $adGroupCriterionIds;
        $request->AdGroupId = $adGroupId;
        $request->CriterionType = $criterionType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetAdGroupCriterionsByIds($request);
    }
    static function GetAdGroupsByCampaignId(
        $campaignId)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAdGroupsByCampaignIdRequest();

        $request->CampaignId = $campaignId;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetAdGroupsByCampaignId($request);
    }
    static function GetAdGroupsByIds(
        $campaignId,
        $adGroupIds)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAdGroupsByIdsRequest();

        $request->CampaignId = $campaignId;
        $request->AdGroupIds = $adGroupIds;

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
        $type)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetAudiencesByIdsRequest();

        $request->AudienceIds = $audienceIds;
        $request->Type = $type;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetAudiencesByIds($request);
    }
    static function GetBMCStoresByCustomerId()
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetBMCStoresByCustomerIdRequest();


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
        $criterionType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetCampaignCriterionsByIdsRequest();

        $request->CampaignCriterionIds = $campaignCriterionIds;
        $request->CampaignId = $campaignId;
        $request->CriterionType = $criterionType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetCampaignCriterionsByIds($request);
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
        $conversionGoalTypes)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetConversionGoalsByIdsRequest();

        $request->ConversionGoalIds = $conversionGoalIds;
        $request->ConversionGoalTypes = $conversionGoalTypes;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetConversionGoalsByIds($request);
    }
    static function GetConversionGoalsByTagIds(
        $tagIds,
        $conversionGoalTypes)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetConversionGoalsByTagIdsRequest();

        $request->TagIds = $tagIds;
        $request->ConversionGoalTypes = $conversionGoalTypes;

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
        $sharedList)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetListItemsBySharedListRequest();

        $request->SharedList = $sharedList;

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
        $sharedEntityType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetSharedEntityAssociationsByEntityIdsRequest();

        $request->EntityIds = $entityIds;
        $request->EntityType = $entityType;
        $request->SharedEntityType = $sharedEntityType;

        return $GLOBALS['CampaignManagementProxy']->GetService()->GetSharedEntityAssociationsByEntityIds($request);
    }
    static function GetSharedEntityAssociationsBySharedEntityIds(
        $entityType,
        $sharedEntityIds,
        $sharedEntityType)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new GetSharedEntityAssociationsBySharedEntityIdsRequest();

        $request->EntityType = $entityType;
        $request->SharedEntityIds = $sharedEntityIds;
        $request->SharedEntityType = $sharedEntityType;

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
        $associations)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new SetSharedEntityAssociationsRequest();

        $request->Associations = $associations;

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
        $campaigns,
        $includeDynamicSearchAdsSource)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateCampaignsRequest();

        $request->AccountId = $accountId;
        $request->Campaigns = $campaigns;
        $request->IncludeDynamicSearchAdsSource = $includeDynamicSearchAdsSource;

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
        $sharedEntities)
    {
        $GLOBALS['CampaignManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CampaignManagementProxy'];

        $request = new UpdateSharedEntitiesRequest();

        $request->SharedEntities = $sharedEntities;

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
    static function OutputAccountMigrationStatusesInfo($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAccountMigrationStatusesInfo * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountId: %s", $dataObject->AccountId));
            self::OutputArrayOfMigrationStatusInfo($dataObject->MigrationStatusInfos);
        }
        self::OutputStatusMessage("* * * End OutputAccountMigrationStatusesInfo * * *");
    }
    static function OutputArrayOfAccountMigrationStatusesInfo($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountMigrationStatusesInfo))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccountMigrationStatusesInfo * * *");
        foreach ($dataObjects->AccountMigrationStatusesInfo as $dataObject)
        {
            self::OutputAccountMigrationStatusesInfo($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccountMigrationStatusesInfo * * *");
    }
    static function OutputAccountProperty($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAccountProperty * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Value: %s", $dataObject->Value));
        }
        self::OutputStatusMessage("* * * End OutputAccountProperty * * *");
    }
    static function OutputArrayOfAccountProperty($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountProperty))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccountProperty * * *");
        foreach ($dataObjects->AccountProperty as $dataObject)
        {
            self::OutputAccountProperty($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccountProperty * * *");
    }
    static function OutputActionAdExtension($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputActionAdExtension * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("ActionType: %s", $dataObject->ActionType));
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
        }
        self::OutputStatusMessage("* * * End OutputActionAdExtension * * *");
    }
    static function OutputArrayOfActionAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ActionAdExtension))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfActionAdExtension * * *");
        foreach ($dataObjects->ActionAdExtension as $dataObject)
        {
            self::OutputActionAdExtension($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfActionAdExtension * * *");
    }
    static function OutputAd($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAd * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AdFormatPreference: %s", $dataObject->AdFormatPreference));
            self::OutputStatusMessage(sprintf("DevicePreference: %s", $dataObject->DevicePreference));
            self::OutputStatusMessage(sprintf("EditorialStatus: %s", $dataObject->EditorialStatus));
            self::OutputArrayOfAppUrl($dataObject->FinalAppUrls);
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
            if($dataObject->Type === "AppInstallAd")
            {
                self::OutputAppInstallAd($dataObject);
            }
            if($dataObject->Type === "DynamicSearchAd")
            {
                self::OutputDynamicSearchAd($dataObject);
            }
            if($dataObject->Type === "ExpandedTextAd")
            {
                self::OutputExpandedTextAd($dataObject);
            }
            if($dataObject->Type === "ProductAd")
            {
                self::OutputProductAd($dataObject);
            }
            if($dataObject->Type === "ResponsiveAd")
            {
                self::OutputResponsiveAd($dataObject);
            }
            if($dataObject->Type === "ResponsiveSearchAd")
            {
                self::OutputResponsiveSearchAd($dataObject);
            }
            if($dataObject->Type === "TextAd")
            {
                self::OutputTextAd($dataObject);
            }
        }
        self::OutputStatusMessage("* * * End OutputAd * * *");
    }
    static function OutputArrayOfAd($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Ad))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAd * * *");
        foreach ($dataObjects->Ad as $dataObject)
        {
            self::OutputAd($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAd * * *");
    }
    static function OutputAdApiError($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdApiError * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Code: %s", $dataObject->Code));
            self::OutputStatusMessage(sprintf("Detail: %s", $dataObject->Detail));
            self::OutputStatusMessage(sprintf("ErrorCode: %s", $dataObject->ErrorCode));
            self::OutputStatusMessage(sprintf("Message: %s", $dataObject->Message));
        }
        self::OutputStatusMessage("* * * End OutputAdApiError * * *");
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
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdApiError * * *");
        foreach ($dataObjects->AdApiError as $dataObject)
        {
            self::OutputAdApiError($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdApiError * * *");
    }
    static function OutputAdApiFaultDetail($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdApiFaultDetail * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfAdApiError($dataObject->Errors);
        }
        self::OutputStatusMessage("* * * End OutputAdApiFaultDetail * * *");
    }
    static function OutputArrayOfAdApiFaultDetail($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdApiFaultDetail))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdApiFaultDetail * * *");
        foreach ($dataObjects->AdApiFaultDetail as $dataObject)
        {
            self::OutputAdApiFaultDetail($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdApiFaultDetail * * *");
    }
    static function OutputAddress($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAddress * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("CityName: %s", $dataObject->CityName));
            self::OutputStatusMessage(sprintf("CountryCode: %s", $dataObject->CountryCode));
            self::OutputStatusMessage(sprintf("PostalCode: %s", $dataObject->PostalCode));
            self::OutputStatusMessage(sprintf("ProvinceCode: %s", $dataObject->ProvinceCode));
            self::OutputStatusMessage(sprintf("ProvinceName: %s", $dataObject->ProvinceName));
            self::OutputStatusMessage(sprintf("StreetAddress: %s", $dataObject->StreetAddress));
            self::OutputStatusMessage(sprintf("StreetAddress2: %s", $dataObject->StreetAddress2));
        }
        self::OutputStatusMessage("* * * End OutputAddress * * *");
    }
    static function OutputArrayOfAddress($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Address))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAddress * * *");
        foreach ($dataObjects->Address as $dataObject)
        {
            self::OutputAddress($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAddress * * *");
    }
    static function OutputAdExtension($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtension * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("DevicePreference: %s", $dataObject->DevicePreference));
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
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
        }
        self::OutputStatusMessage("* * * End OutputAdExtension * * *");
    }
    static function OutputArrayOfAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtension))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtension * * *");
        foreach ($dataObjects->AdExtension as $dataObject)
        {
            self::OutputAdExtension($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtension * * *");
    }
    static function OutputAdExtensionAssociation($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionAssociation * * *");
        if (!empty($dataObject))
        {
            self::OutputAdExtension($dataObject->AdExtension);
            self::OutputStatusMessage(sprintf("AssociationType: %s", $dataObject->AssociationType));
            self::OutputStatusMessage(sprintf("EditorialStatus: %s", $dataObject->EditorialStatus));
            self::OutputStatusMessage(sprintf("EntityId: %s", $dataObject->EntityId));
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionAssociation * * *");
    }
    static function OutputArrayOfAdExtensionAssociation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionAssociation))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionAssociation * * *");
        foreach ($dataObjects->AdExtensionAssociation as $dataObject)
        {
            self::OutputAdExtensionAssociation($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionAssociation * * *");
    }
    static function OutputAdExtensionAssociationCollection($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionAssociationCollection * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfAdExtensionAssociation($dataObject->AdExtensionAssociations);
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionAssociationCollection * * *");
    }
    static function OutputArrayOfAdExtensionAssociationCollection($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionAssociationCollection))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionAssociationCollection * * *");
        foreach ($dataObjects->AdExtensionAssociationCollection as $dataObject)
        {
            self::OutputAdExtensionAssociationCollection($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionAssociationCollection * * *");
    }
    static function OutputAdExtensionEditorialReason($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionEditorialReason * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Location: %s", $dataObject->Location));
            self::OutputArrayOfString($dataObject->PublisherCountries);
            self::OutputStatusMessage(sprintf("ReasonCode: %s", $dataObject->ReasonCode));
            self::OutputStatusMessage(sprintf("Term: %s", $dataObject->Term));
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionEditorialReason * * *");
    }
    static function OutputArrayOfAdExtensionEditorialReason($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionEditorialReason))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionEditorialReason * * *");
        foreach ($dataObjects->AdExtensionEditorialReason as $dataObject)
        {
            self::OutputAdExtensionEditorialReason($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionEditorialReason * * *");
    }
    static function OutputAdExtensionEditorialReasonCollection($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionEditorialReasonCollection * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AdExtensionId: %s", $dataObject->AdExtensionId));
            self::OutputArrayOfAdExtensionEditorialReason($dataObject->Reasons);
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionEditorialReasonCollection * * *");
    }
    static function OutputArrayOfAdExtensionEditorialReasonCollection($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionEditorialReasonCollection))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionEditorialReasonCollection * * *");
        foreach ($dataObjects->AdExtensionEditorialReasonCollection as $dataObject)
        {
            self::OutputAdExtensionEditorialReasonCollection($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionEditorialReasonCollection * * *");
    }
    static function OutputAdExtensionIdentity($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionIdentity * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Version: %s", $dataObject->Version));
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionIdentity * * *");
    }
    static function OutputArrayOfAdExtensionIdentity($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionIdentity))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionIdentity * * *");
        foreach ($dataObjects->AdExtensionIdentity as $dataObject)
        {
            self::OutputAdExtensionIdentity($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionIdentity * * *");
    }
    static function OutputAdExtensionIdToEntityIdAssociation($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionIdToEntityIdAssociation * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AdExtensionId: %s", $dataObject->AdExtensionId));
            self::OutputStatusMessage(sprintf("EntityId: %s", $dataObject->EntityId));
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionIdToEntityIdAssociation * * *");
    }
    static function OutputArrayOfAdExtensionIdToEntityIdAssociation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionIdToEntityIdAssociation))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionIdToEntityIdAssociation * * *");
        foreach ($dataObjects->AdExtensionIdToEntityIdAssociation as $dataObject)
        {
            self::OutputAdExtensionIdToEntityIdAssociation($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionIdToEntityIdAssociation * * *");
    }
    static function OutputAdGroup($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroup * * *");
        if (!empty($dataObject))
        {
            self::OutputAdRotation($dataObject->AdRotation);
            self::OutputStatusMessage(sprintf("AudienceAdsBidAdjustment: %s", $dataObject->AudienceAdsBidAdjustment));
            self::OutputBiddingScheme($dataObject->BiddingScheme);
            self::OutputBid($dataObject->CpcBid);
            self::OutputDate($dataObject->EndDate);
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Network: %s", $dataObject->Network));
            self::OutputStatusMessage(sprintf("PrivacyStatus: %s", $dataObject->PrivacyStatus));
            self::OutputArrayOfSetting($dataObject->Settings);
            self::OutputDate($dataObject->StartDate);
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
        }
        self::OutputStatusMessage("* * * End OutputAdGroup * * *");
    }
    static function OutputArrayOfAdGroup($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroup))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroup * * *");
        foreach ($dataObjects->AdGroup as $dataObject)
        {
            self::OutputAdGroup($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroup * * *");
    }
    static function OutputAdGroupCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupCriterion * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
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
        }
        self::OutputStatusMessage("* * * End OutputAdGroupCriterion * * *");
    }
    static function OutputArrayOfAdGroupCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupCriterion * * *");
        foreach ($dataObjects->AdGroupCriterion as $dataObject)
        {
            self::OutputAdGroupCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupCriterion * * *");
    }
    static function OutputAdGroupCriterionAction($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupCriterionAction * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Action: %s", $dataObject->Action));
            self::OutputAdGroupCriterion($dataObject->AdGroupCriterion);
        }
        self::OutputStatusMessage("* * * End OutputAdGroupCriterionAction * * *");
    }
    static function OutputArrayOfAdGroupCriterionAction($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupCriterionAction))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupCriterionAction * * *");
        foreach ($dataObjects->AdGroupCriterionAction as $dataObject)
        {
            self::OutputAdGroupCriterionAction($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupCriterionAction * * *");
    }
    static function OutputAdGroupNegativeSites($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupNegativeSites * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
            self::OutputArrayOfString($dataObject->NegativeSites);
        }
        self::OutputStatusMessage("* * * End OutputAdGroupNegativeSites * * *");
    }
    static function OutputArrayOfAdGroupNegativeSites($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupNegativeSites))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupNegativeSites * * *");
        foreach ($dataObjects->AdGroupNegativeSites as $dataObject)
        {
            self::OutputAdGroupNegativeSites($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupNegativeSites * * *");
    }
    static function OutputAdRotation($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdRotation * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("EndDate: %s", $dataObject->EndDate));
            self::OutputStatusMessage(sprintf("StartDate: %s", $dataObject->StartDate));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
        }
        self::OutputStatusMessage("* * * End OutputAdRotation * * *");
    }
    static function OutputArrayOfAdRotation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdRotation))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdRotation * * *");
        foreach ($dataObjects->AdRotation as $dataObject)
        {
            self::OutputAdRotation($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdRotation * * *");
    }
    static function OutputAgeCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAgeCriterion * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AgeRange: %s", $dataObject->AgeRange));
        }
        self::OutputStatusMessage("* * * End OutputAgeCriterion * * *");
    }
    static function OutputArrayOfAgeCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AgeCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAgeCriterion * * *");
        foreach ($dataObjects->AgeCriterion as $dataObject)
        {
            self::OutputAgeCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAgeCriterion * * *");
    }
    static function OutputApiFaultDetail($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputApiFaultDetail * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfBatchError($dataObject->BatchErrors);
            self::OutputArrayOfOperationError($dataObject->OperationErrors);
        }
        self::OutputStatusMessage("* * * End OutputApiFaultDetail * * *");
    }
    static function OutputArrayOfApiFaultDetail($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ApiFaultDetail))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfApiFaultDetail * * *");
        foreach ($dataObjects->ApiFaultDetail as $dataObject)
        {
            self::OutputApiFaultDetail($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfApiFaultDetail * * *");
    }
    static function OutputAppAdExtension($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAppAdExtension * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AppPlatform: %s", $dataObject->AppPlatform));
            self::OutputStatusMessage(sprintf("AppStoreId: %s", $dataObject->AppStoreId));
            self::OutputStatusMessage(sprintf("DestinationUrl: %s", $dataObject->DestinationUrl));
            self::OutputStatusMessage(sprintf("DisplayText: %s", $dataObject->DisplayText));
            self::OutputArrayOfAppUrl($dataObject->FinalAppUrls);
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
        }
        self::OutputStatusMessage("* * * End OutputAppAdExtension * * *");
    }
    static function OutputArrayOfAppAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AppAdExtension))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAppAdExtension * * *");
        foreach ($dataObjects->AppAdExtension as $dataObject)
        {
            self::OutputAppAdExtension($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAppAdExtension * * *");
    }
    static function OutputAppInstallAd($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAppInstallAd * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AppPlatform: %s", $dataObject->AppPlatform));
            self::OutputStatusMessage(sprintf("AppStoreId: %s", $dataObject->AppStoreId));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
            self::OutputStatusMessage(sprintf("Title: %s", $dataObject->Title));
        }
        self::OutputStatusMessage("* * * End OutputAppInstallAd * * *");
    }
    static function OutputArrayOfAppInstallAd($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AppInstallAd))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAppInstallAd * * *");
        foreach ($dataObjects->AppInstallAd as $dataObject)
        {
            self::OutputAppInstallAd($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAppInstallAd * * *");
    }
    static function OutputAppInstallGoal($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAppInstallGoal * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AppPlatform: %s", $dataObject->AppPlatform));
            self::OutputStatusMessage(sprintf("AppStoreId: %s", $dataObject->AppStoreId));
        }
        self::OutputStatusMessage("* * * End OutputAppInstallGoal * * *");
    }
    static function OutputArrayOfAppInstallGoal($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AppInstallGoal))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAppInstallGoal * * *");
        foreach ($dataObjects->AppInstallGoal as $dataObject)
        {
            self::OutputAppInstallGoal($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAppInstallGoal * * *");
    }
    static function OutputApplicationFault($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputApplicationFault * * *");
        if (!empty($dataObject))
        {
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
        }
        self::OutputStatusMessage("* * * End OutputApplicationFault * * *");
    }
    static function OutputArrayOfApplicationFault($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ApplicationFault))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfApplicationFault * * *");
        foreach ($dataObjects->ApplicationFault as $dataObject)
        {
            self::OutputApplicationFault($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfApplicationFault * * *");
    }
    static function OutputAppUrl($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAppUrl * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("OsType: %s", $dataObject->OsType));
            self::OutputStatusMessage(sprintf("Url: %s", $dataObject->Url));
        }
        self::OutputStatusMessage("* * * End OutputAppUrl * * *");
    }
    static function OutputArrayOfAppUrl($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AppUrl))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAppUrl * * *");
        foreach ($dataObjects->AppUrl as $dataObject)
        {
            self::OutputAppUrl($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAppUrl * * *");
    }
    static function OutputAsset($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAsset * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "TextAsset")
            {
                self::OutputTextAsset($dataObject);
            }
        }
        self::OutputStatusMessage("* * * End OutputAsset * * *");
    }
    static function OutputArrayOfAsset($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Asset))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAsset * * *");
        foreach ($dataObjects->Asset as $dataObject)
        {
            self::OutputAsset($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAsset * * *");
    }
    static function OutputAssetLink($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAssetLink * * *");
        if (!empty($dataObject))
        {
            self::OutputAsset($dataObject->Asset);
            self::OutputStatusMessage(sprintf("AssetPerformanceLabel: %s", $dataObject->AssetPerformanceLabel));
            self::OutputStatusMessage(sprintf("EditorialStatus: %s", $dataObject->EditorialStatus));
            self::OutputStatusMessage(sprintf("PinnedField: %s", $dataObject->PinnedField));
        }
        self::OutputStatusMessage("* * * End OutputAssetLink * * *");
    }
    static function OutputArrayOfAssetLink($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AssetLink))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAssetLink * * *");
        foreach ($dataObjects->AssetLink as $dataObject)
        {
            self::OutputAssetLink($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAssetLink * * *");
    }
    static function OutputAudience($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAudience * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AudienceNetworkSize: %s", $dataObject->AudienceNetworkSize));
            self::OutputStatusMessage(sprintf("Description: %s", $dataObject->Description));
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("MembershipDuration: %s", $dataObject->MembershipDuration));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("ParentId: %s", $dataObject->ParentId));
            self::OutputStatusMessage(sprintf("Scope: %s", $dataObject->Scope));
            self::OutputStatusMessage(sprintf("SearchSize: %s", $dataObject->SearchSize));
            self::OutputArrayOfString($dataObject->SupportedCampaignTypes);
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "CustomAudience")
            {
                self::OutputCustomAudience($dataObject);
            }
            if($dataObject->Type === "InMarketAudience")
            {
                self::OutputInMarketAudience($dataObject);
            }
            if($dataObject->Type === "ProductAudience")
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
        }
        self::OutputStatusMessage("* * * End OutputAudience * * *");
    }
    static function OutputArrayOfAudience($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Audience))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAudience * * *");
        foreach ($dataObjects->Audience as $dataObject)
        {
            self::OutputAudience($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAudience * * *");
    }
    static function OutputAudienceCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAudienceCriterion * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AudienceId: %s", $dataObject->AudienceId));
            self::OutputStatusMessage(sprintf("AudienceType: %s", $dataObject->AudienceType));
        }
        self::OutputStatusMessage("* * * End OutputAudienceCriterion * * *");
    }
    static function OutputArrayOfAudienceCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AudienceCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAudienceCriterion * * *");
        foreach ($dataObjects->AudienceCriterion as $dataObject)
        {
            self::OutputAudienceCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAudienceCriterion * * *");
    }
    static function OutputBatchError($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBatchError * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Code: %s", $dataObject->Code));
            self::OutputStatusMessage(sprintf("Details: %s", $dataObject->Details));
            self::OutputStatusMessage(sprintf("ErrorCode: %s", $dataObject->ErrorCode));
            self::OutputStatusMessage(sprintf("FieldPath: %s", $dataObject->FieldPath));
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Index: %s", $dataObject->Index));
            self::OutputStatusMessage(sprintf("Message: %s", $dataObject->Message));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "EditorialError")
            {
                self::OutputEditorialError($dataObject);
            }
        }
        self::OutputStatusMessage("* * * End OutputBatchError * * *");
    }
    static function OutputArrayOfBatchError($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BatchError))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBatchError * * *");
        foreach ($dataObjects->BatchError as $dataObject)
        {
            self::OutputBatchError($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBatchError * * *");
    }
    static function OutputBatchErrorCollection($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBatchErrorCollection * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfBatchError($dataObject->BatchErrors);
            self::OutputStatusMessage(sprintf("Code: %s", $dataObject->Code));
            self::OutputStatusMessage(sprintf("Details: %s", $dataObject->Details));
            self::OutputStatusMessage(sprintf("ErrorCode: %s", $dataObject->ErrorCode));
            self::OutputStatusMessage(sprintf("FieldPath: %s", $dataObject->FieldPath));
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Index: %s", $dataObject->Index));
            self::OutputStatusMessage(sprintf("Message: %s", $dataObject->Message));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "EditorialErrorCollection")
            {
                self::OutputEditorialErrorCollection($dataObject);
            }
        }
        self::OutputStatusMessage("* * * End OutputBatchErrorCollection * * *");
    }
    static function OutputArrayOfBatchErrorCollection($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BatchErrorCollection))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBatchErrorCollection * * *");
        foreach ($dataObjects->BatchErrorCollection as $dataObject)
        {
            self::OutputBatchErrorCollection($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBatchErrorCollection * * *");
    }
    static function OutputBid($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBid * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Amount: %s", $dataObject->Amount));
        }
        self::OutputStatusMessage("* * * End OutputBid * * *");
    }
    static function OutputArrayOfBid($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Bid))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBid * * *");
        foreach ($dataObjects->Bid as $dataObject)
        {
            self::OutputBid($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBid * * *");
    }
    static function OutputBiddableAdGroupCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBiddableAdGroupCriterion * * *");
        if (!empty($dataObject))
        {
            self::OutputCriterionBid($dataObject->CriterionBid);
            self::OutputStatusMessage(sprintf("DestinationUrl: %s", $dataObject->DestinationUrl));
            self::OutputStatusMessage(sprintf("EditorialStatus: %s", $dataObject->EditorialStatus));
            self::OutputArrayOfAppUrl($dataObject->FinalAppUrls);
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
        }
        self::OutputStatusMessage("* * * End OutputBiddableAdGroupCriterion * * *");
    }
    static function OutputArrayOfBiddableAdGroupCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BiddableAdGroupCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBiddableAdGroupCriterion * * *");
        foreach ($dataObjects->BiddableAdGroupCriterion as $dataObject)
        {
            self::OutputBiddableAdGroupCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBiddableAdGroupCriterion * * *");
    }
    static function OutputBiddableCampaignCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBiddableCampaignCriterion * * *");
        if (!empty($dataObject))
        {
            self::OutputCriterionBid($dataObject->CriterionBid);
        }
        self::OutputStatusMessage("* * * End OutputBiddableCampaignCriterion * * *");
    }
    static function OutputArrayOfBiddableCampaignCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BiddableCampaignCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBiddableCampaignCriterion * * *");
        foreach ($dataObjects->BiddableCampaignCriterion as $dataObject)
        {
            self::OutputBiddableCampaignCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBiddableCampaignCriterion * * *");
    }
    static function OutputBiddingScheme($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBiddingScheme * * *");
        if (!empty($dataObject))
        {
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
            if($dataObject->Type === "MaxClicksBiddingScheme")
            {
                self::OutputMaxClicksBiddingScheme($dataObject);
            }
            if($dataObject->Type === "MaxConversionsBiddingScheme")
            {
                self::OutputMaxConversionsBiddingScheme($dataObject);
            }
            if($dataObject->Type === "TargetCpaBiddingScheme")
            {
                self::OutputTargetCpaBiddingScheme($dataObject);
            }
        }
        self::OutputStatusMessage("* * * End OutputBiddingScheme * * *");
    }
    static function OutputArrayOfBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BiddingScheme))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBiddingScheme * * *");
        foreach ($dataObjects->BiddingScheme as $dataObject)
        {
            self::OutputBiddingScheme($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBiddingScheme * * *");
    }
    static function OutputBidMultiplier($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBidMultiplier * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Multiplier: %s", $dataObject->Multiplier));
        }
        self::OutputStatusMessage("* * * End OutputBidMultiplier * * *");
    }
    static function OutputArrayOfBidMultiplier($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BidMultiplier))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBidMultiplier * * *");
        foreach ($dataObjects->BidMultiplier as $dataObject)
        {
            self::OutputBidMultiplier($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBidMultiplier * * *");
    }
    static function OutputBMCStore($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBMCStore * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("HasCatalog: %s", $dataObject->HasCatalog));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("IsActive: %s", $dataObject->IsActive));
            self::OutputStatusMessage(sprintf("IsProductAdsEnabled: %s", $dataObject->IsProductAdsEnabled));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("SubType: %s", $dataObject->SubType));
        }
        self::OutputStatusMessage("* * * End OutputBMCStore * * *");
    }
    static function OutputArrayOfBMCStore($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BMCStore))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBMCStore * * *");
        foreach ($dataObjects->BMCStore as $dataObject)
        {
            self::OutputBMCStore($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBMCStore * * *");
    }
    static function OutputBudget($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBudget * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Amount: %s", $dataObject->Amount));
            self::OutputStatusMessage(sprintf("AssociationCount: %s", $dataObject->AssociationCount));
            self::OutputStatusMessage(sprintf("BudgetType: %s", $dataObject->BudgetType));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
        }
        self::OutputStatusMessage("* * * End OutputBudget * * *");
    }
    static function OutputArrayOfBudget($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Budget))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBudget * * *");
        foreach ($dataObjects->Budget as $dataObject)
        {
            self::OutputBudget($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBudget * * *");
    }
    static function OutputCallAdExtension($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCallAdExtension * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("CountryCode: %s", $dataObject->CountryCode));
            self::OutputStatusMessage(sprintf("IsCallOnly: %s", $dataObject->IsCallOnly));
            self::OutputStatusMessage(sprintf("IsCallTrackingEnabled: %s", $dataObject->IsCallTrackingEnabled));
            self::OutputStatusMessage(sprintf("PhoneNumber: %s", $dataObject->PhoneNumber));
            self::OutputStatusMessage(sprintf("RequireTollFreeTrackingNumber: %s", $dataObject->RequireTollFreeTrackingNumber));
        }
        self::OutputStatusMessage("* * * End OutputCallAdExtension * * *");
    }
    static function OutputArrayOfCallAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CallAdExtension))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCallAdExtension * * *");
        foreach ($dataObjects->CallAdExtension as $dataObject)
        {
            self::OutputCallAdExtension($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCallAdExtension * * *");
    }
    static function OutputCalloutAdExtension($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCalloutAdExtension * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
        }
        self::OutputStatusMessage("* * * End OutputCalloutAdExtension * * *");
    }
    static function OutputArrayOfCalloutAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CalloutAdExtension))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCalloutAdExtension * * *");
        foreach ($dataObjects->CalloutAdExtension as $dataObject)
        {
            self::OutputCalloutAdExtension($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCalloutAdExtension * * *");
    }
    static function OutputCampaign($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCampaign * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AudienceAdsBidAdjustment: %s", $dataObject->AudienceAdsBidAdjustment));
            self::OutputBiddingScheme($dataObject->BiddingScheme);
            self::OutputStatusMessage(sprintf("BudgetType: %s", $dataObject->BudgetType));
            self::OutputStatusMessage(sprintf("DailyBudget: %s", $dataObject->DailyBudget));
            self::OutputStatusMessage(sprintf("Description: %s", $dataObject->Description));
            self::OutputStatusMessage(sprintf("ExperimentId: %s", $dataObject->ExperimentId));
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage(sprintf("SubType: %s", $dataObject->SubType));
            self::OutputStatusMessage(sprintf("TimeZone: %s", $dataObject->TimeZone));
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
            self::OutputStatusMessage(sprintf("CampaignType: %s", $dataObject->CampaignType));
            self::OutputArrayOfSetting($dataObject->Settings);
            self::OutputStatusMessage(sprintf("BudgetId: %s", $dataObject->BudgetId));
            self::OutputArrayOfString($dataObject->Languages);
        }
        self::OutputStatusMessage("* * * End OutputCampaign * * *");
    }
    static function OutputArrayOfCampaign($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Campaign))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCampaign * * *");
        foreach ($dataObjects->Campaign as $dataObject)
        {
            self::OutputCampaign($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCampaign * * *");
    }
    static function OutputCampaignCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCampaignCriterion * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
            self::OutputCriterion($dataObject->Criterion);
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
        }
        self::OutputStatusMessage("* * * End OutputCampaignCriterion * * *");
    }
    static function OutputArrayOfCampaignCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CampaignCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCampaignCriterion * * *");
        foreach ($dataObjects->CampaignCriterion as $dataObject)
        {
            self::OutputCampaignCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCampaignCriterion * * *");
    }
    static function OutputCampaignNegativeSites($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCampaignNegativeSites * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
            self::OutputArrayOfString($dataObject->NegativeSites);
        }
        self::OutputStatusMessage("* * * End OutputCampaignNegativeSites * * *");
    }
    static function OutputArrayOfCampaignNegativeSites($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CampaignNegativeSites))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCampaignNegativeSites * * *");
        foreach ($dataObjects->CampaignNegativeSites as $dataObject)
        {
            self::OutputCampaignNegativeSites($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCampaignNegativeSites * * *");
    }
    static function OutputConversionGoal($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputConversionGoal * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("ConversionWindowInMinutes: %s", $dataObject->ConversionWindowInMinutes));
            self::OutputStatusMessage(sprintf("CountType: %s", $dataObject->CountType));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputConversionGoalRevenue($dataObject->Revenue);
            self::OutputStatusMessage(sprintf("Scope: %s", $dataObject->Scope));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage(sprintf("TagId: %s", $dataObject->TagId));
            self::OutputStatusMessage(sprintf("TrackingStatus: %s", $dataObject->TrackingStatus));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
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
        }
        self::OutputStatusMessage("* * * End OutputConversionGoal * * *");
    }
    static function OutputArrayOfConversionGoal($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ConversionGoal))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfConversionGoal * * *");
        foreach ($dataObjects->ConversionGoal as $dataObject)
        {
            self::OutputConversionGoal($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfConversionGoal * * *");
    }
    static function OutputConversionGoalRevenue($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputConversionGoalRevenue * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("CurrencyCode: %s", $dataObject->CurrencyCode));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            self::OutputStatusMessage(sprintf("Value: %s", $dataObject->Value));
        }
        self::OutputStatusMessage("* * * End OutputConversionGoalRevenue * * *");
    }
    static function OutputArrayOfConversionGoalRevenue($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ConversionGoalRevenue))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfConversionGoalRevenue * * *");
        foreach ($dataObjects->ConversionGoalRevenue as $dataObject)
        {
            self::OutputConversionGoalRevenue($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfConversionGoalRevenue * * *");
    }
    static function OutputCoOpSetting($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCoOpSetting * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("BidBoostValue: %s", $dataObject->BidBoostValue));
            self::OutputStatusMessage(sprintf("BidMaxValue: %s", $dataObject->BidMaxValue));
            self::OutputStatusMessage(sprintf("BidOption: %s", $dataObject->BidOption));
        }
        self::OutputStatusMessage("* * * End OutputCoOpSetting * * *");
    }
    static function OutputArrayOfCoOpSetting($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CoOpSetting))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCoOpSetting * * *");
        foreach ($dataObjects->CoOpSetting as $dataObject)
        {
            self::OutputCoOpSetting($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCoOpSetting * * *");
    }
    static function OutputCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCriterion * * *");
        if (!empty($dataObject))
        {
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
            if($dataObject->Type === "Webpage")
            {
                self::OutputWebpage($dataObject);
            }
        }
        self::OutputStatusMessage("* * * End OutputCriterion * * *");
    }
    static function OutputArrayOfCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Criterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCriterion * * *");
        foreach ($dataObjects->Criterion as $dataObject)
        {
            self::OutputCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCriterion * * *");
    }
    static function OutputCriterionBid($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCriterionBid * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "BidMultiplier")
            {
                self::OutputBidMultiplier($dataObject);
            }
            if($dataObject->Type === "FixedBid")
            {
                self::OutputFixedBid($dataObject);
            }
        }
        self::OutputStatusMessage("* * * End OutputCriterionBid * * *");
    }
    static function OutputArrayOfCriterionBid($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CriterionBid))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCriterionBid * * *");
        foreach ($dataObjects->CriterionBid as $dataObject)
        {
            self::OutputCriterionBid($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCriterionBid * * *");
    }
    static function OutputCustomAudience($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCustomAudience * * *");
        if (!empty($dataObject))
        {
        }
        self::OutputStatusMessage("* * * End OutputCustomAudience * * *");
    }
    static function OutputArrayOfCustomAudience($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CustomAudience))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCustomAudience * * *");
        foreach ($dataObjects->CustomAudience as $dataObject)
        {
            self::OutputCustomAudience($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCustomAudience * * *");
    }
    static function OutputCustomEventsRule($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCustomEventsRule * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Action: %s", $dataObject->Action));
            self::OutputStatusMessage(sprintf("ActionOperator: %s", $dataObject->ActionOperator));
            self::OutputStatusMessage(sprintf("Category: %s", $dataObject->Category));
            self::OutputStatusMessage(sprintf("CategoryOperator: %s", $dataObject->CategoryOperator));
            self::OutputStatusMessage(sprintf("Label: %s", $dataObject->Label));
            self::OutputStatusMessage(sprintf("LabelOperator: %s", $dataObject->LabelOperator));
            self::OutputStatusMessage(sprintf("Value: %s", $dataObject->Value));
            self::OutputStatusMessage(sprintf("ValueOperator: %s", $dataObject->ValueOperator));
        }
        self::OutputStatusMessage("* * * End OutputCustomEventsRule * * *");
    }
    static function OutputArrayOfCustomEventsRule($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CustomEventsRule))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCustomEventsRule * * *");
        foreach ($dataObjects->CustomEventsRule as $dataObject)
        {
            self::OutputCustomEventsRule($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCustomEventsRule * * *");
    }
    static function OutputCustomParameter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCustomParameter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Key: %s", $dataObject->Key));
            self::OutputStatusMessage(sprintf("Value: %s", $dataObject->Value));
        }
        self::OutputStatusMessage("* * * End OutputCustomParameter * * *");
    }
    static function OutputArrayOfCustomParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CustomParameter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCustomParameter * * *");
        foreach ($dataObjects->CustomParameter as $dataObject)
        {
            self::OutputCustomParameter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCustomParameter * * *");
    }
    static function OutputCustomParameters($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCustomParameters * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfCustomParameter($dataObject->Parameters);
        }
        self::OutputStatusMessage("* * * End OutputCustomParameters * * *");
    }
    static function OutputArrayOfCustomParameters($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CustomParameters))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCustomParameters * * *");
        foreach ($dataObjects->CustomParameters as $dataObject)
        {
            self::OutputCustomParameters($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCustomParameters * * *");
    }
    static function OutputDate($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDate * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Day: %s", $dataObject->Day));
            self::OutputStatusMessage(sprintf("Month: %s", $dataObject->Month));
            self::OutputStatusMessage(sprintf("Year: %s", $dataObject->Year));
        }
        self::OutputStatusMessage("* * * End OutputDate * * *");
    }
    static function OutputArrayOfDate($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Date))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDate * * *");
        foreach ($dataObjects->Date as $dataObject)
        {
            self::OutputDate($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDate * * *");
    }
    static function OutputDayTime($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDayTime * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Day: %s", $dataObject->Day));
            self::OutputStatusMessage(sprintf("EndHour: %s", $dataObject->EndHour));
            self::OutputStatusMessage(sprintf("EndMinute: %s", $dataObject->EndMinute));
            self::OutputStatusMessage(sprintf("StartHour: %s", $dataObject->StartHour));
            self::OutputStatusMessage(sprintf("StartMinute: %s", $dataObject->StartMinute));
        }
        self::OutputStatusMessage("* * * End OutputDayTime * * *");
    }
    static function OutputArrayOfDayTime($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DayTime))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDayTime * * *");
        foreach ($dataObjects->DayTime as $dataObject)
        {
            self::OutputDayTime($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDayTime * * *");
    }
    static function OutputDayTimeCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDayTimeCriterion * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Day: %s", $dataObject->Day));
            self::OutputStatusMessage(sprintf("FromHour: %s", $dataObject->FromHour));
            self::OutputStatusMessage(sprintf("FromMinute: %s", $dataObject->FromMinute));
            self::OutputStatusMessage(sprintf("ToHour: %s", $dataObject->ToHour));
            self::OutputStatusMessage(sprintf("ToMinute: %s", $dataObject->ToMinute));
        }
        self::OutputStatusMessage("* * * End OutputDayTimeCriterion * * *");
    }
    static function OutputArrayOfDayTimeCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DayTimeCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDayTimeCriterion * * *");
        foreach ($dataObjects->DayTimeCriterion as $dataObject)
        {
            self::OutputDayTimeCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDayTimeCriterion * * *");
    }
    static function OutputDeviceCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDeviceCriterion * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("DeviceName: %s", $dataObject->DeviceName));
            self::OutputStatusMessage(sprintf("OSName: %s", $dataObject->OSName));
        }
        self::OutputStatusMessage("* * * End OutputDeviceCriterion * * *");
    }
    static function OutputArrayOfDeviceCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DeviceCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDeviceCriterion * * *");
        foreach ($dataObjects->DeviceCriterion as $dataObject)
        {
            self::OutputDeviceCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDeviceCriterion * * *");
    }
    static function OutputDurationGoal($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDurationGoal * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("MinimumDurationInSeconds: %s", $dataObject->MinimumDurationInSeconds));
        }
        self::OutputStatusMessage("* * * End OutputDurationGoal * * *");
    }
    static function OutputArrayOfDurationGoal($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DurationGoal))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDurationGoal * * *");
        foreach ($dataObjects->DurationGoal as $dataObject)
        {
            self::OutputDurationGoal($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDurationGoal * * *");
    }
    static function OutputDynamicSearchAd($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDynamicSearchAd * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Path1: %s", $dataObject->Path1));
            self::OutputStatusMessage(sprintf("Path2: %s", $dataObject->Path2));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
        }
        self::OutputStatusMessage("* * * End OutputDynamicSearchAd * * *");
    }
    static function OutputArrayOfDynamicSearchAd($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DynamicSearchAd))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDynamicSearchAd * * *");
        foreach ($dataObjects->DynamicSearchAd as $dataObject)
        {
            self::OutputDynamicSearchAd($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDynamicSearchAd * * *");
    }
    static function OutputDynamicSearchAdsSetting($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDynamicSearchAdsSetting * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("DomainName: %s", $dataObject->DomainName));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputArrayOfLong($dataObject->PageFeedIds);
            self::OutputStatusMessage(sprintf("Source: %s", $dataObject->Source));
        }
        self::OutputStatusMessage("* * * End OutputDynamicSearchAdsSetting * * *");
    }
    static function OutputArrayOfDynamicSearchAdsSetting($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DynamicSearchAdsSetting))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDynamicSearchAdsSetting * * *");
        foreach ($dataObjects->DynamicSearchAdsSetting as $dataObject)
        {
            self::OutputDynamicSearchAdsSetting($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDynamicSearchAdsSetting * * *");
    }
    static function OutputEditorialApiFaultDetail($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputEditorialApiFaultDetail * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfBatchError($dataObject->BatchErrors);
            self::OutputArrayOfEditorialError($dataObject->EditorialErrors);
            self::OutputArrayOfOperationError($dataObject->OperationErrors);
        }
        self::OutputStatusMessage("* * * End OutputEditorialApiFaultDetail * * *");
    }
    static function OutputArrayOfEditorialApiFaultDetail($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EditorialApiFaultDetail))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfEditorialApiFaultDetail * * *");
        foreach ($dataObjects->EditorialApiFaultDetail as $dataObject)
        {
            self::OutputEditorialApiFaultDetail($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfEditorialApiFaultDetail * * *");
    }
    static function OutputEditorialError($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputEditorialError * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Appealable: %s", $dataObject->Appealable));
            self::OutputStatusMessage(sprintf("DisapprovedText: %s", $dataObject->DisapprovedText));
            self::OutputStatusMessage(sprintf("Location: %s", $dataObject->Location));
            self::OutputStatusMessage(sprintf("PublisherCountry: %s", $dataObject->PublisherCountry));
            self::OutputStatusMessage(sprintf("ReasonCode: %s", $dataObject->ReasonCode));
        }
        self::OutputStatusMessage("* * * End OutputEditorialError * * *");
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
        self::OutputStatusMessage("* * * Begin OutputArrayOfEditorialError * * *");
        foreach ($dataObjects->EditorialError as $dataObject)
        {
            self::OutputEditorialError($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfEditorialError * * *");
    }
    static function OutputEditorialErrorCollection($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputEditorialErrorCollection * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Appealable: %s", $dataObject->Appealable));
            self::OutputStatusMessage(sprintf("DisapprovedText: %s", $dataObject->DisapprovedText));
            self::OutputStatusMessage(sprintf("Location: %s", $dataObject->Location));
            self::OutputStatusMessage(sprintf("PublisherCountry: %s", $dataObject->PublisherCountry));
            self::OutputStatusMessage(sprintf("ReasonCode: %s", $dataObject->ReasonCode));
        }
        self::OutputStatusMessage("* * * End OutputEditorialErrorCollection * * *");
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
        self::OutputStatusMessage("* * * Begin OutputArrayOfEditorialErrorCollection * * *");
        foreach ($dataObjects->EditorialErrorCollection as $dataObject)
        {
            self::OutputEditorialErrorCollection($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfEditorialErrorCollection * * *");
    }
    static function OutputEditorialReason($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputEditorialReason * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Location: %s", $dataObject->Location));
            self::OutputArrayOfString($dataObject->PublisherCountries);
            self::OutputStatusMessage(sprintf("ReasonCode: %s", $dataObject->ReasonCode));
            self::OutputStatusMessage(sprintf("Term: %s", $dataObject->Term));
        }
        self::OutputStatusMessage("* * * End OutputEditorialReason * * *");
    }
    static function OutputArrayOfEditorialReason($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EditorialReason))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfEditorialReason * * *");
        foreach ($dataObjects->EditorialReason as $dataObject)
        {
            self::OutputEditorialReason($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfEditorialReason * * *");
    }
    static function OutputEditorialReasonCollection($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputEditorialReasonCollection * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
            self::OutputStatusMessage(sprintf("AdOrKeywordId: %s", $dataObject->AdOrKeywordId));
            self::OutputStatusMessage(sprintf("AppealStatus: %s", $dataObject->AppealStatus));
            self::OutputArrayOfEditorialReason($dataObject->Reasons);
        }
        self::OutputStatusMessage("* * * End OutputEditorialReasonCollection * * *");
    }
    static function OutputArrayOfEditorialReasonCollection($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EditorialReasonCollection))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfEditorialReasonCollection * * *");
        foreach ($dataObjects->EditorialReasonCollection as $dataObject)
        {
            self::OutputEditorialReasonCollection($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfEditorialReasonCollection * * *");
    }
    static function OutputEnhancedCpcBiddingScheme($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputEnhancedCpcBiddingScheme * * *");
        if (!empty($dataObject))
        {
        }
        self::OutputStatusMessage("* * * End OutputEnhancedCpcBiddingScheme * * *");
    }
    static function OutputArrayOfEnhancedCpcBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EnhancedCpcBiddingScheme))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfEnhancedCpcBiddingScheme * * *");
        foreach ($dataObjects->EnhancedCpcBiddingScheme as $dataObject)
        {
            self::OutputEnhancedCpcBiddingScheme($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfEnhancedCpcBiddingScheme * * *");
    }
    static function OutputEntityIdToParentIdAssociation($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputEntityIdToParentIdAssociation * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("EntityId: %s", $dataObject->EntityId));
            self::OutputStatusMessage(sprintf("ParentId: %s", $dataObject->ParentId));
        }
        self::OutputStatusMessage("* * * End OutputEntityIdToParentIdAssociation * * *");
    }
    static function OutputArrayOfEntityIdToParentIdAssociation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EntityIdToParentIdAssociation))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfEntityIdToParentIdAssociation * * *");
        foreach ($dataObjects->EntityIdToParentIdAssociation as $dataObject)
        {
            self::OutputEntityIdToParentIdAssociation($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfEntityIdToParentIdAssociation * * *");
    }
    static function OutputEntityNegativeKeyword($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputEntityNegativeKeyword * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("EntityId: %s", $dataObject->EntityId));
            self::OutputStatusMessage(sprintf("EntityType: %s", $dataObject->EntityType));
            self::OutputArrayOfNegativeKeyword($dataObject->NegativeKeywords);
        }
        self::OutputStatusMessage("* * * End OutputEntityNegativeKeyword * * *");
    }
    static function OutputArrayOfEntityNegativeKeyword($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EntityNegativeKeyword))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfEntityNegativeKeyword * * *");
        foreach ($dataObjects->EntityNegativeKeyword as $dataObject)
        {
            self::OutputEntityNegativeKeyword($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfEntityNegativeKeyword * * *");
    }
    static function OutputEventGoal($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputEventGoal * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("ActionExpression: %s", $dataObject->ActionExpression));
            self::OutputStatusMessage(sprintf("ActionOperator: %s", $dataObject->ActionOperator));
            self::OutputStatusMessage(sprintf("CategoryExpression: %s", $dataObject->CategoryExpression));
            self::OutputStatusMessage(sprintf("CategoryOperator: %s", $dataObject->CategoryOperator));
            self::OutputStatusMessage(sprintf("LabelExpression: %s", $dataObject->LabelExpression));
            self::OutputStatusMessage(sprintf("LabelOperator: %s", $dataObject->LabelOperator));
            self::OutputStatusMessage(sprintf("Value: %s", $dataObject->Value));
            self::OutputStatusMessage(sprintf("ValueOperator: %s", $dataObject->ValueOperator));
        }
        self::OutputStatusMessage("* * * End OutputEventGoal * * *");
    }
    static function OutputArrayOfEventGoal($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EventGoal))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfEventGoal * * *");
        foreach ($dataObjects->EventGoal as $dataObject)
        {
            self::OutputEventGoal($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfEventGoal * * *");
    }
    static function OutputExpandedTextAd($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputExpandedTextAd * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Domain: %s", $dataObject->Domain));
            self::OutputStatusMessage(sprintf("Path1: %s", $dataObject->Path1));
            self::OutputStatusMessage(sprintf("Path2: %s", $dataObject->Path2));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
            self::OutputStatusMessage(sprintf("TextPart2: %s", $dataObject->TextPart2));
            self::OutputStatusMessage(sprintf("TitlePart1: %s", $dataObject->TitlePart1));
            self::OutputStatusMessage(sprintf("TitlePart2: %s", $dataObject->TitlePart2));
            self::OutputStatusMessage(sprintf("TitlePart3: %s", $dataObject->TitlePart3));
        }
        self::OutputStatusMessage("* * * End OutputExpandedTextAd * * *");
    }
    static function OutputArrayOfExpandedTextAd($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ExpandedTextAd))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfExpandedTextAd * * *");
        foreach ($dataObjects->ExpandedTextAd as $dataObject)
        {
            self::OutputExpandedTextAd($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfExpandedTextAd * * *");
    }
    static function OutputExperiment($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputExperiment * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("BaseCampaignId: %s", $dataObject->BaseCampaignId));
            self::OutputDate($dataObject->EndDate);
            self::OutputStatusMessage(sprintf("ExperimentCampaignId: %s", $dataObject->ExperimentCampaignId));
            self::OutputStatusMessage(sprintf("ExperimentStatus: %s", $dataObject->ExperimentStatus));
            self::OutputStatusMessage(sprintf("ExperimentType: %s", $dataObject->ExperimentType));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputDate($dataObject->StartDate);
            self::OutputStatusMessage(sprintf("TrafficSplitPercent: %s", $dataObject->TrafficSplitPercent));
        }
        self::OutputStatusMessage("* * * End OutputExperiment * * *");
    }
    static function OutputArrayOfExperiment($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Experiment))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfExperiment * * *");
        foreach ($dataObjects->Experiment as $dataObject)
        {
            self::OutputExperiment($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfExperiment * * *");
    }
    static function OutputFixedBid($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputFixedBid * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Amount: %s", $dataObject->Amount));
        }
        self::OutputStatusMessage("* * * End OutputFixedBid * * *");
    }
    static function OutputArrayOfFixedBid($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->FixedBid))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfFixedBid * * *");
        foreach ($dataObjects->FixedBid as $dataObject)
        {
            self::OutputFixedBid($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfFixedBid * * *");
    }
    static function OutputGenderCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputGenderCriterion * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("GenderType: %s", $dataObject->GenderType));
        }
        self::OutputStatusMessage("* * * End OutputGenderCriterion * * *");
    }
    static function OutputArrayOfGenderCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->GenderCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfGenderCriterion * * *");
        foreach ($dataObjects->GenderCriterion as $dataObject)
        {
            self::OutputGenderCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfGenderCriterion * * *");
    }
    static function OutputGeoPoint($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputGeoPoint * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("LatitudeInMicroDegrees: %s", $dataObject->LatitudeInMicroDegrees));
            self::OutputStatusMessage(sprintf("LongitudeInMicroDegrees: %s", $dataObject->LongitudeInMicroDegrees));
        }
        self::OutputStatusMessage("* * * End OutputGeoPoint * * *");
    }
    static function OutputArrayOfGeoPoint($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->GeoPoint))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfGeoPoint * * *");
        foreach ($dataObjects->GeoPoint as $dataObject)
        {
            self::OutputGeoPoint($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfGeoPoint * * *");
    }
    static function OutputIdCollection($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputIdCollection * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfLong($dataObject->Ids);
        }
        self::OutputStatusMessage("* * * End OutputIdCollection * * *");
    }
    static function OutputArrayOfIdCollection($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->IdCollection))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfIdCollection * * *");
        foreach ($dataObjects->IdCollection as $dataObject)
        {
            self::OutputIdCollection($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfIdCollection * * *");
    }
    static function OutputImage($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputImage * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Data: %s", $dataObject->Data));
        }
        self::OutputStatusMessage("* * * End OutputImage * * *");
    }
    static function OutputArrayOfImage($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Image))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfImage * * *");
        foreach ($dataObjects->Image as $dataObject)
        {
            self::OutputImage($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfImage * * *");
    }
    static function OutputImageAdExtension($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputImageAdExtension * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AlternativeText: %s", $dataObject->AlternativeText));
            self::OutputStatusMessage(sprintf("Description: %s", $dataObject->Description));
            self::OutputStatusMessage(sprintf("DestinationUrl: %s", $dataObject->DestinationUrl));
            self::OutputArrayOfAppUrl($dataObject->FinalAppUrls);
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputArrayOfLong($dataObject->ImageMediaIds);
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
        }
        self::OutputStatusMessage("* * * End OutputImageAdExtension * * *");
    }
    static function OutputArrayOfImageAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ImageAdExtension))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfImageAdExtension * * *");
        foreach ($dataObjects->ImageAdExtension as $dataObject)
        {
            self::OutputImageAdExtension($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfImageAdExtension * * *");
    }
    static function OutputImageMediaRepresentation($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputImageMediaRepresentation * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Height: %s", $dataObject->Height));
            self::OutputStatusMessage(sprintf("Width: %s", $dataObject->Width));
        }
        self::OutputStatusMessage("* * * End OutputImageMediaRepresentation * * *");
    }
    static function OutputArrayOfImageMediaRepresentation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ImageMediaRepresentation))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfImageMediaRepresentation * * *");
        foreach ($dataObjects->ImageMediaRepresentation as $dataObject)
        {
            self::OutputImageMediaRepresentation($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfImageMediaRepresentation * * *");
    }
    static function OutputInheritFromParentBiddingScheme($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputInheritFromParentBiddingScheme * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("InheritedBidStrategyType: %s", $dataObject->InheritedBidStrategyType));
        }
        self::OutputStatusMessage("* * * End OutputInheritFromParentBiddingScheme * * *");
    }
    static function OutputArrayOfInheritFromParentBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->InheritFromParentBiddingScheme))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfInheritFromParentBiddingScheme * * *");
        foreach ($dataObjects->InheritFromParentBiddingScheme as $dataObject)
        {
            self::OutputInheritFromParentBiddingScheme($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfInheritFromParentBiddingScheme * * *");
    }
    static function OutputInMarketAudience($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputInMarketAudience * * *");
        if (!empty($dataObject))
        {
        }
        self::OutputStatusMessage("* * * End OutputInMarketAudience * * *");
    }
    static function OutputArrayOfInMarketAudience($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->InMarketAudience))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfInMarketAudience * * *");
        foreach ($dataObjects->InMarketAudience as $dataObject)
        {
            self::OutputInMarketAudience($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfInMarketAudience * * *");
    }
    static function OutputInStoreTransactionGoal($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputInStoreTransactionGoal * * *");
        if (!empty($dataObject))
        {
        }
        self::OutputStatusMessage("* * * End OutputInStoreTransactionGoal * * *");
    }
    static function OutputArrayOfInStoreTransactionGoal($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->InStoreTransactionGoal))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfInStoreTransactionGoal * * *");
        foreach ($dataObjects->InStoreTransactionGoal as $dataObject)
        {
            self::OutputInStoreTransactionGoal($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfInStoreTransactionGoal * * *");
    }
    static function OutputKeyValuePairOfstringstring($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeyValuePairOfstringstring * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("key: %s", $dataObject->key));
            self::OutputStatusMessage(sprintf("value: %s", $dataObject->value));
        }
        self::OutputStatusMessage("* * * End OutputKeyValuePairOfstringstring * * *");
    }
    static function OutputArrayOfKeyValuePairOfstringstring($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeyValuePairOfstringstring))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeyValuePairOfstringstring * * *");
        foreach ($dataObjects->KeyValuePairOfstringstring as $dataObject)
        {
            self::OutputKeyValuePairOfstringstring($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeyValuePairOfstringstring * * *");
    }
    static function OutputKeyword($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeyword * * *");
        if (!empty($dataObject))
        {
            self::OutputBid($dataObject->Bid);
            self::OutputBiddingScheme($dataObject->BiddingScheme);
            self::OutputStatusMessage(sprintf("DestinationUrl: %s", $dataObject->DestinationUrl));
            self::OutputStatusMessage(sprintf("EditorialStatus: %s", $dataObject->EditorialStatus));
            self::OutputArrayOfAppUrl($dataObject->FinalAppUrls);
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("MatchType: %s", $dataObject->MatchType));
            self::OutputStatusMessage(sprintf("Param1: %s", $dataObject->Param1));
            self::OutputStatusMessage(sprintf("Param2: %s", $dataObject->Param2));
            self::OutputStatusMessage(sprintf("Param3: %s", $dataObject->Param3));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
        }
        self::OutputStatusMessage("* * * End OutputKeyword * * *");
    }
    static function OutputArrayOfKeyword($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Keyword))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeyword * * *");
        foreach ($dataObjects->Keyword as $dataObject)
        {
            self::OutputKeyword($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeyword * * *");
    }
    static function OutputLabel($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputLabel * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("ColorCode: %s", $dataObject->ColorCode));
            self::OutputStatusMessage(sprintf("Description: %s", $dataObject->Description));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
        }
        self::OutputStatusMessage("* * * End OutputLabel * * *");
    }
    static function OutputArrayOfLabel($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Label))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLabel * * *");
        foreach ($dataObjects->Label as $dataObject)
        {
            self::OutputLabel($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLabel * * *");
    }
    static function OutputLabelAssociation($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputLabelAssociation * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("EntityId: %s", $dataObject->EntityId));
            self::OutputStatusMessage(sprintf("LabelId: %s", $dataObject->LabelId));
        }
        self::OutputStatusMessage("* * * End OutputLabelAssociation * * *");
    }
    static function OutputArrayOfLabelAssociation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->LabelAssociation))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLabelAssociation * * *");
        foreach ($dataObjects->LabelAssociation as $dataObject)
        {
            self::OutputLabelAssociation($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLabelAssociation * * *");
    }
    static function OutputLocationAdExtension($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputLocationAdExtension * * *");
        if (!empty($dataObject))
        {
            self::OutputAddress($dataObject->Address);
            self::OutputStatusMessage(sprintf("CompanyName: %s", $dataObject->CompanyName));
            self::OutputStatusMessage(sprintf("GeoCodeStatus: %s", $dataObject->GeoCodeStatus));
            self::OutputGeoPoint($dataObject->GeoPoint);
            self::OutputStatusMessage(sprintf("PhoneNumber: %s", $dataObject->PhoneNumber));
        }
        self::OutputStatusMessage("* * * End OutputLocationAdExtension * * *");
    }
    static function OutputArrayOfLocationAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->LocationAdExtension))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLocationAdExtension * * *");
        foreach ($dataObjects->LocationAdExtension as $dataObject)
        {
            self::OutputLocationAdExtension($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLocationAdExtension * * *");
    }
    static function OutputLocationCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputLocationCriterion * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("DisplayName: %s", $dataObject->DisplayName));
            self::OutputArrayOfLong($dataObject->EnclosedLocationIds);
            self::OutputStatusMessage(sprintf("LocationId: %s", $dataObject->LocationId));
            self::OutputStatusMessage(sprintf("LocationType: %s", $dataObject->LocationType));
        }
        self::OutputStatusMessage("* * * End OutputLocationCriterion * * *");
    }
    static function OutputArrayOfLocationCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->LocationCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLocationCriterion * * *");
        foreach ($dataObjects->LocationCriterion as $dataObject)
        {
            self::OutputLocationCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLocationCriterion * * *");
    }
    static function OutputLocationIntentCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputLocationIntentCriterion * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("IntentOption: %s", $dataObject->IntentOption));
        }
        self::OutputStatusMessage("* * * End OutputLocationIntentCriterion * * *");
    }
    static function OutputArrayOfLocationIntentCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->LocationIntentCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLocationIntentCriterion * * *");
        foreach ($dataObjects->LocationIntentCriterion as $dataObject)
        {
            self::OutputLocationIntentCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLocationIntentCriterion * * *");
    }
    static function OutputManualCpcBiddingScheme($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputManualCpcBiddingScheme * * *");
        if (!empty($dataObject))
        {
        }
        self::OutputStatusMessage("* * * End OutputManualCpcBiddingScheme * * *");
    }
    static function OutputArrayOfManualCpcBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ManualCpcBiddingScheme))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfManualCpcBiddingScheme * * *");
        foreach ($dataObjects->ManualCpcBiddingScheme as $dataObject)
        {
            self::OutputManualCpcBiddingScheme($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfManualCpcBiddingScheme * * *");
    }
    static function OutputMaxClicksBiddingScheme($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputMaxClicksBiddingScheme * * *");
        if (!empty($dataObject))
        {
            self::OutputBid($dataObject->MaxCpc);
        }
        self::OutputStatusMessage("* * * End OutputMaxClicksBiddingScheme * * *");
    }
    static function OutputArrayOfMaxClicksBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->MaxClicksBiddingScheme))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfMaxClicksBiddingScheme * * *");
        foreach ($dataObjects->MaxClicksBiddingScheme as $dataObject)
        {
            self::OutputMaxClicksBiddingScheme($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfMaxClicksBiddingScheme * * *");
    }
    static function OutputMaxConversionsBiddingScheme($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputMaxConversionsBiddingScheme * * *");
        if (!empty($dataObject))
        {
            self::OutputBid($dataObject->MaxCpc);
        }
        self::OutputStatusMessage("* * * End OutputMaxConversionsBiddingScheme * * *");
    }
    static function OutputArrayOfMaxConversionsBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->MaxConversionsBiddingScheme))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfMaxConversionsBiddingScheme * * *");
        foreach ($dataObjects->MaxConversionsBiddingScheme as $dataObject)
        {
            self::OutputMaxConversionsBiddingScheme($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfMaxConversionsBiddingScheme * * *");
    }
    static function OutputMedia($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputMedia * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("MediaType: %s", $dataObject->MediaType));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "Image")
            {
                self::OutputImage($dataObject);
            }
        }
        self::OutputStatusMessage("* * * End OutputMedia * * *");
    }
    static function OutputArrayOfMedia($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Media))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfMedia * * *");
        foreach ($dataObjects->Media as $dataObject)
        {
            self::OutputMedia($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfMedia * * *");
    }
    static function OutputMediaAssociation($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputMediaAssociation * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("EntityId: %s", $dataObject->EntityId));
            self::OutputStatusMessage(sprintf("MediaEnabledEntity: %s", $dataObject->MediaEnabledEntity));
            self::OutputStatusMessage(sprintf("MediaId: %s", $dataObject->MediaId));
        }
        self::OutputStatusMessage("* * * End OutputMediaAssociation * * *");
    }
    static function OutputArrayOfMediaAssociation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->MediaAssociation))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfMediaAssociation * * *");
        foreach ($dataObjects->MediaAssociation as $dataObject)
        {
            self::OutputMediaAssociation($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfMediaAssociation * * *");
    }
    static function OutputMediaMetaData($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputMediaMetaData * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("MediaType: %s", $dataObject->MediaType));
            self::OutputArrayOfMediaRepresentation($dataObject->Representations);
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
        }
        self::OutputStatusMessage("* * * End OutputMediaMetaData * * *");
    }
    static function OutputArrayOfMediaMetaData($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->MediaMetaData))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfMediaMetaData * * *");
        foreach ($dataObjects->MediaMetaData as $dataObject)
        {
            self::OutputMediaMetaData($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfMediaMetaData * * *");
    }
    static function OutputMediaRepresentation($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputMediaRepresentation * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            self::OutputStatusMessage(sprintf("Url: %s", $dataObject->Url));
            if($dataObject->Type === "ImageMediaRepresentation")
            {
                self::OutputImageMediaRepresentation($dataObject);
            }
        }
        self::OutputStatusMessage("* * * End OutputMediaRepresentation * * *");
    }
    static function OutputArrayOfMediaRepresentation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->MediaRepresentation))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfMediaRepresentation * * *");
        foreach ($dataObjects->MediaRepresentation as $dataObject)
        {
            self::OutputMediaRepresentation($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfMediaRepresentation * * *");
    }
    static function OutputMigrationStatusInfo($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputMigrationStatusInfo * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("MigrationType: %s", $dataObject->MigrationType));
            self::OutputStatusMessage(sprintf("StartTimeInUtc: %s", $dataObject->StartTimeInUtc));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
        }
        self::OutputStatusMessage("* * * End OutputMigrationStatusInfo * * *");
    }
    static function OutputArrayOfMigrationStatusInfo($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->MigrationStatusInfo))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfMigrationStatusInfo * * *");
        foreach ($dataObjects->MigrationStatusInfo as $dataObject)
        {
            self::OutputMigrationStatusInfo($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfMigrationStatusInfo * * *");
    }
    static function OutputNegativeAdGroupCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputNegativeAdGroupCriterion * * *");
        if (!empty($dataObject))
        {
        }
        self::OutputStatusMessage("* * * End OutputNegativeAdGroupCriterion * * *");
    }
    static function OutputArrayOfNegativeAdGroupCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NegativeAdGroupCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfNegativeAdGroupCriterion * * *");
        foreach ($dataObjects->NegativeAdGroupCriterion as $dataObject)
        {
            self::OutputNegativeAdGroupCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfNegativeAdGroupCriterion * * *");
    }
    static function OutputNegativeCampaignCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputNegativeCampaignCriterion * * *");
        if (!empty($dataObject))
        {
        }
        self::OutputStatusMessage("* * * End OutputNegativeCampaignCriterion * * *");
    }
    static function OutputArrayOfNegativeCampaignCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NegativeCampaignCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfNegativeCampaignCriterion * * *");
        foreach ($dataObjects->NegativeCampaignCriterion as $dataObject)
        {
            self::OutputNegativeCampaignCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfNegativeCampaignCriterion * * *");
    }
    static function OutputNegativeKeyword($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputNegativeKeyword * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("MatchType: %s", $dataObject->MatchType));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
        }
        self::OutputStatusMessage("* * * End OutputNegativeKeyword * * *");
    }
    static function OutputArrayOfNegativeKeyword($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NegativeKeyword))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfNegativeKeyword * * *");
        foreach ($dataObjects->NegativeKeyword as $dataObject)
        {
            self::OutputNegativeKeyword($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfNegativeKeyword * * *");
    }
    static function OutputNegativeKeywordList($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputNegativeKeywordList * * *");
        if (!empty($dataObject))
        {
        }
        self::OutputStatusMessage("* * * End OutputNegativeKeywordList * * *");
    }
    static function OutputArrayOfNegativeKeywordList($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NegativeKeywordList))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfNegativeKeywordList * * *");
        foreach ($dataObjects->NegativeKeywordList as $dataObject)
        {
            self::OutputNegativeKeywordList($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfNegativeKeywordList * * *");
    }
    static function OutputOfflineConversion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputOfflineConversion * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("ConversionCurrencyCode: %s", $dataObject->ConversionCurrencyCode));
            self::OutputStatusMessage(sprintf("ConversionName: %s", $dataObject->ConversionName));
            self::OutputStatusMessage(sprintf("ConversionTime: %s", $dataObject->ConversionTime));
            self::OutputStatusMessage(sprintf("ConversionValue: %s", $dataObject->ConversionValue));
            self::OutputStatusMessage(sprintf("MicrosoftClickId: %s", $dataObject->MicrosoftClickId));
        }
        self::OutputStatusMessage("* * * End OutputOfflineConversion * * *");
    }
    static function OutputArrayOfOfflineConversion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->OfflineConversion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfOfflineConversion * * *");
        foreach ($dataObjects->OfflineConversion as $dataObject)
        {
            self::OutputOfflineConversion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfOfflineConversion * * *");
    }
    static function OutputOfflineConversionGoal($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputOfflineConversionGoal * * *");
        if (!empty($dataObject))
        {
        }
        self::OutputStatusMessage("* * * End OutputOfflineConversionGoal * * *");
    }
    static function OutputArrayOfOfflineConversionGoal($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->OfflineConversionGoal))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfOfflineConversionGoal * * *");
        foreach ($dataObjects->OfflineConversionGoal as $dataObject)
        {
            self::OutputOfflineConversionGoal($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfOfflineConversionGoal * * *");
    }
    static function OutputOperationError($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputOperationError * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Code: %s", $dataObject->Code));
            self::OutputStatusMessage(sprintf("Details: %s", $dataObject->Details));
            self::OutputStatusMessage(sprintf("ErrorCode: %s", $dataObject->ErrorCode));
            self::OutputStatusMessage(sprintf("Message: %s", $dataObject->Message));
        }
        self::OutputStatusMessage("* * * End OutputOperationError * * *");
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
        self::OutputStatusMessage("* * * Begin OutputArrayOfOperationError * * *");
        foreach ($dataObjects->OperationError as $dataObject)
        {
            self::OutputOperationError($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfOperationError * * *");
    }
    static function OutputPagesViewedPerVisitGoal($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputPagesViewedPerVisitGoal * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("MinimumPagesViewed: %s", $dataObject->MinimumPagesViewed));
        }
        self::OutputStatusMessage("* * * End OutputPagesViewedPerVisitGoal * * *");
    }
    static function OutputArrayOfPagesViewedPerVisitGoal($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PagesViewedPerVisitGoal))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPagesViewedPerVisitGoal * * *");
        foreach ($dataObjects->PagesViewedPerVisitGoal as $dataObject)
        {
            self::OutputPagesViewedPerVisitGoal($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPagesViewedPerVisitGoal * * *");
    }
    static function OutputPageVisitorsRule($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputPageVisitorsRule * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfRuleItemGroup($dataObject->RuleItemGroups);
        }
        self::OutputStatusMessage("* * * End OutputPageVisitorsRule * * *");
    }
    static function OutputArrayOfPageVisitorsRule($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PageVisitorsRule))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPageVisitorsRule * * *");
        foreach ($dataObjects->PageVisitorsRule as $dataObject)
        {
            self::OutputPageVisitorsRule($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPageVisitorsRule * * *");
    }
    static function OutputPageVisitorsWhoDidNotVisitAnotherPageRule($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputPageVisitorsWhoDidNotVisitAnotherPageRule * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfRuleItemGroup($dataObject->ExcludeRuleItemGroups);
            self::OutputArrayOfRuleItemGroup($dataObject->IncludeRuleItemGroups);
        }
        self::OutputStatusMessage("* * * End OutputPageVisitorsWhoDidNotVisitAnotherPageRule * * *");
    }
    static function OutputArrayOfPageVisitorsWhoDidNotVisitAnotherPageRule($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PageVisitorsWhoDidNotVisitAnotherPageRule))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPageVisitorsWhoDidNotVisitAnotherPageRule * * *");
        foreach ($dataObjects->PageVisitorsWhoDidNotVisitAnotherPageRule as $dataObject)
        {
            self::OutputPageVisitorsWhoDidNotVisitAnotherPageRule($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPageVisitorsWhoDidNotVisitAnotherPageRule * * *");
    }
    static function OutputPageVisitorsWhoVisitedAnotherPageRule($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputPageVisitorsWhoVisitedAnotherPageRule * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfRuleItemGroup($dataObject->AnotherRuleItemGroups);
            self::OutputArrayOfRuleItemGroup($dataObject->RuleItemGroups);
        }
        self::OutputStatusMessage("* * * End OutputPageVisitorsWhoVisitedAnotherPageRule * * *");
    }
    static function OutputArrayOfPageVisitorsWhoVisitedAnotherPageRule($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PageVisitorsWhoVisitedAnotherPageRule))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPageVisitorsWhoVisitedAnotherPageRule * * *");
        foreach ($dataObjects->PageVisitorsWhoVisitedAnotherPageRule as $dataObject)
        {
            self::OutputPageVisitorsWhoVisitedAnotherPageRule($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPageVisitorsWhoVisitedAnotherPageRule * * *");
    }
    static function OutputPaging($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputPaging * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Index: %s", $dataObject->Index));
            self::OutputStatusMessage(sprintf("Size: %s", $dataObject->Size));
        }
        self::OutputStatusMessage("* * * End OutputPaging * * *");
    }
    static function OutputArrayOfPaging($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Paging))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPaging * * *");
        foreach ($dataObjects->Paging as $dataObject)
        {
            self::OutputPaging($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPaging * * *");
    }
    static function OutputPriceAdExtension($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputPriceAdExtension * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage(sprintf("PriceExtensionType: %s", $dataObject->PriceExtensionType));
            self::OutputArrayOfPriceTableRow($dataObject->TableRows);
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
        }
        self::OutputStatusMessage("* * * End OutputPriceAdExtension * * *");
    }
    static function OutputArrayOfPriceAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PriceAdExtension))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPriceAdExtension * * *");
        foreach ($dataObjects->PriceAdExtension as $dataObject)
        {
            self::OutputPriceAdExtension($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPriceAdExtension * * *");
    }
    static function OutputPriceTableRow($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputPriceTableRow * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("CurrencyCode: %s", $dataObject->CurrencyCode));
            self::OutputStatusMessage(sprintf("Description: %s", $dataObject->Description));
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputStatusMessage(sprintf("Header: %s", $dataObject->Header));
            self::OutputStatusMessage(sprintf("Price: %s", $dataObject->Price));
            self::OutputStatusMessage(sprintf("PriceQualifier: %s", $dataObject->PriceQualifier));
            self::OutputStatusMessage(sprintf("PriceUnit: %s", $dataObject->PriceUnit));
            self::OutputStatusMessage(sprintf("TermsAndConditions: %s", $dataObject->TermsAndConditions));
            self::OutputStatusMessage(sprintf("TermsAndConditionsUrl: %s", $dataObject->TermsAndConditionsUrl));
        }
        self::OutputStatusMessage("* * * End OutputPriceTableRow * * *");
    }
    static function OutputArrayOfPriceTableRow($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PriceTableRow))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPriceTableRow * * *");
        foreach ($dataObjects->PriceTableRow as $dataObject)
        {
            self::OutputPriceTableRow($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPriceTableRow * * *");
    }
    static function OutputProductAd($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputProductAd * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("PromotionalText: %s", $dataObject->PromotionalText));
        }
        self::OutputStatusMessage("* * * End OutputProductAd * * *");
    }
    static function OutputArrayOfProductAd($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductAd))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductAd * * *");
        foreach ($dataObjects->ProductAd as $dataObject)
        {
            self::OutputProductAd($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductAd * * *");
    }
    static function OutputProductAudience($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputProductAudience * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("ProductAudienceType: %s", $dataObject->ProductAudienceType));
            self::OutputStatusMessage(sprintf("TagId: %s", $dataObject->TagId));
        }
        self::OutputStatusMessage("* * * End OutputProductAudience * * *");
    }
    static function OutputArrayOfProductAudience($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductAudience))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductAudience * * *");
        foreach ($dataObjects->ProductAudience as $dataObject)
        {
            self::OutputProductAudience($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductAudience * * *");
    }
    static function OutputProductCondition($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputProductCondition * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Attribute: %s", $dataObject->Attribute));
            self::OutputStatusMessage(sprintf("Operand: %s", $dataObject->Operand));
        }
        self::OutputStatusMessage("* * * End OutputProductCondition * * *");
    }
    static function OutputArrayOfProductCondition($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductCondition))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductCondition * * *");
        foreach ($dataObjects->ProductCondition as $dataObject)
        {
            self::OutputProductCondition($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductCondition * * *");
    }
    static function OutputProductPartition($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputProductPartition * * *");
        if (!empty($dataObject))
        {
            self::OutputProductCondition($dataObject->Condition);
            self::OutputStatusMessage(sprintf("ParentCriterionId: %s", $dataObject->ParentCriterionId));
            self::OutputStatusMessage(sprintf("PartitionType: %s", $dataObject->PartitionType));
        }
        self::OutputStatusMessage("* * * End OutputProductPartition * * *");
    }
    static function OutputArrayOfProductPartition($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductPartition))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductPartition * * *");
        foreach ($dataObjects->ProductPartition as $dataObject)
        {
            self::OutputProductPartition($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductPartition * * *");
    }
    static function OutputProductScope($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputProductScope * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfProductCondition($dataObject->Conditions);
        }
        self::OutputStatusMessage("* * * End OutputProductScope * * *");
    }
    static function OutputArrayOfProductScope($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductScope))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductScope * * *");
        foreach ($dataObjects->ProductScope as $dataObject)
        {
            self::OutputProductScope($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductScope * * *");
    }
    static function OutputProfileCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputProfileCriterion * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("ProfileId: %s", $dataObject->ProfileId));
            self::OutputStatusMessage(sprintf("ProfileType: %s", $dataObject->ProfileType));
        }
        self::OutputStatusMessage("* * * End OutputProfileCriterion * * *");
    }
    static function OutputArrayOfProfileCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProfileCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProfileCriterion * * *");
        foreach ($dataObjects->ProfileCriterion as $dataObject)
        {
            self::OutputProfileCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProfileCriterion * * *");
    }
    static function OutputRadiusCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputRadiusCriterion * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("LatitudeDegrees: %s", $dataObject->LatitudeDegrees));
            self::OutputStatusMessage(sprintf("LongitudeDegrees: %s", $dataObject->LongitudeDegrees));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Radius: %s", $dataObject->Radius));
            self::OutputStatusMessage(sprintf("RadiusUnit: %s", $dataObject->RadiusUnit));
        }
        self::OutputStatusMessage("* * * End OutputRadiusCriterion * * *");
    }
    static function OutputArrayOfRadiusCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->RadiusCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfRadiusCriterion * * *");
        foreach ($dataObjects->RadiusCriterion as $dataObject)
        {
            self::OutputRadiusCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfRadiusCriterion * * *");
    }
    static function OutputRemarketingList($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputRemarketingList * * *");
        if (!empty($dataObject))
        {
            self::OutputRemarketingRule($dataObject->Rule);
            self::OutputStatusMessage(sprintf("TagId: %s", $dataObject->TagId));
        }
        self::OutputStatusMessage("* * * End OutputRemarketingList * * *");
    }
    static function OutputArrayOfRemarketingList($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->RemarketingList))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfRemarketingList * * *");
        foreach ($dataObjects->RemarketingList as $dataObject)
        {
            self::OutputRemarketingList($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfRemarketingList * * *");
    }
    static function OutputRemarketingRule($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputRemarketingRule * * *");
        if (!empty($dataObject))
        {
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
        }
        self::OutputStatusMessage("* * * End OutputRemarketingRule * * *");
    }
    static function OutputArrayOfRemarketingRule($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->RemarketingRule))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfRemarketingRule * * *");
        foreach ($dataObjects->RemarketingRule as $dataObject)
        {
            self::OutputRemarketingRule($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfRemarketingRule * * *");
    }
    static function OutputResponsiveAd($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputResponsiveAd * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("BusinessName: %s", $dataObject->BusinessName));
            self::OutputStatusMessage(sprintf("CallToAction: %s", $dataObject->CallToAction));
            self::OutputStatusMessage(sprintf("Headline: %s", $dataObject->Headline));
            self::OutputStatusMessage(sprintf("LandscapeImageMediaId: %s", $dataObject->LandscapeImageMediaId));
            self::OutputStatusMessage(sprintf("LandscapeLogoMediaId: %s", $dataObject->LandscapeLogoMediaId));
            self::OutputStatusMessage(sprintf("LongHeadline: %s", $dataObject->LongHeadline));
            self::OutputStatusMessage(sprintf("SquareImageMediaId: %s", $dataObject->SquareImageMediaId));
            self::OutputStatusMessage(sprintf("SquareLogoMediaId: %s", $dataObject->SquareLogoMediaId));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
        }
        self::OutputStatusMessage("* * * End OutputResponsiveAd * * *");
    }
    static function OutputArrayOfResponsiveAd($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ResponsiveAd))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfResponsiveAd * * *");
        foreach ($dataObjects->ResponsiveAd as $dataObject)
        {
            self::OutputResponsiveAd($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfResponsiveAd * * *");
    }
    static function OutputResponsiveSearchAd($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputResponsiveSearchAd * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfAssetLink($dataObject->Descriptions);
            self::OutputStatusMessage(sprintf("Domain: %s", $dataObject->Domain));
            self::OutputArrayOfAssetLink($dataObject->Headlines);
            self::OutputStatusMessage(sprintf("Path1: %s", $dataObject->Path1));
            self::OutputStatusMessage(sprintf("Path2: %s", $dataObject->Path2));
        }
        self::OutputStatusMessage("* * * End OutputResponsiveSearchAd * * *");
    }
    static function OutputArrayOfResponsiveSearchAd($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ResponsiveSearchAd))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfResponsiveSearchAd * * *");
        foreach ($dataObjects->ResponsiveSearchAd as $dataObject)
        {
            self::OutputResponsiveSearchAd($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfResponsiveSearchAd * * *");
    }
    static function OutputReviewAdExtension($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputReviewAdExtension * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("IsExact: %s", $dataObject->IsExact));
            self::OutputStatusMessage(sprintf("Source: %s", $dataObject->Source));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
            self::OutputStatusMessage(sprintf("Url: %s", $dataObject->Url));
        }
        self::OutputStatusMessage("* * * End OutputReviewAdExtension * * *");
    }
    static function OutputArrayOfReviewAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ReviewAdExtension))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfReviewAdExtension * * *");
        foreach ($dataObjects->ReviewAdExtension as $dataObject)
        {
            self::OutputReviewAdExtension($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfReviewAdExtension * * *");
    }
    static function OutputRuleItem($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputRuleItem * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "StringRuleItem")
            {
                self::OutputStringRuleItem($dataObject);
            }
        }
        self::OutputStatusMessage("* * * End OutputRuleItem * * *");
    }
    static function OutputArrayOfRuleItem($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->RuleItem))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfRuleItem * * *");
        foreach ($dataObjects->RuleItem as $dataObject)
        {
            self::OutputRuleItem($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfRuleItem * * *");
    }
    static function OutputRuleItemGroup($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputRuleItemGroup * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfRuleItem($dataObject->Items);
        }
        self::OutputStatusMessage("* * * End OutputRuleItemGroup * * *");
    }
    static function OutputArrayOfRuleItemGroup($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->RuleItemGroup))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfRuleItemGroup * * *");
        foreach ($dataObjects->RuleItemGroup as $dataObject)
        {
            self::OutputRuleItemGroup($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfRuleItemGroup * * *");
    }
    static function OutputSchedule($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputSchedule * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfDayTime($dataObject->DayTimeRanges);
            self::OutputDate($dataObject->EndDate);
            self::OutputDate($dataObject->StartDate);
            self::OutputStatusMessage(sprintf("UseSearcherTimeZone: %s", $dataObject->UseSearcherTimeZone));
        }
        self::OutputStatusMessage("* * * End OutputSchedule * * *");
    }
    static function OutputArrayOfSchedule($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Schedule))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSchedule * * *");
        foreach ($dataObjects->Schedule as $dataObject)
        {
            self::OutputSchedule($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSchedule * * *");
    }
    static function OutputSetting($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputSetting * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "CoOpSetting")
            {
                self::OutputCoOpSetting($dataObject);
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
        }
        self::OutputStatusMessage("* * * End OutputSetting * * *");
    }
    static function OutputArrayOfSetting($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Setting))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSetting * * *");
        foreach ($dataObjects->Setting as $dataObject)
        {
            self::OutputSetting($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSetting * * *");
    }
    static function OutputSharedEntity($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputSharedEntity * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AssociationCount: %s", $dataObject->AssociationCount));
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "SharedList")
            {
                self::OutputSharedList($dataObject);
            }
        }
        self::OutputStatusMessage("* * * End OutputSharedEntity * * *");
    }
    static function OutputArrayOfSharedEntity($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SharedEntity))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSharedEntity * * *");
        foreach ($dataObjects->SharedEntity as $dataObject)
        {
            self::OutputSharedEntity($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSharedEntity * * *");
    }
    static function OutputSharedEntityAssociation($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputSharedEntityAssociation * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("EntityId: %s", $dataObject->EntityId));
            self::OutputStatusMessage(sprintf("EntityType: %s", $dataObject->EntityType));
            self::OutputStatusMessage(sprintf("SharedEntityId: %s", $dataObject->SharedEntityId));
            self::OutputStatusMessage(sprintf("SharedEntityType: %s", $dataObject->SharedEntityType));
        }
        self::OutputStatusMessage("* * * End OutputSharedEntityAssociation * * *");
    }
    static function OutputArrayOfSharedEntityAssociation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SharedEntityAssociation))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSharedEntityAssociation * * *");
        foreach ($dataObjects->SharedEntityAssociation as $dataObject)
        {
            self::OutputSharedEntityAssociation($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSharedEntityAssociation * * *");
    }
    static function OutputSharedList($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputSharedList * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("ItemCount: %s", $dataObject->ItemCount));
            if($dataObject->Type === "NegativeKeywordList")
            {
                self::OutputNegativeKeywordList($dataObject);
            }
        }
        self::OutputStatusMessage("* * * End OutputSharedList * * *");
    }
    static function OutputArrayOfSharedList($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SharedList))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSharedList * * *");
        foreach ($dataObjects->SharedList as $dataObject)
        {
            self::OutputSharedList($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSharedList * * *");
    }
    static function OutputSharedListItem($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputSharedListItem * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "NegativeKeyword")
            {
                self::OutputNegativeKeyword($dataObject);
            }
        }
        self::OutputStatusMessage("* * * End OutputSharedListItem * * *");
    }
    static function OutputArrayOfSharedListItem($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SharedListItem))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSharedListItem * * *");
        foreach ($dataObjects->SharedListItem as $dataObject)
        {
            self::OutputSharedListItem($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSharedListItem * * *");
    }
    static function OutputShoppingSetting($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputShoppingSetting * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("LocalInventoryAdsEnabled: %s", $dataObject->LocalInventoryAdsEnabled));
            self::OutputStatusMessage(sprintf("Priority: %s", $dataObject->Priority));
            self::OutputStatusMessage(sprintf("SalesCountryCode: %s", $dataObject->SalesCountryCode));
            self::OutputStatusMessage(sprintf("StoreId: %s", $dataObject->StoreId));
        }
        self::OutputStatusMessage("* * * End OutputShoppingSetting * * *");
    }
    static function OutputArrayOfShoppingSetting($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ShoppingSetting))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfShoppingSetting * * *");
        foreach ($dataObjects->ShoppingSetting as $dataObject)
        {
            self::OutputShoppingSetting($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfShoppingSetting * * *");
    }
    static function OutputSimilarRemarketingList($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputSimilarRemarketingList * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("SourceId: %s", $dataObject->SourceId));
        }
        self::OutputStatusMessage("* * * End OutputSimilarRemarketingList * * *");
    }
    static function OutputArrayOfSimilarRemarketingList($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SimilarRemarketingList))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSimilarRemarketingList * * *");
        foreach ($dataObjects->SimilarRemarketingList as $dataObject)
        {
            self::OutputSimilarRemarketingList($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSimilarRemarketingList * * *");
    }
    static function OutputSitelinkAdExtension($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputSitelinkAdExtension * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Description1: %s", $dataObject->Description1));
            self::OutputStatusMessage(sprintf("Description2: %s", $dataObject->Description2));
            self::OutputStatusMessage(sprintf("DestinationUrl: %s", $dataObject->DestinationUrl));
            self::OutputStatusMessage(sprintf("DisplayText: %s", $dataObject->DisplayText));
            self::OutputArrayOfAppUrl($dataObject->FinalAppUrls);
            self::OutputArrayOfString($dataObject->FinalMobileUrls);
            self::OutputArrayOfString($dataObject->FinalUrls);
            self::OutputStatusMessage(sprintf("TrackingUrlTemplate: %s", $dataObject->TrackingUrlTemplate));
            self::OutputCustomParameters($dataObject->UrlCustomParameters);
        }
        self::OutputStatusMessage("* * * End OutputSitelinkAdExtension * * *");
    }
    static function OutputArrayOfSitelinkAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SitelinkAdExtension))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSitelinkAdExtension * * *");
        foreach ($dataObjects->SitelinkAdExtension as $dataObject)
        {
            self::OutputSitelinkAdExtension($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSitelinkAdExtension * * *");
    }
    static function OutputStringRuleItem($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputStringRuleItem * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Operand: %s", $dataObject->Operand));
            self::OutputStatusMessage(sprintf("Operator: %s", $dataObject->Operator));
            self::OutputStatusMessage(sprintf("Value: %s", $dataObject->Value));
        }
        self::OutputStatusMessage("* * * End OutputStringRuleItem * * *");
    }
    static function OutputArrayOfStringRuleItem($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->StringRuleItem))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfStringRuleItem * * *");
        foreach ($dataObjects->StringRuleItem as $dataObject)
        {
            self::OutputStringRuleItem($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfStringRuleItem * * *");
    }
    static function OutputStructuredSnippetAdExtension($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputStructuredSnippetAdExtension * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Header: %s", $dataObject->Header));
            self::OutputArrayOfString($dataObject->Values);
        }
        self::OutputStatusMessage("* * * End OutputStructuredSnippetAdExtension * * *");
    }
    static function OutputArrayOfStructuredSnippetAdExtension($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->StructuredSnippetAdExtension))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfStructuredSnippetAdExtension * * *");
        foreach ($dataObjects->StructuredSnippetAdExtension as $dataObject)
        {
            self::OutputStructuredSnippetAdExtension($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfStructuredSnippetAdExtension * * *");
    }
    static function OutputTargetCpaBiddingScheme($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputTargetCpaBiddingScheme * * *");
        if (!empty($dataObject))
        {
            self::OutputBid($dataObject->MaxCpc);
            self::OutputStatusMessage(sprintf("TargetCpa: %s", $dataObject->TargetCpa));
        }
        self::OutputStatusMessage("* * * End OutputTargetCpaBiddingScheme * * *");
    }
    static function OutputArrayOfTargetCpaBiddingScheme($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->TargetCpaBiddingScheme))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfTargetCpaBiddingScheme * * *");
        foreach ($dataObjects->TargetCpaBiddingScheme as $dataObject)
        {
            self::OutputTargetCpaBiddingScheme($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfTargetCpaBiddingScheme * * *");
    }
    static function OutputTargetSetting($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputTargetSetting * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfTargetSettingDetail($dataObject->Details);
        }
        self::OutputStatusMessage("* * * End OutputTargetSetting * * *");
    }
    static function OutputArrayOfTargetSetting($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->TargetSetting))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfTargetSetting * * *");
        foreach ($dataObjects->TargetSetting as $dataObject)
        {
            self::OutputTargetSetting($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfTargetSetting * * *");
    }
    static function OutputTargetSettingDetail($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputTargetSettingDetail * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("CriterionTypeGroup: %s", $dataObject->CriterionTypeGroup));
            self::OutputStatusMessage(sprintf("TargetAndBid: %s", $dataObject->TargetAndBid));
        }
        self::OutputStatusMessage("* * * End OutputTargetSettingDetail * * *");
    }
    static function OutputArrayOfTargetSettingDetail($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->TargetSettingDetail))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfTargetSettingDetail * * *");
        foreach ($dataObjects->TargetSettingDetail as $dataObject)
        {
            self::OutputTargetSettingDetail($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfTargetSettingDetail * * *");
    }
    static function OutputTextAd($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputTextAd * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("DestinationUrl: %s", $dataObject->DestinationUrl));
            self::OutputStatusMessage(sprintf("DisplayUrl: %s", $dataObject->DisplayUrl));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
            self::OutputStatusMessage(sprintf("Title: %s", $dataObject->Title));
        }
        self::OutputStatusMessage("* * * End OutputTextAd * * *");
    }
    static function OutputArrayOfTextAd($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->TextAd))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfTextAd * * *");
        foreach ($dataObjects->TextAd as $dataObject)
        {
            self::OutputTextAd($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfTextAd * * *");
    }
    static function OutputTextAsset($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputTextAsset * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
        }
        self::OutputStatusMessage("* * * End OutputTextAsset * * *");
    }
    static function OutputArrayOfTextAsset($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->TextAsset))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfTextAsset * * *");
        foreach ($dataObjects->TextAsset as $dataObject)
        {
            self::OutputTextAsset($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfTextAsset * * *");
    }
    static function OutputUetTag($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputUetTag * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Description: %s", $dataObject->Description));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("TrackingNoScript: %s", $dataObject->TrackingNoScript));
            self::OutputStatusMessage(sprintf("TrackingScript: %s", $dataObject->TrackingScript));
            self::OutputStatusMessage(sprintf("TrackingStatus: %s", $dataObject->TrackingStatus));
        }
        self::OutputStatusMessage("* * * End OutputUetTag * * *");
    }
    static function OutputArrayOfUetTag($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->UetTag))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfUetTag * * *");
        foreach ($dataObjects->UetTag as $dataObject)
        {
            self::OutputUetTag($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfUetTag * * *");
    }
    static function OutputUrlGoal($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputUrlGoal * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("UrlExpression: %s", $dataObject->UrlExpression));
            self::OutputStatusMessage(sprintf("UrlOperator: %s", $dataObject->UrlOperator));
        }
        self::OutputStatusMessage("* * * End OutputUrlGoal * * *");
    }
    static function OutputArrayOfUrlGoal($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->UrlGoal))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfUrlGoal * * *");
        foreach ($dataObjects->UrlGoal as $dataObject)
        {
            self::OutputUrlGoal($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfUrlGoal * * *");
    }
    static function OutputWebpage($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputWebpage * * *");
        if (!empty($dataObject))
        {
            self::OutputWebpageParameter($dataObject->Parameter);
        }
        self::OutputStatusMessage("* * * End OutputWebpage * * *");
    }
    static function OutputArrayOfWebpage($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Webpage))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfWebpage * * *");
        foreach ($dataObjects->Webpage as $dataObject)
        {
            self::OutputWebpage($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfWebpage * * *");
    }
    static function OutputWebpageCondition($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputWebpageCondition * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Argument: %s", $dataObject->Argument));
            self::OutputStatusMessage(sprintf("Operand: %s", $dataObject->Operand));
        }
        self::OutputStatusMessage("* * * End OutputWebpageCondition * * *");
    }
    static function OutputArrayOfWebpageCondition($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->WebpageCondition))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfWebpageCondition * * *");
        foreach ($dataObjects->WebpageCondition as $dataObject)
        {
            self::OutputWebpageCondition($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfWebpageCondition * * *");
    }
    static function OutputWebpageParameter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputWebpageParameter * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfWebpageCondition($dataObject->Conditions);
            self::OutputStatusMessage(sprintf("CriterionName: %s", $dataObject->CriterionName));
        }
        self::OutputStatusMessage("* * * End OutputWebpageParameter * * *");
    }
    static function OutputArrayOfWebpageParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->WebpageParameter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfWebpageParameter * * *");
        foreach ($dataObjects->WebpageParameter as $dataObject)
        {
            self::OutputWebpageParameter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfWebpageParameter * * *");
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
            self::OutputStatusMessage(sprintf("Value of the string: %s", $item));
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
            self::OutputStatusMessage(sprintf("Value of the long: %s", $item));
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
            self::OutputStatusMessage(sprintf("Value of the int: %s", $item));
        }
        self::OutputStatusMessage("* * * End OutputArrayOfInt * * *");
    }
}
