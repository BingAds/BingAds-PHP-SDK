<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains the suggested budget with estimated clicks and impressions opportunities.
     * @link http://msdn.microsoft.com/en-us/library/mt219334(v=msads.110).aspx BudgetOpportunity Data Object
     * 
     * @uses BudgetPoint
     * @uses BudgetLimitType
     * @used-by GetBudgetOpportunitiesResponse
     */
    final class BudgetOpportunity extends Opportunity
    {
        public $BudgetPoints;
        public $BudgetType;
        public $CampaignId;
        public $CurrentBudget;
        public $IncreaseInClicks;
        public $IncreaseInImpressions;
        public $PercentageIncreaseInClicks;
        public $PercentageIncreaseInImpressions;
        public $RecommendedBudget;
    }

}
