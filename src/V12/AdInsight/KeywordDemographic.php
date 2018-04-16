<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Defines an object that contains the device, age and gender of the user who entered the search query, if known.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/keyworddemographic?view=bingads-12 KeywordDemographic Data Object
     * 
     * @used-by KeywordDemographicResult
     */
    final class KeywordDemographic
    {
        /**
         * The device of the user who entered the search query.
         * @var string
         */
        public $Device;

        /**
         * Reserved.
         * @var double
         */
        public $EighteenToTwentyFour;

        /**
         * Reserved.
         * @var double
         */
        public $TwentyFiveToThirtyFour;

        /**
         * Reserved.
         * @var double
         */
        public $ThirtyFiveToFourtyNine;

        /**
         * Reserved.
         * @var double
         */
        public $FiftyToSixtyFour;

        /**
         * Reserved.
         * @var double
         */
        public $SixtyFiveAndAbove;

        /**
         * Not used.
         * @var double
         */
        public $AgeUnknown;

        /**
         * The percentage of time that female users searched for the keyword.
         * @var double
         */
        public $Female;

        /**
         * The percentage of time that male users searched for the keyword.
         * @var double
         */
        public $Male;

        /**
         * Not Used.
         * @var double
         */
        public $GenderUnknown;
    }

}
