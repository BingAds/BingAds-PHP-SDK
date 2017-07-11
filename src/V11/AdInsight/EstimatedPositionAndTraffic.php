<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains the estimated search results position and estimated keyword statistics such as clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost for the specified keyword given the specified bid.
     * @link http://msdn.microsoft.com/en-us/library/mt219324(v=msads.110).aspx EstimatedPositionAndTraffic Data Object
     * 
     * @uses MatchType
     * @uses Currency
     * @used-by KeywordEstimatedPosition
     */
    final class EstimatedPositionAndTraffic
    {
        public $MatchType;
        public $MinClicksPerWeek;
        public $MaxClicksPerWeek;
        public $AverageCPC;
        public $MinImpressionsPerWeek;
        public $MaxImpressionsPerWeek;
        public $CTR;
        public $MinTotalCostPerWeek;
        public $MaxTotalCostPerWeek;
        public $Currency;
        public $EstimatedAdPosition;
    }

}
