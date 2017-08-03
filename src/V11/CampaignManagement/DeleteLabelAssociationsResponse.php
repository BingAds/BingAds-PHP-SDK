<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes label associations.
     * @link http://msdn.microsoft.com/en-us/library/mt803288(v=msads.110).aspx DeleteLabelAssociations Response Object
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
