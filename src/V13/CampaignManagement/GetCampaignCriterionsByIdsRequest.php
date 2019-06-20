<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified campaign criterions.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getcampaigncriterionsbyids?view=bingads-13 GetCampaignCriterionsByIds Request Object
     * 
     * @uses CampaignCriterionType
     * @used-by BingAdsCampaignManagementService::GetCampaignCriterionsByIds
     */
    final class GetCampaignCriterionsByIdsRequest
    {
        /**
         * A list of unique identifiers that identify the campaign criterions to get.
         * @var integer[]
         */
        public $CampaignCriterionIds;

        /**
         * The unique identifier of the campaign whose criterions you want to get.
         * @var integer
         */
        public $CampaignId;

        /**
         * The type of criterion to get, for example Webpage.
         * @var CampaignCriterionType
         */
        public $CriterionType;
    }
}
