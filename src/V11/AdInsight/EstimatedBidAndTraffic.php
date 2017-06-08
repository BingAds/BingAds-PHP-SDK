<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains estimates of clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost for the corresponding keyword or ad group given the suggested bid.
     * @link http://msdn.microsoft.com/en-us/library/mt219348(v=msads.110).aspx EstimatedBidAndTraffic Data Object
     * 
     * @uses Currency
     * @uses MatchType
     * @used-by KeywordEstimatedBid
     * @used-by GetEstimatedBidByKeywordsResponse
     */
    final class EstimatedBidAndTraffic
    {
        public $MinClicksPerWeek;
        public $MaxClicksPerWeek;
        public $AverageCPC;
        public $MinImpressionsPerWeek;
        public $MaxImpressionsPerWeek;
        public $CTR;
        public $MinTotalCostPerWeek;
        public $MaxTotalCostPerWeek;
        public $Currency;
        public $MatchType;
        public $EstimatedMinBid;
    }

}
