<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Create new conversion value rules.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addconversionvaluerules?view=bingads-13 AddConversionValueRules Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddConversionValueRules
     */
    final class AddConversionValueRulesResponse
    {
        /**
         * The IDs of the conversion value rules that were successfully created.
         * @var integer[]
         */
        public $ConversionValueRuleIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
