<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the campaign budget opportunities of the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/mt219289(v=msads.110).aspx GetBudgetOpportunities Response Object
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
