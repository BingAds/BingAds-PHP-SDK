<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the GetVideosByIds Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getvideosbyids?view=bingads-13 GetVideosByIds Response Object
     * 
     * @uses Video
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetVideosByIds
     */
    final class GetVideosByIdsResponse
    {
        /**
         * Reserved.
         * @var Video[]
         */
        public $Videos;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
