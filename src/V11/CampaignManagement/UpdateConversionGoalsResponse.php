<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates conversion goals within the account's shared conversion goal library.
     * @link http://msdn.microsoft.com/en-us/library/mt759544(v=msads.110).aspx UpdateConversionGoals Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateConversionGoals
     */
    final class UpdateConversionGoalsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
