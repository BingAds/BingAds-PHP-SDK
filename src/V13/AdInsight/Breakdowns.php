<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/breakdowns?view=bingads-13 Breakdowns Data Object
     * 
     * @uses Breakdown
     * @uses LocationBreakdown
     * @used-by GetAudienceBreakdownResponse
     */
    final class Breakdowns
    {
        /**
         * Reserved.
         * @var Breakdown
         */
        public $Age;

        /**
         * Reserved.
         * @var Breakdown
         */
        public $Device;

        /**
         * Reserved.
         * @var Breakdown
         */
        public $Gender;

        /**
         * Reserved.
         * @var Breakdown
         */
        public $InMarket;

        /**
         * Reserved.
         * @var Breakdown
         */
        public $Industry;

        /**
         * Reserved.
         * @var Breakdown
         */
        public $JobFunction;

        /**
         * Reserved.
         * @var LocationBreakdown
         */
        public $LocationCountry;

        /**
         * Reserved.
         * @var LocationBreakdown
         */
        public $Location;

        /**
         * Reserved.
         * @var LocationBreakdown
         */
        public $LocationSubGeography;

        /**
         * Reserved.
         * @var LocationBreakdown
         */
        public $LocationMetroArea;

        /**
         * Reserved.
         * @var LocationBreakdown
         */
        public $LocationCity;

        /**
         * Reserved.
         * @var LocationBreakdown
         */
        public $LocationPostalCode;

        /**
         * Reserved.
         * @var LocationBreakdown
         */
        public $LocationCounty;
    }

}
