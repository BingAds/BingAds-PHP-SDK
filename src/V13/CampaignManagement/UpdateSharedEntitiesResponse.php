<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the negative keyword lists or website exclusion lists.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatesharedentities?view=bingads-13 UpdateSharedEntities Response Object
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
