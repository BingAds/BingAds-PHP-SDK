<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a custom event conversion goal.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/eventgoal?view=bingads-13 EventGoal Data Object
     * 
     * @uses ExpressionOperator
     * @uses ValueOperator
     */
    final class EventGoal extends ConversionGoal
    {
        /**
         * The type of user interaction you want to track.
         * @var string
         */
        public $ActionExpression;

        /**
         * The operator that can be applied to the value of the ActionExpression element.
         * @var ExpressionOperator
         */
        public $ActionOperator;

        /**
         * The category of event you want to track.
         * @var string
         */
        public $CategoryExpression;

        /**
         * The operator that can be applied to the value of the CategoryExpression element.
         * @var ExpressionOperator
         */
        public $CategoryOperator;

        /**
         * The name of the element that caused the action.
         * @var string
         */
        public $LabelExpression;

        /**
         * The operator that can be applied to the value of the LabelExpression element.
         * @var ExpressionOperator
         */
        public $LabelOperator;

        /**
         * A numerical value associated with that event.
         * @var float
         */
        public $Value;

        /**
         * The operator that can be applied to the value of the Value element.
         * @var ValueOperator
         */
        public $ValueOperator;
    }

}
