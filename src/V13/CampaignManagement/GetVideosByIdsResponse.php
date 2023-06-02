<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets videos by video identifiers.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getvideosbyids?view=bingads-13 GetVideosByIds Response Object
     * 
     * @uses Video
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetVideosByIds
     */
    final class GetVideosByIdsResponse
    {
        /**
         * An array of Video objects that corresponds directly to the video identifiers that you specified in the request.
         * @var Video[]
         */
        public $Videos;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
