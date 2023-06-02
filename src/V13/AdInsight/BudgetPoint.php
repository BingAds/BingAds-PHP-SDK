<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains a budget amount and an estimate of weekly impressions, clicks, and cost for this budget amount.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/budgetpoint?view=bingads-13 BudgetPoint Data Object
     * 
     * @uses BudgetPointType
     * @used-by BudgetOpportunity
     */
    final class BudgetPoint
    {
        /**
         * A potential new budget.
         * @var double
         */
        public $BudgetAmount;

        /**
         * The type of budget relative to a list of budget points.
         * @var BudgetPointType
         */
        public $BudgetPointType;

        /**
         * The estimated weekly  clicks for the given budget amount.
         * @var double
         */
        public $EstimatedWeeklyClicks;

        /**
         * The estimated weekly cost for the given budget amount.
         * @var double
         */
        public $EstimatedWeeklyCost;

        /**
         * The estimated weekly impressions for the given budget amount.
         * @var double
         */
        public $EstimatedWeeklyImpressions;
    }

}
