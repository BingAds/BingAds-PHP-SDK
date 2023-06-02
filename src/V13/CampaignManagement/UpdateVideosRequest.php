<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the videos within the account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatevideos?view=bingads-13 UpdateVideos Request Object
     * 
     * @uses Video
     * @used-by BingAdsCampaignManagementService::UpdateVideos
     */
    final class UpdateVideosRequest
    {
        /**
         * The list of videos that you want to update.
         * @var Video[]
         */
        public $Videos;
    }
}
