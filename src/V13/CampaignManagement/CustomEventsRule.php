<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a custom events remarketing rule.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/customeventsrule?view=bingads-13 CustomEventsRule Data Object
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
