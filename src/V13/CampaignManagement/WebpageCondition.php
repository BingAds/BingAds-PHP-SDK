<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a condition or criterion that helps determine whether you want to show dynamic search ads.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/webpagecondition?view=bingads-13 WebpageCondition Data Object
     * 
     * @uses WebpageConditionOperand
     * @uses WebpageConditionOperator
     * @used-by WebpageParameter
     */
    final class WebpageCondition
    {
        /**
         * The webpage condition or criterion.
         * @var string
         */
        public $Argument;

        /**
         * The webpage condition operand.
         * @var WebpageConditionOperand
         */
        public $Operand;

        /**
         * The webpage condition operator.
         * @var WebpageConditionOperator
         */
        public $Operator;
    }

}
