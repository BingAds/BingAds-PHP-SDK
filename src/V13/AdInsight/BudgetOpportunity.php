<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains the suggested budget with estimated clicks and impressions opportunities.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/budgetopportunity?view=bingads-13 BudgetOpportunity Data Object
     * 
     * @uses BudgetPoint
     * @uses BudgetLimitType
     * @used-by GetBudgetOpportunitiesResponse
     */
    final class BudgetOpportunity extends Opportunity
    {
        /**
         * The list of budget points with weekly impressions, clicks and cost estimates for the given budget amount.
         * @var BudgetPoint[]
         */
        public $BudgetPoints;

        /**
         * The type of budget that the campaign uses.
         * @var BudgetLimitType
         */
        public $BudgetType;

        /**
         * The identifier of the campaign to which the suggested budget applies.
         * @var integer
         */
        public $CampaignId;

        /**
         * The campaign's current budget.
         * @var double
         */
        public $CurrentBudget;

        /**
         * The estimated clicks opportunities corresponding to the suggested budget.
         * @var double
         */
        public $IncreaseInClicks;

        /**
         * The estimated impressions opportunities corresponding to the suggested budget.
         * @var integer
         */
        public $IncreaseInImpressions;

        /**
         * The estimated percentage increase in clicks corresponding to the suggested budget.
         * @var integer
         */
        public $PercentageIncreaseInClicks;

        /**
         * The estimated percentage increase in impressions corresponding to the suggested budget.
         * @var integer
         */
        public $PercentageIncreaseInImpressions;

        /**
         * The suggested budget based on the last 15 days of performance history for the corresponding campaign.
         * @var double
         */
        public $RecommendedBudget;
    }

}
