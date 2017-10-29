<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
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
