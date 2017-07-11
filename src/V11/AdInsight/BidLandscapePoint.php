<?php
// Generated on 7/10/2017 3:08:16 PM

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
