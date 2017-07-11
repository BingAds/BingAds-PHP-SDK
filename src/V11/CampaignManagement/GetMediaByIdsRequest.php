<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified media from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn277511(v=msads.110).aspx GetMediaByIds Request Object
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
