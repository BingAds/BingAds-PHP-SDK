<?php
// Generated on 4/4/2017 5:50:25 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Defines an object that contains a list of estimated clicks, cost, and impressions from 1 to 7 days for the keyword identifier given the suggested bid.
     * @link http://msdn.microsoft.com/en-us/library/mt219347(v=msads.100).aspx KeywordBidLandscape Data Object
     * 
     * @uses DayMonthAndYear
     * @uses BidLandscapePoint
     * @used-by GetBidLandscapeByKeywordIdsResponse
     */
    final class KeywordBidLandscape
    {
        public $KeywordId;
        public $StartDate;
        public $EndDate;
        public $BidLandscapePoints;
    }

}
