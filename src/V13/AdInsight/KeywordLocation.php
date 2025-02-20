<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains the location, network, device, and the percentage of time that a user entered a search query.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordlocation?view=bingads-13 KeywordLocation Data Object
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
         * The country/region, state, metropolitan area, or city where users entered the search query.
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
