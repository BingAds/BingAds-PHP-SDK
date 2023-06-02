<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an auction insight entry for a domain.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/auctioninsightentry?view=bingads-13 AuctionInsightEntry Data Object
     * 
     * @uses AuctionInsightKpi
     * @used-by AuctionInsightResult
     */
    final class AuctionInsightEntry
    {
        /**
         * The display URL of another advertiser who participates in the same auctions as you.
         * @var string
         */
        public $DisplayDomain;

        /**
         * The auction insight key performance indicators across all segments for the display domain.
         * @var AuctionInsightKpi
         */
        public $AggregatedKpi;

        /**
         * The list of auction insight key performance indicators for each unique combination of the requested segments.
         * @var AuctionInsightKpi[]
         */
        public $SegmentedKpis;
    }

}
