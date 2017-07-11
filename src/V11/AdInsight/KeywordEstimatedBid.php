<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains the keyword and the estimated bid value for each match type.
     * @link http://msdn.microsoft.com/en-us/library/mt219290(v=msads.110).aspx KeywordEstimatedBid Data Object
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
