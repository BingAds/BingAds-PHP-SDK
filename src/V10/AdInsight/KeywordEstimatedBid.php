<?php

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Defines an object that contains the keyword and the estimated bid value for each match type.
     * @link http://msdn.microsoft.com/en-us/library/mt219290(v=msads.100).aspx KeywordEstimatedBid Data Object
     * 
     * @uses EstimatedBidAndTraffic
     * @used-by KeywordIdEstimatedBid
     * @used-by GetEstimatedBidByKeywordsResponse
     */
    final class KeywordEstimatedBid
    {
        public $Keyword;
        public $EstimatedBids;
    }

}
