<?php
// Generated on 5/7/2017 5:48:21 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the media associations of the specified entity type from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn798359(v=msads.110).aspx GetMediaAssociations Request Object
     * 
     * @uses MediaEnabledEntityFilter
     * @used-by BingAdsCampaignManagementService::GetMediaAssociations
     */
    final class GetMediaAssociationsRequest
    {
        /**
         * Filters the results to only return media associations with the specified type of media enabled entity.
         * @var MediaEnabledEntityFilter
         */
        public $MediaEnabledEntities;

        /**
         * The identifiers of the media to get corresponding entity associations.
         * @var integer[]
         */
        public $MediaIds;
    }
}
