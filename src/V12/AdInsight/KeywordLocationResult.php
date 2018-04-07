<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Defines an object that contains the locations where users were located when they searched for the specified keyword.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/keywordlocationresult?view=bingads-12 KeywordLocationResult Data Object
     * 
     * @uses KeywordLocation
     * @used-by GetKeywordLocationsResponse
     */
    final class KeywordLocationResult
    {
        /**
         * The keyword.
         * @var string
         */
        public $Keyword;

        /**
         * An array of KeywordLocation objects that contains the geographical locations and the percentage of times that users searched for the keyword from that location.
         * @var KeywordLocation[]
         */
        public $KeywordLocations;
    }

}
