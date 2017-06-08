<?php
// Generated on 6/7/2017 5:55:37 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a custom event conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759550(v=msads.110).aspx EventGoal Data Object
     * 
     * @uses ExpressionOperator
     * @uses ValueOperator
     */
    final class EventGoal extends ConversionGoal
    {
        public $ActionExpression;
        public $ActionOperator;
        public $CategoryExpression;
        public $CategoryOperator;
        public $LabelExpression;
        public $LabelOperator;
        public $Value;
        public $ValueOperator;
    }

}
