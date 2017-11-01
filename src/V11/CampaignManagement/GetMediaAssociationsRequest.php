<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the media associations of the specified entity type from an account's media library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getmediaassociations?view=bingads-11 GetMediaAssociations Request Object
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
