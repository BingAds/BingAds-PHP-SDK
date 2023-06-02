<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Provides traffic estimates for keywords e.g., average CPC, average position, clicks, CTR, impressions, and total cost.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getkeywordtrafficestimates?view=bingads-13 GetKeywordTrafficEstimates Response Object
     * 
     * @uses CampaignEstimate
     * @used-by BingAdsAdInsightService::GetKeywordTrafficEstimates
     */
    final class GetKeywordTrafficEstimatesResponse
    {
        /**
         * The list of campaign estimates.
         * @var CampaignEstimate[]
         */
        public $CampaignEstimates;
    }
}
