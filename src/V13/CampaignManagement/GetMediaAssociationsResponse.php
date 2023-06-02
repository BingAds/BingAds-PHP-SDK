<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the media associations of the specified entity type from an account's media library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getmediaassociations?view=bingads-13 GetMediaAssociations Response Object
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
