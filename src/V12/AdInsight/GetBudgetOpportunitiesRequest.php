<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Gets the campaign budget opportunities of the specified campaign.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/getbudgetopportunities?view=bingads-12 GetBudgetOpportunities Request Object
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
