<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates conversion goals within the account's shared conversion goal library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateconversiongoals?view=bingads-13 UpdateConversionGoals Response Object
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
