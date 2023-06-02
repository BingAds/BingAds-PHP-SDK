<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an ad extension that specifies a business address and phone number to include in a text ad.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/locationadextension?view=bingads-13 LocationAdExtension Data Object
     * 
     * @uses Address
     * @uses BusinessGeoCodeStatus
     * @uses GeoPoint
     */
    final class LocationAdExtension extends AdExtension
    {
        /**
         * The business address.
         * @var Address
         */
        public $Address;

        /**
         * The name of the business.
         * @var string
         */
        public $CompanyName;

        /**
         * A status value that indicates whether the business latitude and longitude coordinates have been determined.
         * @var BusinessGeoCodeStatus
         */
        public $GeoCodeStatus;

        /**
         * The latitude and longitude coordinates of the  specified Address element.
         * @var GeoPoint
         */
        public $GeoPoint;

        /**
         * The business phone number to include in the ad.
         * @var string
         */
        public $PhoneNumber;
    }

}
