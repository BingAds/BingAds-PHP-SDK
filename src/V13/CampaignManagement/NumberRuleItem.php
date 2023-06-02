<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Represents a number rule item.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/numberruleitem?view=bingads-13 NumberRuleItem Data Object
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
