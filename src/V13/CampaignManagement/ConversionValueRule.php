<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/conversionvaluerule?view=bingads-13 ConversionValueRule Data Object
     * 
     * @uses AudienceCondition
     * @uses DeviceCondition
     * @uses LocationCondition
     * @uses ConversionValueRuleOperator
     * @uses ConversionValueRuleStatus
     * @used-by AddConversionValueRulesRequest
     * @used-by GetConversionValueRulesByAccountIdResponse
     * @used-by GetConversionValueRulesByIdsResponse
     * @used-by UpdateConversionValueRulesRequest
     */
    final class ConversionValueRule
    {
        /**
         * Reserved.
         * @var AudienceCondition
         */
        public $AudienceCondition;

        /**
         * Reserved.
         * @var string
         */
        public $CurrencyCode;

        /**
         * Reserved.
         * @var DeviceCondition
         */
        public $DeviceCondition;

        /**
         * Reserved.
         * @var integer
         */
        public $Id;

        /**
         * Reserved.
         * @var LocationCondition
         */
        public $LocationCondition;

        /**
         * Reserved.
         * @var string
         */
        public $Name;

        /**
         * Reserved.
         * @var ConversionValueRuleOperator
         */
        public $Operation;

        /**
         * Reserved.
         * @var ConversionValueRuleStatus
         */
        public $Status;

        /**
         * Reserved.
         * @var float
         */
        public $Value;
    }

}
