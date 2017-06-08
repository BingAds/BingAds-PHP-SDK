<?php
// Generated on 6/7/2017 5:54:05 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Gets the estimated bid value of one or more keywords - specified by keyword identifier - that could have resulted in an ad appearing in the targeted position in the search results in the last 7 days.
     * @link http://msdn.microsoft.com/en-us/library/mt219291(v=msads.100).aspx GetEstimatedBidByKeywordIds Response Object
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
