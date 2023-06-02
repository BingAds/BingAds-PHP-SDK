<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the estimated bid value of one or more keywords that could result in an ad appearing in the targeted position in the search results.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getestimatedbidbykeywords?view=bingads-13 GetEstimatedBidByKeywords Response Object
     * 
     * @uses KeywordEstimatedBid
     * @uses EstimatedBidAndTraffic
     * @used-by BingAdsAdInsightService::GetEstimatedBidByKeywords
     */
    final class GetEstimatedBidByKeywordsResponse
    {
        /**
         * An array of KeywordEstimatedBid data objects.
         * @var KeywordEstimatedBid[]
         */
        public $KeywordEstimatedBids;

        /**
         * Contains estimates of clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost for the specified ad group if you would use the suggested bid.
         * @var EstimatedBidAndTraffic
         */
        public $AdGroupEstimatedBid;
    }
}
