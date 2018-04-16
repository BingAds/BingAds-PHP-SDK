<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Defines an auction insight key performance indicator.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/auctioninsightkpi?view=bingads-12 AuctionInsightKpi Data Object
     * 
     * @used-by AuctionInsightEntry
     */
    final class AuctionInsightKpi
    {
        /**
         * Reserved.
         * @var string
         */
        public $Segment;

        /**
         * Reserved.
         * @var double
         */
        public $ImpressionShare;

        /**
         * Reserved.
         * @var double
         */
        public $OverlapRate;

        /**
         * Reserved.
         * @var double
         */
        public $AveragePosition;

        /**
         * Reserved.
         * @var double
         */
        public $AboveRate;

        /**
         * Reserved.
         * @var double
         */
        public $TopOfPageRate;

        /**
         * Reserved.
         * @var double
         */
        public $OutrankingShare;
    }

}
