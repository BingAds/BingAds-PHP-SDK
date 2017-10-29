<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates negative keyword lists within the account's library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updatesharedentities?version=11 UpdateSharedEntities Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateSharedEntities
     */
    final class UpdateSharedEntitiesResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
