<?php
// Generated on 7/10/2017 3:08:23 PM

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
