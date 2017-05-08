<?php
// Generated on 5/7/2017 5:48:15 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains the device, age and gender of the user who entered the search query, if known.
     * @link http://msdn.microsoft.com/en-us/library/mt219283(v=msads.110).aspx KeywordDemographic Data Object
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
        public $Age18_24;

        /**
         * The percentage of time that users 25 through 34 years of age searched for the keyword.
         * @var double
         */
        public $Age25_34;

        /**
         * The percentage of time that users 35 through 49 years of age searched for the keyword.
         * @var double
         */
        public $Age35_49;

        /**
         * The percentage of time that users 50 through 64 years of age searched for the keyword.
         * @var double
         */
        public $Age50_64;

        /**
         * The percentage of time that users 65 years of age or older searched for the keyword.
         * @var double
         */
        public $Age65Plus;

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
