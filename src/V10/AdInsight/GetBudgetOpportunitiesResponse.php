<?php
// Generated on 4/4/2017 5:50:25 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Gets the campaign budget opportunities of the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/mt219289(v=msads.100).aspx GetBudgetOpportunities Response Object
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
