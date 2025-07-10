<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defintes a conversion value rule data object.
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
         * The audience condition associated with the conversion value rule.
         * @var AudienceCondition
         */
        public $AudienceCondition;

        /**
         * The currency code for the conversion value rule.
         * @var string
         */
        public $CurrencyCode;

        /**
         * The device condition associated with the conversion value rule.
         * @var DeviceCondition
         */
        public $DeviceCondition;

        /**
         * The unique identifier of the conversion value rule.
         * @var integer
         */
        public $Id;

        /**
         * The location condition associated with the conversion value rule.
         * @var LocationCondition
         */
        public $LocationCondition;

        /**
         * The name of the conversion value rule.
         * @var string
         */
        public $Name;

        /**
         * The operation type of the conversion value rule.
         * @var ConversionValueRuleOperator
         */
        public $Operation;

        /**
         * The status of the conversion value rule.
         * @var ConversionValueRuleStatus
         */
        public $Status;

        /**
         * The value of the conversion value rule.
         * @var float
         */
        public $Value;
    }

}
