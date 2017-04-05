<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the media meta data of the specified entity type from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn766196(v=msads.100).aspx GetMediaMetaDataByAccountId Request Object
     * 
     * @uses MediaEnabledEntityFilter
     * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByAccountId
     */
    final class GetMediaMetaDataByAccountIdRequest
    {
        /**
         * Determines the type of media enabled entity to get meta data.
         * @var MediaEnabledEntityFilter
         */
        public $MediaEnabledEntities;
    }
}
