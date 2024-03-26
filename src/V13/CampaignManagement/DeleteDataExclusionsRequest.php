<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletedataexclusions?view=bingads-13 DeleteDataExclusions Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteDataExclusions
     */
    final class DeleteDataExclusionsRequest
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved.
         * @var integer[]
         */
        public $DataExclusionIds;
    }
}
