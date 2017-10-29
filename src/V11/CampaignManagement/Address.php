<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a postal address.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/address?version=11 Address Data Object
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
