<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the DeleteVideos Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/deletevideos?view=bingads-13 DeleteVideos Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteVideos
     */
    final class DeleteVideosResponse
    {
        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
