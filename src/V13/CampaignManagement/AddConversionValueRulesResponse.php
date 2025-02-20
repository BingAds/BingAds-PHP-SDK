<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addconversionvaluerules?view=bingads-13 AddConversionValueRules Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddConversionValueRules
     */
    final class AddConversionValueRulesResponse
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $ConversionValueRuleIds;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
