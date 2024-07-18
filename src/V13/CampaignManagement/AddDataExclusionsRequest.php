<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Add a data exclusion to the specified account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adddataexclusions?view=bingads-13 AddDataExclusions Request Object
     * 
     * @uses DataExclusion
     * @used-by BingAdsCampaignManagementService::AddDataExclusions
     */
    final class AddDataExclusionsRequest
    {
        /**
         * The account ID.
         * @var integer
         */
        public $AccountId;

        /**
         * The data exclusions to add.
         * @var DataExclusion[]
         */
        public $DataExclusions;
    }
}
