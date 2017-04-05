<?php
// Generated on 4/4/2017 5:50:25 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Defines an object that contains the suggested budget with estimated clicks and impressions opportunities.
     * @link http://msdn.microsoft.com/en-us/library/mt219334(v=msads.100).aspx BudgetOpportunity Data Object
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
