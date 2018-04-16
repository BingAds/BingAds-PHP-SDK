<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Deletes negative keyword lists from the account's library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deletesharedentities?view=bingads-12 DeleteSharedEntities Response Object
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
