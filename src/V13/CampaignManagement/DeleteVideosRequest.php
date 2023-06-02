<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more videos from the account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletevideos?view=bingads-13 DeleteVideos Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteVideos
     */
    final class DeleteVideosRequest
    {
        /**
         * The identifiers of videos to delete.
         * @var integer[]
         */
        public $VideoIds;
    }
}
