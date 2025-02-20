<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateconversionvaluerules?view=bingads-13 UpdateConversionValueRules Request Object
     * 
     * @uses ConversionValueRule
     * @used-by BingAdsCampaignManagementService::UpdateConversionValueRules
     */
    final class UpdateConversionValueRulesRequest
    {
        /**
         * Reserved.
         * @var ConversionValueRule[]
         */
        public $ConversionValueRules;

        /**
         * Reserved.
         * @var integer
         */
        public $Lcid;
    }
}
