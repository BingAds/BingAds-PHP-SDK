<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the AddVideos Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/addvideos?view=bingads-13 AddVideos Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddVideos
     */
    final class AddVideosResponse
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $VideoIds;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
