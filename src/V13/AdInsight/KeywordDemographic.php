<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains the device, age and gender of the user who entered the search query, if known.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keyworddemographic?view=bingads-13 KeywordDemographic Data Object
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
         * The percentage of time that users 18 through 24 years of age searched for the keyword.
         * @var double
         */
        public $EighteenToTwentyFour;

        /**
         * The percentage of time that users 25 through 34 years of age searched for the keyword.
         * @var double
         */
        public $TwentyFiveToThirtyFour;

        /**
         * The percentage of time that users 35 through 49 years of age searched for the keyword.
         * @var double
         */
        public $ThirtyFiveToFourtyNine;

        /**
         * The percentage of time that users 50 through 64 years of age searched for the keyword.
         * @var double
         */
        public $FiftyToSixtyFour;

        /**
         * The percentage of time that users 65 years of age or older searched for the keyword.
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
