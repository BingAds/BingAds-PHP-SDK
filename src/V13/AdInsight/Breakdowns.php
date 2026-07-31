<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object for the audience breakdown categories.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/breakdowns?view=bingads-13 Breakdowns Data Object
     * 
     * @uses Breakdown
     * @uses LocationBreakdown
     * @used-by GetAudienceBreakdownResponse
     */
    final class Breakdowns
    {
        /**
         * The audience breakdown category is Age.
         * @var Breakdown
         */
        public $Age;

        /**
         * The audience breakdown category is Device.
         * @var Breakdown
         */
        public $Device;

        /**
         * The audience breakdown category is Gender.
         * @var Breakdown
         */
        public $Gender;

        /**
         * The audience breakdown category is InMarket.
         * @var Breakdown
         */
        public $InMarket;

        /**
         * The audience breakdown category is Industry.
         * @var Breakdown
         */
        public $Industry;

        /**
         * The audience breakdown category is JobFunction.
         * @var Breakdown
         */
        public $JobFunction;

        /**
         * The audience breakdown category is LocationCountry.
         * @var LocationBreakdown
         */
        public $LocationCountry;

        /**
         * The audience breakdown category is Location.
         * @var LocationBreakdown
         */
        public $Location;

        /**
         * The audience breakdown category is LocationSubGeography.
         * @var LocationBreakdown
         */
        public $LocationSubGeography;

        /**
         * The audience breakdown category is LocationMetroArea.
         * @var LocationBreakdown
         */
        public $LocationMetroArea;

        /**
         * The audience breakdown category is LocationCity.
         * @var LocationBreakdown
         */
        public $LocationCity;

        /**
         * The audience breakdown category is LocationPostalCode.
         * @var LocationBreakdown
         */
        public $LocationPostalCode;

        /**
         * The audience breakdown category is LocationCounty.
         * @var LocationBreakdown
         */
        public $LocationCounty;
    }

}
