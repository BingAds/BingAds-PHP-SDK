<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Sets label associations.
     * @link http://msdn.microsoft.com/en-us/library/mt803283(v=msads.110).aspx SetLabelAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetLabelAssociations
     */
    final class SetLabelAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any associations that were not successfully retrieved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
