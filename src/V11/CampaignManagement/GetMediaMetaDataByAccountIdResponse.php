<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the media meta data of the specified entity type from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn766196(v=msads.110).aspx GetMediaMetaDataByAccountId Response Object
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
