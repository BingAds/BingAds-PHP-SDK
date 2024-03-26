<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletedataexclusions?view=bingads-13 DeleteDataExclusions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteDataExclusions
     */
    final class DeleteDataExclusionsResponse
    {
        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
