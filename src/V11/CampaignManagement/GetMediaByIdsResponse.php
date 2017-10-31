<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified media from an account's media library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getmediabyids?view=bingads-11 GetMediaByIds Response Object
     * 
     * @uses Media
     * @used-by BingAdsCampaignManagementService::GetMediaByIds
     */
    final class GetMediaByIdsResponse
    {
        /**
         * The specified media from the library.
         * @var Media[]
         */
        public $Media;
    }
}
