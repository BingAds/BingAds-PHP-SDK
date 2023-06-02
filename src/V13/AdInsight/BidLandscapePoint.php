<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains estimates of clicks, cost, and impressions  given the suggested bid.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/bidlandscapepoint?view=bingads-13 BidLandscapePoint Data Object
     * 
     * @uses CurrencyCode
     * @used-by AdGroupBidLandscape
     * @used-by KeywordBidLandscape
     */
    final class BidLandscapePoint
    {
        /**
         * The suggested bid value.
         * @var double
         */
        public $Bid;

        /**
         * The estimated number of clicks.
         * @var double
         */
        public $Clicks;

        /**
         * The estimated number of impressions.
         * @var integer
         */
        public $Impressions;

        /**
         * The estimated number of impressions in the top or mainline ad results.
         * @var integer
         */
        public $TopImpressions;

        /**
         * The ISO code for the monetary unit of the suggested bid value and estimated performance statistics.
         * @var CurrencyCode
         */
        public $CurrencyCode;

        /**
         * The estimated cost.
         * @var double
         */
        public $Cost;

        /**
         * Reserved for future use.
         * @var double
         */
        public $MarginalCPC;
    }

}
