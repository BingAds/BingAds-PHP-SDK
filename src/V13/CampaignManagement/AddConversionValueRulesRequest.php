<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Create new conversion value rules.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addconversionvaluerules?view=bingads-13 AddConversionValueRules Request Object
     * 
     * @uses ConversionValueRule
     * @used-by BingAdsCampaignManagementService::AddConversionValueRules
     */
    final class AddConversionValueRulesRequest
    {
        /**
         * The conversion value rules to be created.
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
