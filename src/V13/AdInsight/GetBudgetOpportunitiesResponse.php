<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the campaign budget opportunities of the specified campaign.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getbudgetopportunities?view=bingads-13 GetBudgetOpportunities Response Object
     * 
     * @uses BudgetOpportunity
     * @used-by BingAdsAdInsightService::GetBudgetOpportunities
     */
    final class GetBudgetOpportunitiesResponse
    {
        /**
         * An array of BudgetOpportunity data objects that identify the campaigns whose clicks and impressions may increase if you were to apply the suggested budget.
         * @var BudgetOpportunity[]
         */
        public $Opportunities;
    }
}
