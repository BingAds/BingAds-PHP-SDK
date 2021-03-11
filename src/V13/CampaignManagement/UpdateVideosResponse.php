<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the UpdateVideos Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/updatevideos?view=bingads-13 UpdateVideos Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateVideos
     */
    final class UpdateVideosResponse
    {
        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
