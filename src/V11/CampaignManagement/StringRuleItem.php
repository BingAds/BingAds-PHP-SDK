<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a rule expression that depends on the string values of the Url or Referrer Url.
     * @link http://msdn.microsoft.com/en-us/library/mt772363(v=msads.110).aspx StringRuleItem Data Object
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
