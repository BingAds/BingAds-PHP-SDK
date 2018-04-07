<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/auctioninsightkpinode?view=bingads-11 AuctionInsightKPINode Data Object
     * 
     * @used-by AuctionInsightV2Entity
     */
    final class AuctionInsightKPINode
    {
        /**
         * Reserved.
         * @var string[]
         */
        public $DimensionNames;

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
    }

}
