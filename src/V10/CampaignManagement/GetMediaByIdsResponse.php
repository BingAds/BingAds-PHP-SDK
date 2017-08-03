<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the specified media from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn277511(v=msads.100).aspx GetMediaByIds Response Object
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
