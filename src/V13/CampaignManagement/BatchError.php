<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a Campaign Management batch error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/batcherror?view=bingads-13 BatchError Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @used-by ApiFaultDetail
     * @used-by BatchErrorCollection
     * @used-by EditorialApiFaultDetail
     * @used-by AddAdGroupsResponse
     * @used-by AddAdsResponse
     * @used-by AddAssetGroupsResponse
     * @used-by AddAudienceGroupsResponse
     * @used-by AddAudiencesResponse
     * @used-by AddBidStrategiesResponse
     * @used-by AddBudgetsResponse
     * @used-by AddCampaignConversionGoalsResponse
     * @used-by AddCampaignsResponse
     * @used-by AddConversionGoalsResponse
     * @used-by AddDataExclusionsResponse
     * @used-by AddExperimentsResponse
     * @used-by AddImportJobsResponse
     * @used-by AddKeywordsResponse
     * @used-by AddLabelsResponse
     * @used-by AddListItemsToSharedListResponse
     * @used-by AddSeasonalityAdjustmentsResponse
     * @used-by AddSharedEntityResponse
     * @used-by AddUetTagsResponse
     * @used-by AddVideosResponse
     * @used-by AppealEditorialRejectionsResponse
     * @used-by ApplyAssetGroupListingGroupActionsResponse
     * @used-by ApplyCustomerListItemsResponse
     * @used-by ApplyCustomerListUserDataResponse
     * @used-by ApplyHotelGroupActionsResponse
     * @used-by ApplyOfflineConversionAdjustmentsResponse
     * @used-by ApplyOfflineConversionsResponse
     * @used-by ApplyOnlineConversionAdjustmentsResponse
     * @used-by ApplyProductPartitionActionsResponse
     * @used-by DeleteAdExtensionsResponse
     * @used-by DeleteAdExtensionsAssociationsResponse
     * @used-by DeleteAdGroupCriterionsResponse
     * @used-by DeleteAdGroupsResponse
     * @used-by DeleteAdsResponse
     * @used-by DeleteAssetGroupsResponse
     * @used-by DeleteAudienceGroupAssetGroupAssociationsResponse
     * @used-by DeleteAudienceGroupsResponse
     * @used-by DeleteAudiencesResponse
     * @used-by DeleteBidStrategiesResponse
     * @used-by DeleteBudgetsResponse
     * @used-by DeleteCampaignConversionGoalsResponse
     * @used-by DeleteCampaignCriterionsResponse
     * @used-by DeleteCampaignsResponse
     * @used-by DeleteDataExclusionsResponse
     * @used-by DeleteExperimentsResponse
     * @used-by DeleteImportJobsResponse
     * @used-by DeleteKeywordsResponse
     * @used-by DeleteLabelAssociationsResponse
     * @used-by DeleteLabelsResponse
     * @used-by DeleteListItemsFromSharedListResponse
     * @used-by DeleteMediaResponse
     * @used-by DeleteSeasonalityAdjustmentsResponse
     * @used-by DeleteSharedEntitiesResponse
     * @used-by DeleteSharedEntityAssociationsResponse
     * @used-by DeleteVideosResponse
     * @used-by GetAccountPropertiesResponse
     * @used-by GetAdExtensionsAssociationsResponse
     * @used-by GetAdExtensionsByIdsResponse
     * @used-by GetAdExtensionsEditorialReasonsResponse
     * @used-by GetAdGroupsByIdsResponse
     * @used-by GetAdsByIdsResponse
     * @used-by GetAssetGroupsByCampaignIdResponse
     * @used-by GetAssetGroupsByIdsResponse
     * @used-by GetAssetGroupsEditorialReasonsResponse
     * @used-by GetAudienceGroupAssetGroupAssociationsByAssetGroupIdsResponse
     * @used-by GetAudienceGroupAssetGroupAssociationsByAudienceGroupIdsResponse
     * @used-by GetAudienceGroupsByIdsResponse
     * @used-by GetAudiencesByIdsResponse
     * @used-by GetBidStrategiesByIdsResponse
     * @used-by GetBudgetsByIdsResponse
     * @used-by GetCampaignCriterionsByIdsResponse
     * @used-by GetCampaignIdsByBidStrategyIdsResponse
     * @used-by GetCampaignIdsByBudgetIdsResponse
     * @used-by GetCampaignsByIdsResponse
     * @used-by GetConversionGoalsByIdsResponse
     * @used-by GetConversionGoalsByTagIdsResponse
     * @used-by GetDataExclusionsByAccountIdResponse
     * @used-by GetDataExclusionsByIdsResponse
     * @used-by GetEditorialReasonsByIdsResponse
     * @used-by GetExperimentsByIdsResponse
     * @used-by GetImportEntityIdsMappingResponse
     * @used-by GetImportJobsByIdsResponse
     * @used-by GetKeywordsByIdsResponse
     * @used-by GetLabelAssociationsByEntityIdsResponse
     * @used-by GetLabelAssociationsByLabelIdsResponse
     * @used-by GetLabelsByIdsResponse
     * @used-by GetMediaAssociationsResponse
     * @used-by GetMediaMetaDataByIdsResponse
     * @used-by GetNegativeKeywordsByEntityIdsResponse
     * @used-by GetNegativeSitesByAdGroupIdsResponse
     * @used-by GetNegativeSitesByCampaignIdsResponse
     * @used-by GetSeasonalityAdjustmentsByAccountIdResponse
     * @used-by GetSeasonalityAdjustmentsByIdsResponse
     * @used-by GetSharedEntityAssociationsByEntityIdsResponse
     * @used-by GetSharedEntityAssociationsBySharedEntityIdsResponse
     * @used-by GetUetTagsByIdsResponse
     * @used-by GetVideosByIdsResponse
     * @used-by SetAdExtensionsAssociationsResponse
     * @used-by SetAudienceGroupAssetGroupAssociationsResponse
     * @used-by SetLabelAssociationsResponse
     * @used-by SetNegativeSitesToAdGroupsResponse
     * @used-by SetNegativeSitesToCampaignsResponse
     * @used-by SetSharedEntityAssociationsResponse
     * @used-by UpdateAdGroupsResponse
     * @used-by UpdateAdsResponse
     * @used-by UpdateAssetGroupsResponse
     * @used-by UpdateAudienceGroupsResponse
     * @used-by UpdateAudiencesResponse
     * @used-by UpdateBidStrategiesResponse
     * @used-by UpdateBudgetsResponse
     * @used-by UpdateCampaignsResponse
     * @used-by UpdateConversionGoalsResponse
     * @used-by UpdateDataExclusionsResponse
     * @used-by UpdateExperimentsResponse
     * @used-by UpdateImportJobsResponse
     * @used-by UpdateKeywordsResponse
     * @used-by UpdateLabelsResponse
     * @used-by UpdateSeasonalityAdjustmentsResponse
     * @used-by UpdateSharedEntitiesResponse
     * @used-by UpdateUetTagsResponse
     * @used-by UpdateVideosResponse
     */
    class BatchError
    {
        /**
         * A numeric error code that identifies the error.
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the batch error.
         * @var string
         */
        public $Details;

        /**
         * A symbolic string constant that identifies the error.
         * @var string
         */
        public $ErrorCode;

        /**
         * The name of the data object's element where the error occurred.
         * @var string
         */
        public $FieldPath;

        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The zero-based index of the item in the batch of items in the request message that failed.
         * @var integer
         */
        public $Index;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;

        /**
         * Reserved for internal use.
         * @var string
         */
        public $Type;
    }

}
