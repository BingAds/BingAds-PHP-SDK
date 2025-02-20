<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a rule expression that depends on the operand, operator, and value.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/numberruleitem?view=bingads-13 NumberRuleItem Data Object
     * 
     * @uses NumberOperator
     */
    final class NumberRuleItem extends RuleItem
    {
        /**
         * The rule operand or key on the left hand side of the operator.
         * @var string
         */
        public $Operand;

        /**
         * The rule item operator.
         * @var NumberOperator
         */
        public $Operator;

        /**
         * The rule value on the right hand side of the operator.
         * @var string
         */
        public $Value;
    }

}
