<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes the negative keyword list to campaign associations, or website exclusion list to ad account associations.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletesharedentityassociations?view=bingads-13 DeleteSharedEntityAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntityAssociations
     */
    final class DeleteSharedEntityAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any associations that were not successfully deleted.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
