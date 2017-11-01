<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains the keyword and the estimated bid value for each match type.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/keywordestimatedbid?view=bingads-11 KeywordEstimatedBid Data Object
     * 
     * @uses EstimatedBidAndTraffic
     * @used-by KeywordIdEstimatedBid
     * @used-by GetEstimatedBidByKeywordsResponse
     */
    final class KeywordEstimatedBid
    {
        /**
         * The keyword to which the estimates apply.
         * @var string
         */
        public $Keyword;

        /**
         * A list of EstimatedBidAndTraffic data objects that contains the suggested bid value for the keyword and match type.
         * @var EstimatedBidAndTraffic[]
         */
        public $EstimatedBids;
    }

}
