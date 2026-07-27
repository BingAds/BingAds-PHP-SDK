<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object for a specific audience breakdown category.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/breakdown?view=bingads-13 Breakdown Data Object
     * 
     * @used-by Breakdowns
     */
    class Breakdown
    {
        /**
         * The audience breakdown keys.
         * @var string[]
         */
        public $Keys;

        /**
         * The audience breakdown values.
         * @var integer[]
         */
        public $Values;

        /**
         * The audiance breakdown global values.
         * @var integer[]
         */
        public $GlobalValues;
    }

}
