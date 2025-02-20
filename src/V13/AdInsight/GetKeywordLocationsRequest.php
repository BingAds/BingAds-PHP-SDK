<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the geographical locations of users who have searched for the specified keywords.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getkeywordlocations?view=bingads-13 GetKeywordLocations Request Object
     * 
     * @used-by BingAdsAdInsightService::GetKeywordLocations
     */
    final class GetKeywordLocationsRequest
    {
        /**
         * An array of keywords for which you want to get geographical location information.
         * @var string[]
         */
        public $Keywords;

        /**
         * The language in which the keywords are written.
         * @var string
         */
        public $Language;

        /**
         * The country code of the country/region to use as the source of the location data.
         * @var string
         */
        public $PublisherCountry;

        /**
         * An array of devices for which you want to get geographical location information.
         * @var string[]
         */
        public $Device;

        /**
         * The level at which to aggregate the geographical location data.
         * @var integer
         */
        public $Level;

        /**
         * The country/region from which the search originated.
         * @var string
         */
        public $ParentCountry;

        /**
         * The maximum number of locations to return.
         * @var integer
         */
        public $MaxLocations;
    }
}
