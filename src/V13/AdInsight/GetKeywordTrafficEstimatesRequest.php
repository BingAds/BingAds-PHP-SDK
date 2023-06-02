<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Provides traffic estimates for keywords e.g., average CPC, average position, clicks, CTR, impressions, and total cost.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getkeywordtrafficestimates?view=bingads-13 GetKeywordTrafficEstimates Request Object
     * 
     * @uses CampaignEstimator
     * @used-by BingAdsAdInsightService::GetKeywordTrafficEstimates
     */
    final class GetKeywordTrafficEstimatesRequest
    {
        /**
         * Defines your campaign, ad group, and keyword level criteria and filters for the requested keyword traffic estimates.
         * @var CampaignEstimator[]
         */
        public $CampaignEstimators;
    }
}
