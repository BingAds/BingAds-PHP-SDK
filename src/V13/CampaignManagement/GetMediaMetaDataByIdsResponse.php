<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified media meta data from an account's media library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getmediametadatabyids?view=bingads-13 GetMediaMetaDataByIds Response Object
     * 
     * @uses MediaMetaData
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByIds
     */
    final class GetMediaMetaDataByIdsResponse
    {
        /**
         * An array of MediaMetaData objects that corresponds directly to the media identifiers that you specified in the request.
         * @var MediaMetaData[]
         */
        public $MediaMetaData;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
