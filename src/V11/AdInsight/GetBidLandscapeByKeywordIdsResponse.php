<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Given a list of existing keywords, this operation returns for each a list of suggested bids and estimated performance statistics from 1 to  7 days.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/getbidlandscapebykeywordids?view=bingads-11 GetBidLandscapeByKeywordIds Response Object
     * 
     * @uses KeywordBidLandscape
     * @used-by BingAdsAdInsightService::GetBidLandscapeByKeywordIds
     */
    final class GetBidLandscapeByKeywordIdsResponse
    {
        /**
         * An array of KeywordBidLandscape objects.
         * @var KeywordBidLandscape[]
         */
        public $BidLandscape;
    }
}
