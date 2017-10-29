<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified media meta data from an account's media library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getmediametadatabyids?version=11 GetMediaMetaDataByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByIds
     */
    final class GetMediaMetaDataByIdsRequest
    {
        /**
         * The identifiers of the media to get.
         * @var integer[]
         */
        public $MediaIds;
    }
}
