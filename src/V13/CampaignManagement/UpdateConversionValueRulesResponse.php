<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Update existing conversion value rules.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateconversionvaluerules?view=bingads-13 UpdateConversionValueRules Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateConversionValueRules
     */
    final class UpdateConversionValueRulesResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
