<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the videos within the account.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/updatevideos?view=bingads-13 UpdateVideos Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateVideos
     */
    final class UpdateVideosResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
