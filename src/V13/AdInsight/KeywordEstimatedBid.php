<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains the keyword and the estimated bid value for each match type.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordestimatedbid?view=bingads-13 KeywordEstimatedBid Data Object
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
