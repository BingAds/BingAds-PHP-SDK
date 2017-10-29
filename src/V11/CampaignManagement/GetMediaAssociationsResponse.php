<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the media associations of the specified entity type from an account's media library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getmediaassociations?version=11 GetMediaAssociations Response Object
     * 
     * @uses MediaAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetMediaAssociations
     */
    final class GetMediaAssociationsResponse
    {
        /**
         * An array of MediaAssociation objects that corresponds directly to the media identifiers that you specified in the request.
         * @var MediaAssociation[][]
         */
        public $MediaAssociations;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
