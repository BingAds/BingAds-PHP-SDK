<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the media meta data of the specified entity type from an account's media library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getmediametadatabyaccountid?view=bingads-13 GetMediaMetaDataByAccountId Response Object
     * 
     * @uses MediaMetaData
     * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByAccountId
     */
    final class GetMediaMetaDataByAccountIdResponse
    {
        /**
         * The specified media meta data from the library.
         * @var MediaMetaData[]
         */
        public $MediaMetaData;
    }
}
