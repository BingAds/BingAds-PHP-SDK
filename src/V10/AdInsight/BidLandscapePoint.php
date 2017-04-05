<?php
// Generated on 4/4/2017 5:50:25 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Defines an object that contains estimates of clicks, cost, and impressions given the suggested bid.
     * @link http://msdn.microsoft.com/en-us/library/mt219314(v=msads.100).aspx BidLandscapePoint Data Object
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
