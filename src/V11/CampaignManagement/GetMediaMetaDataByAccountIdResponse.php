<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the media meta data of the specified entity type from an account's media library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getmediametadatabyaccountid?version=11 GetMediaMetaDataByAccountId Response Object
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
