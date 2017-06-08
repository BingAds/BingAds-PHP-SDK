<?php
// Generated on 6/7/2017 5:55:37 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Represents a budget that can be shared by any campaigns in an account.
     * @link http://msdn.microsoft.com/en-us/library/mt750548(v=msads.110).aspx Budget Data Object
     * 
     * @uses BudgetLimitType
     * @used-by AddBudgetsRequest
     * @used-by GetBudgetsByIdsResponse
     * @used-by UpdateBudgetsRequest
     */
    final class Budget
    {
        /**
         * The amount to spend daily across all campaigns that share the budget.
         * @var float
         */
        public $Amount;

        /**
         * The number of Campaign objects that currently share this budget.
         * @var integer
         */
        public $AssociationCount;

        /**
         * The budget type determines the pace at which the budget is spent throughout the day.
         * @var BudgetLimitType
         */
        public $BudgetType;

        /**
         * The unique Bing Ads identifier of the budget.
         * @var integer
         */
        public $Id;

        /**
         * The name of the budget.
         * @var string
         */
        public $Name;
    }

}
