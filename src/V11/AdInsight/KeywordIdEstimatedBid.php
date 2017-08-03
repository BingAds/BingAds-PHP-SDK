<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains the identifier of the keyword and the suggested bid value for the keyword and match type.
     * @link http://msdn.microsoft.com/en-us/library/mt219295(v=msads.110).aspx KeywordIdEstimatedBid Data Object
     * 
     * @uses KeywordEstimatedBid
     * @used-by GetEstimatedBidByKeywordIdsResponse
     */
    final class KeywordIdEstimatedBid
    {
        public $KeywordId;
        public $KeywordEstimatedBid;
    }

}
