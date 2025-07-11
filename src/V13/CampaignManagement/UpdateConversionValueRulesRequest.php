<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Update existing conversion value rules.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateconversionvaluerules?view=bingads-13 UpdateConversionValueRules Request Object
     * 
     * @uses ConversionValueRule
     * @used-by BingAdsCampaignManagementService::UpdateConversionValueRules
     */
    final class UpdateConversionValueRulesRequest
    {
        /**
         * The conversion value rules to update.
         * @var ConversionValueRule[]
         */
        public $ConversionValueRules;

        /**
         * The locale identifier (LCID) for the request.
         * @var integer
         */
        public $Lcid;
    }
}
