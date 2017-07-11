<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines a key performance index object for a keyword.
     * @link http://msdn.microsoft.com/en-us/library/mt219293(v=msads.110).aspx KeywordKPI Data Object
     * 
     * @uses MatchType
     * @uses AdPosition
     * @used-by KeywordHistoricalPerformance
     */
    final class KeywordKPI
    {
        /**
         * The device where the ad appeared.
         * @var string
         */
        public $Device;

        /**
         * The match type that you specified in the request.
         * @var MatchType
         */
        public $MatchType;

        /**
         * The position in the search results in which the ad appeared.
         * @var AdPosition
         */
        public $AdPosition;

        /**
         * The number of clicks that the keyword and match type generated during the specified time interval.
         * @var integer
         */
        public $Clicks;

        /**
         * The number of impressions that the keyword and match type generated during the specified time interval.
         * @var integer
         */
        public $Impressions;

        /**
         * The average cost per click (CPC).
         * @var double
         */
        public $AverageCPC;

        /**
         * The click-through rate (CTR) as a percentage.
         * @var double
         */
        public $CTR;

        /**
         * The cost of using the specified keyword and match type during the specified time interval.
         * @var double
         */
        public $TotalCost;

        /**
         * The average bid of the keyword.
         * @var double
         */
        public $AverageBid;
    }

}
