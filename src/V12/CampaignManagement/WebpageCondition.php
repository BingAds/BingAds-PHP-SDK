<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a condition or criterion that helps determine whether you want to show dynamic search ads.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/webpagecondition?view=bingads-12 WebpageCondition Data Object
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
