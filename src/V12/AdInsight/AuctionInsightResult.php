<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Defines an auction insight result.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/auctioninsightresult?view=bingads-12 AuctionInsightResult Data Object
     * 
     * @uses AuctionSegment
     * @uses AuctionInsightEntry
     * @used-by GetAuctionInsightDataResponse
     */
    final class AuctionInsightResult
    {
        /**
         * Reserved.
         * @var AuctionSegment
         */
        public $Segment;

        /**
         * Reserved.
         * @var AuctionInsightEntry[]
         */
        public $Entries;

        /**
         * Reserved.
         * @var double
         */
        public $UsedImpressions;

        /**
         * Reserved.
         * @var double
         */
        public $UsedKeywords;
    }

}
