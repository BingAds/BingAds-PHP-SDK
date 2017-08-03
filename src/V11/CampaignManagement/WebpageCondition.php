<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a condition or criterion that helps determine whether you want to show dynamic search ads.
     * @link http://msdn.microsoft.com/en-us/library/mt772364(v=msads.110).aspx WebpageCondition Data Object
     * 
     * @uses WebpageConditionOperand
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
    }

}
