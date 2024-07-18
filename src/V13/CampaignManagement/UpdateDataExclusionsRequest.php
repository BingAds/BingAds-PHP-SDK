<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Make updates to the specified data exclusions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatedataexclusions?view=bingads-13 UpdateDataExclusions Request Object
     * 
     * @uses DataExclusion
     * @used-by BingAdsCampaignManagementService::UpdateDataExclusions
     */
    final class UpdateDataExclusionsRequest
    {
        /**
         * The account ID.
         * @var integer
         */
        public $AccountId;

        /**
         * The data exclusions to update.
         * @var DataExclusion[]
         */
        public $DataExclusions;
    }
}
