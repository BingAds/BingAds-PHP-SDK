<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the GetVideosByIds Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getvideosbyids?view=bingads-13 GetVideosByIds Request Object
     * 
     * @uses Paging
     * @used-by BingAdsCampaignManagementService::GetVideosByIds
     */
    final class GetVideosByIdsRequest
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $VideoIds;

        /**
         * Reserved.
         * @var Paging
         */
        public $PageInfo;
    }
}
