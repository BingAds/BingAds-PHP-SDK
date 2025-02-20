<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the CampaignBudgetRecommendation data object.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/campaignbudgetrecommendation?view=bingads-13 CampaignBudgetRecommendation Data Object
     * 
     * @uses BudgetPoint
     * @uses BudgetLimitType
     */
    final class CampaignBudgetRecommendation extends RecommendationBase
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
         * The current budget amount.
         * @var double
         */
        public $CurrentBudget;

        /**
         * The recommended budget amount based on the last 15 days of performance history for the corresponding campaign.
         * @var double
         */
        public $RecommendedBudget;
    }

}
