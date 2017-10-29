<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates conversion goals within the account's shared conversion goal library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updateconversiongoals?version=11 UpdateConversionGoals Response Object
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
