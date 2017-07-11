<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a custom events remarketing rule.
     * @link http://msdn.microsoft.com/en-us/library/mt772354(v=msads.110).aspx CustomEventsRule Data Object
     * 
     * @uses StringOperator
     * @uses NumberOperator
     */
    final class CustomEventsRule extends RemarketingRule
    {
        /**
         * The type of user interaction you want to track.
         * @var string
         */
        public $Action;

        /**
         * The operator that can be applied to the value of the Action element.
         * @var StringOperator
         */
        public $ActionOperator;

        /**
         * The category of event you want to track.
         * @var string
         */
        public $Category;

        /**
         * The operator that can be applied to the value of the Category element.
         * @var StringOperator
         */
        public $CategoryOperator;

        /**
         * The name of the element that caused the action.
         * @var string
         */
        public $Label;

        /**
         * The operator that can be applied to the value of the Label element.
         * @var StringOperator
         */
        public $LabelOperator;

        /**
         * A positive integer value associated with that event.
         * @var float
         */
        public $Value;

        /**
         * The operator that can be applied to the value of the Value element.
         * @var NumberOperator
         */
        public $ValueOperator;
    }

}
