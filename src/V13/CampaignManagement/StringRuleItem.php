<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a rule expression that depends on the string values of the Url or Referrer Url.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/stringruleitem?view=bingads-13 StringRuleItem Data Object
     * 
     * @uses StringOperator
     */
    final class StringRuleItem extends RuleItem
    {
        /**
         * The rule operand or key on the left hand side of the operator.
         * @var string
         */
        public $Operand;

        /**
         * The rule item operator.
         * @var StringOperator
         */
        public $Operator;

        /**
         * The rule value on the right hand side of the operator.
         * @var string
         */
        public $Value;
    }

}
