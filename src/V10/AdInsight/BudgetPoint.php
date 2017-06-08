<?php
// Generated on 6/7/2017 5:54:05 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Defines an object that contains a budget amount and an estimate of weekly impressions, clicks, and cost for this budget amount.
     * @link http://msdn.microsoft.com/en-us/library/mt219337(v=msads.100).aspx BudgetPoint Data Object
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
