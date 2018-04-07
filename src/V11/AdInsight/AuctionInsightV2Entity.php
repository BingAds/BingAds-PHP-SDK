<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/auctioninsightv2entity?view=bingads-11 AuctionInsightV2Entity Data Object
     * 
     * @uses AuctionInsightKPINode
     * @used-by AuctionInsightResult
     */
    final class AuctionInsightV2Entity
    {
        /**
         * Reserved.
         * @var string
         */
        public $DisplayDomain;

        /**
         * Reserved.
         * @var AuctionInsightKPINode
         */
        public $AggregatedKPI;

        /**
         * Reserved.
         * @var AuctionInsightKPINode[]
         */
        public $KPIs;
    }

}
