<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the media meta data of the specified entity type from an account's media library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getmediametadatabyaccountid?view=bingads-12 GetMediaMetaDataByAccountId Request Object
     * 
     * @uses MediaEnabledEntityFilter
     * @uses Paging
     * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByAccountId
     */
    final class GetMediaMetaDataByAccountIdRequest
    {
        /**
         * Determines the type of media enabled entity to get meta data.
         * @var MediaEnabledEntityFilter
         */
        public $MediaEnabledEntities;

        /**
         * Determines the index and size of media meta data results per page.
         * @var Paging
         */
        public $PageInfo;
    }
}
