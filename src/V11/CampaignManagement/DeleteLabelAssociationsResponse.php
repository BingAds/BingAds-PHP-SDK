<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes label associations.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deletelabelassociations?version=11 DeleteLabelAssociations Response Object
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
