<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more videos from the account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletevideos?view=bingads-13 DeleteVideos Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteVideos
     */
    final class DeleteVideosResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
