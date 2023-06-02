<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes label associations.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletelabelassociations?view=bingads-13 DeleteLabelAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteLabelAssociations
     */
    final class DeleteLabelAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any associations that were not successfully retrieved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
