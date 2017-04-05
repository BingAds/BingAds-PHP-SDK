<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a custom event conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759550(v=msads.100).aspx EventGoal Data Object
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
