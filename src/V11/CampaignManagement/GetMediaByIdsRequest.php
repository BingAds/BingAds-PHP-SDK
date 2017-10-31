<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified media from an account's media library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getmediabyids?view=bingads-11 GetMediaByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetMediaByIds
     */
    final class GetMediaByIdsRequest
    {
        /**
         * The identifier of the account that owns the media library.
         * @var integer
         */
        public $AccountId;

        /**
         * The identifiers of the media to get.
         * @var integer[]
         */
        public $MediaIds;
    }
}
