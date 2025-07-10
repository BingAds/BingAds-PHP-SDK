<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Update the status of the specified conversion value rules.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateconversionvaluerulesstatus?view=bingads-13 UpdateConversionValueRulesStatus Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateConversionValueRulesStatus
     */
    final class UpdateConversionValueRulesStatusResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
