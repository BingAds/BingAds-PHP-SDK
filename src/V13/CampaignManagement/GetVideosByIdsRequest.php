<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets videos by video identifiers.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getvideosbyids?view=bingads-13 GetVideosByIds Request Object
     * 
     * @uses Paging
     * @used-by BingAdsCampaignManagementService::GetVideosByIds
     */
    final class GetVideosByIdsRequest
    {
        /**
         * The identifiers of the videos to get.
         * @var integer[]
         */
        public $VideoIds;

        /**
         * Determines the index and size of video results per page.
         * @var Paging
         */
        public $PageInfo;
    }
}
