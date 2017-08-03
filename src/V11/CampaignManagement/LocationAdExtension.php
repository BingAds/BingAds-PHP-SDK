<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an ad extension that specifies a business' address and phone number to include in a text ad.
     * @link http://msdn.microsoft.com/en-us/library/jj721600(v=msads.110).aspx LocationAdExtension Data Object
     * 
     * @uses Address
     * @uses BusinessGeoCodeStatus
     * @uses GeoPoint
     */
    final class LocationAdExtension extends AdExtension
    {
        /**
         * The business' address.
         * @var Address
         */
        public $Address;

        /**
         * The name of the business.
         * @var string
         */
        public $CompanyName;

        /**
         * A status value that indicates whether the business' latitude and longitude coordinates have been determined.
         * @var BusinessGeoCodeStatus
         */
        public $GeoCodeStatus;

        /**
         * The latitude and longitude coordinates of the specified Address element.
         * @var GeoPoint
         */
        public $GeoPoint;

        /**
         * The identifier of an icon used to mark the business' location on Bing Maps.
         * @var integer
         */
        public $IconMediaId;

        /**
         * The identifier of the image to include in the ad.
         * @var integer
         */
        public $ImageMediaId;

        /**
         * The business' phone number to include in the ad.
         * @var string
         */
        public $PhoneNumber;
    }

}
