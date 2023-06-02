<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains estimates of clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost for the corresponding keyword or ad group given the suggested bid.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/estimatedbidandtraffic?view=bingads-13 EstimatedBidAndTraffic Data Object
     * 
     * @uses CurrencyCode
     * @uses MatchType
     * @used-by KeywordEstimatedBid
     * @used-by GetEstimatedBidByKeywordsResponse
     */
    final class EstimatedBidAndTraffic
    {
        /**
         * The estimated minimum number of clicks per week.
         * @var double
         */
        public $MinClicksPerWeek;

        /**
         * The estimated maximum number of clicks per week.
         * @var double
         */
        public $MaxClicksPerWeek;

        /**
         * The estimated average CPC.
         * @var double
         */
        public $AverageCPC;

        /**
         * The estimated minimum number of impressions per week.
         * @var integer
         */
        public $MinImpressionsPerWeek;

        /**
         * The estimated maximum number of impressions per week.
         * @var integer
         */
        public $MaxImpressionsPerWeek;

        /**
         * The estimated CTR.
         * @var double
         */
        public $CTR;

        /**
         * The estimated minimum cost per week.
         * @var double
         */
        public $MinTotalCostPerWeek;

        /**
         * The estimated maximum cost per week.
         * @var double
         */
        public $MaxTotalCostPerWeek;

        /**
         * The ISO code for the monetary unit of the cost estimates and suggested bid value.
         * @var CurrencyCode
         */
        public $CurrencyCode;

        /**
         * The match type used to determine the estimates.
         * @var MatchType
         */
        public $MatchType;

        /**
         * The suggested bid value.
         * @var double
         */
        public $EstimatedMinBid;
    }

}
