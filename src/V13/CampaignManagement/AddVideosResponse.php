<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds one or more videos to an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addvideos?view=bingads-13 AddVideos Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddVideos
     */
    final class AddVideosResponse
    {
        /**
         * A list of unique system identifiers corresponding to the videos that were added.
         * @var integer[]
         */
        public $VideoIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
