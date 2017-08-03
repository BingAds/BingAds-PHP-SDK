<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the size and type of media that the publisher website supports for ad placements.
     * @link http://msdn.microsoft.com/en-us/library/dd796936(v=msads.100).aspx PlacementDetail Data Object
     * 
     * @uses ImpressionsPerDayRange
     * @uses MediaType
     * @used-by GetPlacementDetailsForUrlsResponse
     */
    final class PlacementDetail
    {
        /**
         * Not supported.
         * @var ImpressionsPerDayRange
         */
        public $ImpressionsRangePerDay;

        /**
         * The URL of the publisher's website.
         * @var string
         */
        public $PathName;

        /**
         * The identifier of the publisher.
         * @var integer
         */
        public $PlacementId;

        /**
         * An array of MediaType objects that contains the size and type of media that the publisher website supports.
         * @var MediaType[]
         */
        public $SupportedMediaTypes;
    }

}
