<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/auctioninsightresult?view=bingads-11 AuctionInsightResult Data Object
     * 
     * @uses AuctionInsightV2Entity
     * @used-by GetAuctionInsightDataResponse
     */
    final class AuctionInsightResult
    {
        /**
         * Reserved.
         * @var integer
         */
        public $TotalNumEntries;

        /**
         * Reserved.
         * @var AuctionInsightV2Entity[]
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
