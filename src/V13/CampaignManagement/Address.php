<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a postal address for location ad extensions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/address?view=bingads-13 Address Data Object
     * 
     * @used-by LocationAdExtension
     */
    final class Address
    {
        /**
         * The name of the city where the street address is located.
         * @var string
         */
        public $CityName;

        /**
         * The country where the street address is located.
         * @var string
         */
        public $CountryCode;

        /**
         * The postal or zip code.
         * @var string
         */
        public $PostalCode;

        /**
         * A code that identifies the state or province where the street address is located.
         * @var string
         */
        public $ProvinceCode;

        /**
         * The name of the state or province where the street address is located.
         * @var string
         */
        public $ProvinceName;

        /**
         * The first line of the address.
         * @var string
         */
        public $StreetAddress;

        /**
         * The second line of the address.
         * @var string
         */
        public $StreetAddress2;
    }

}
