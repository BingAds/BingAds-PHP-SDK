<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the AddVideos Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/addvideos?view=bingads-13 AddVideos Request Object
     * 
     * @uses Video
     * @used-by BingAdsCampaignManagementService::AddVideos
     */
    final class AddVideosRequest
    {
        /**
         * Reserved.
         * @var Video[]
         */
        public $Videos;
    }
}
