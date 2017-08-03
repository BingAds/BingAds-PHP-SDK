<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the campaign budget opportunities of the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/mt219289(v=msads.110).aspx GetBudgetOpportunities Request Object
     * 
     * @used-by BingAdsAdInsightService::GetBudgetOpportunities
     */
    final class GetBudgetOpportunitiesRequest
    {
        /**
         * The identifier of the campaign for which you want to discover possible campaign budget opportunities.
         * @var integer
         */
        public $CampaignId;
    }
}
