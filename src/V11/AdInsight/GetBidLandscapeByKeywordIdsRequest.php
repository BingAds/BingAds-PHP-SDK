<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Given a list of existing keywords, this operation returns for each a list of suggested bids and estimated performance statistics from 1 to  7 days.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/getbidlandscapebykeywordids?view=bingads-11 GetBidLandscapeByKeywordIds Request Object
     * 
     * @used-by BingAdsAdInsightService::GetBidLandscapeByKeywordIds
     */
    final class GetBidLandscapeByKeywordIdsRequest
    {
        /**
         * An array of identifiers of the keywords for which you want to get the list of suggested bid values with estimated performance statistics.
         * @var integer[]
         */
        public $KeywordIds;

        /**
         * When set to false, the suggested bid values might not include the keyword's current bid.
         * @var boolean
         */
        public $IncludeCurrentBid;
    }
}
