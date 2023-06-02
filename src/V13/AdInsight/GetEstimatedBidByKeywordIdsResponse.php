<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the estimated bid value of one or more keywords - specified by keyword identifier - that could have resulted in an ad appearing in the targeted position in the search results in the last  7 days.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getestimatedbidbykeywordids?view=bingads-13 GetEstimatedBidByKeywordIds Response Object
     * 
     * @uses KeywordIdEstimatedBid
     * @used-by BingAdsAdInsightService::GetEstimatedBidByKeywordIds
     */
    final class GetEstimatedBidByKeywordIdsResponse
    {
        /**
         * An array of KeywordIdEstimatedBid data objects.
         * @var KeywordIdEstimatedBid[]
         */
        public $KeywordEstimatedBids;
    }
}
