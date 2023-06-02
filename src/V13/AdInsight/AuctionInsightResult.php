<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the auction insight results from calling the GetAuctionInsightData operation.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/auctioninsightresult?view=bingads-13 AuctionInsightResult Data Object
     * 
     * @uses AuctionSegment
     * @uses AuctionInsightEntry
     * @used-by GetAuctionInsightDataResponse
     */
    final class AuctionInsightResult
    {
        /**
         * The segments if any were specified via one or more AuctionSegmentSearchParameter in the GetAuctionInsightData request.
         * @var AuctionSegment[]
         */
        public $Segments;

        /**
         * One or more auction insight entries i.e., one result per domain that you competed with in the auction.
         * @var AuctionInsightEntry[]
         */
        public $Entries;

        /**
         * The percent of impressions that were used to generate the auction insight entries.
         * @var double
         */
        public $UsedImpressions;

        /**
         * The number of keywords that were used to generate the auction insight entries.
         * @var double
         */
        public $UsedKeywords;
    }

}
