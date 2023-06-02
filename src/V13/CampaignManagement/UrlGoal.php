<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a URL conversion goal.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/urlgoal?view=bingads-13 UrlGoal Data Object
     * 
     * @uses ExpressionOperator
     */
    final class UrlGoal extends ConversionGoal
    {
        /**
         * The expression used to determine the page or pages the user has to visit in order to count as a conversion.
         * @var string
         */
        public $UrlExpression;

        /**
         * The operator that can be applied to the value of the Url element.
         * @var ExpressionOperator
         */
        public $UrlOperator;
    }

}
