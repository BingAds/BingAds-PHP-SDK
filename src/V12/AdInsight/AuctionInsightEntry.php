<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Defines an auction insight entry.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/auctioninsightentry?view=bingads-12 AuctionInsightEntry Data Object
     * 
     * @uses AuctionInsightKpi
     * @used-by AuctionInsightResult
     */
    final class AuctionInsightEntry
    {
        /**
         * Reserved.
         * @var string
         */
        public $DisplayDomain;

        /**
         * Reserved.
         * @var AuctionInsightKpi
         */
        public $AggregatedKpi;

        /**
         * Reserved.
         * @var AuctionInsightKpi[]
         */
        public $SegmentedKpis;
    }

}
