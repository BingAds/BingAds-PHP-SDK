<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adddataexclusions?view=bingads-13 AddDataExclusions Request Object
     * 
     * @uses DataExclusion
     * @used-by BingAdsCampaignManagementService::AddDataExclusions
     */
    final class AddDataExclusionsRequest
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
