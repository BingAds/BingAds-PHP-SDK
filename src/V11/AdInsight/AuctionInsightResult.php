<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
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
