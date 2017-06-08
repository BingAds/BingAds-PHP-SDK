<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains a budget amount and an estimate of weekly impressions, clicks, and cost for this budget amount.
     * @link http://msdn.microsoft.com/en-us/library/mt219337(v=msads.110).aspx BudgetPoint Data Object
     * 
     * @uses BudgetPointType
     * @used-by BudgetOpportunity
     */
    final class BudgetPoint
    {
        public $BudgetAmount;
        public $BudgetPointType;
        public $EstimatedWeeklyClicks;
        public $EstimatedWeeklyCost;
        public $EstimatedWeeklyImpressions;
    }

}
