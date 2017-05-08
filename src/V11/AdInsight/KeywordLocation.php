<?php
// Generated on 5/7/2017 5:48:15 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains the location, network, device, and the percentage of time that a user entered a search query.
     * @link http://msdn.microsoft.com/en-us/library/mt219301(v=msads.110).aspx KeywordLocation Data Object
     * 
     * @used-by KeywordLocationResult
     */
    final class KeywordLocation
    {
        /**
         * The device of the user who entered the search query.
         * @var string
         */
        public $Device;

        /**
         * The country, state, metropolitan area, or city where users entered the search query.
         * @var string
         */
        public $Location;

        /**
         * The percentage of time that users searched for the keyword from the location.
         * @var double
         */
        public $Percentage;
    }

}
