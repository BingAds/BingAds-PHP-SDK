<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the specified media from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn277511(v=msads.100).aspx GetMediaByIds Request Object
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
