<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/numberruleitem?view=bingads-13 NumberRuleItem Data Object
     * 
     * @uses NumberOperator
     */
    final class NumberRuleItem extends RuleItem
    {
        /**
         * Reserved.
         * @var string
         */
        public $Operand;

        /**
         * Reserved.
         * @var NumberOperator
         */
        public $Operator;

        /**
         * Reserved.
         * @var string
         */
        public $Value;
    }

}
