<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes negative keyword lists from the ad account library, or deletes website exclusion lists from the manager account (customer) library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletesharedentities?view=bingads-13 DeleteSharedEntities Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntities
     */
    final class DeleteSharedEntitiesResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
