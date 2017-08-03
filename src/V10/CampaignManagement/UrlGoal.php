<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a URL conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759549(v=msads.100).aspx UrlGoal Data Object
     * 
     * @uses ExpressionOperator
     */
    final class UrlGoal extends ConversionGoal
    {
        public $UrlExpression;
        public $UrlOperator;
    }

}
