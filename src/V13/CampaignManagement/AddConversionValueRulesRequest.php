<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addconversionvaluerules?view=bingads-13 AddConversionValueRules Request Object
     * 
     * @uses ConversionValueRule
     * @used-by BingAdsCampaignManagementService::AddConversionValueRules
     */
    final class AddConversionValueRulesRequest
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
