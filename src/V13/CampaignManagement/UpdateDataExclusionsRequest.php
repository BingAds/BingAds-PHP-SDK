<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatedataexclusions?view=bingads-13 UpdateDataExclusions Request Object
     * 
     * @uses DataExclusion
     * @used-by BingAdsCampaignManagementService::UpdateDataExclusions
     */
    final class UpdateDataExclusionsRequest
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved.
         * @var DataExclusion[]
         */
        public $DataExclusions;
    }
}
