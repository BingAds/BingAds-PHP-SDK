<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates one or more campaign criterions.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/updatecampaigncriterions?view=bingads-13 UpdateCampaignCriterions Request Object
     * 
     * @uses CampaignCriterion
     * @uses CampaignCriterionType
     * @used-by BingAdsCampaignManagementService::UpdateCampaignCriterions
     */
    final class UpdateCampaignCriterionsRequest
    {
        /**
         * The list of campaign criterions to update.
         * @var CampaignCriterion[]
         */
        public $CampaignCriterions;

        /**
         * The type of criterion to update, for example Webpage.
         * @var CampaignCriterionType
         */
        public $CriterionType;
    }
}
