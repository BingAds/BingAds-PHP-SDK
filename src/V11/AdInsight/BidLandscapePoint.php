<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains estimates of clicks, cost, and impressions given the suggested bid.
     * @link http://msdn.microsoft.com/en-us/library/mt219314(v=msads.110).aspx BidLandscapePoint Data Object
     * 
     * @uses Currency
     * @used-by AdGroupBidLandscape
     * @used-by KeywordBidLandscape
     */
    final class BidLandscapePoint
    {
        public $Bid;
        public $Clicks;
        public $Impressions;
        public $TopImpressions;
        public $Currency;
        public $Cost;
        public $MarginalCPC;
    }

}
