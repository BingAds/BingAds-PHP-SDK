<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the campaign budget opportunities of the specified campaign.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/getbudgetopportunities?version=11 GetBudgetOpportunities Request Object
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
