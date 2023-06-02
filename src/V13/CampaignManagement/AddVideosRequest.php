<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds one or more videos to an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addvideos?view=bingads-13 AddVideos Request Object
     * 
     * @uses Video
     * @used-by BingAdsCampaignManagementService::AddVideos
     */
    final class AddVideosRequest
    {
        /**
         * The list of videos to add to the account.
         * @var Video[]
         */
        public $Videos;
    }
}
