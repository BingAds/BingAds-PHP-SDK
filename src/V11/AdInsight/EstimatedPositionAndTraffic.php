<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains the estimated search results position and estimated keyword statistics such as clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost for the specified keyword given the specified bid.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/estimatedpositionandtraffic?version=11 EstimatedPositionAndTraffic Data Object
     * 
     * @uses MatchType
     * @uses Currency
     * @used-by KeywordEstimatedPosition
     */
    final class EstimatedPositionAndTraffic
    {
        /**
         * The keyword match type used to determine the estimates.
         * @var MatchType
         */
        public $MatchType;

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
         * The monetary unit of the cost values, such as AverageCPC.
         * @var Currency
         */
        public $Currency;

        /**
         * The position in the search results given the specified bid.
         * @var double
         */
        public $EstimatedAdPosition;
    }

}
