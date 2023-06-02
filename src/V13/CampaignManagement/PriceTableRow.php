<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines pricing information by currency and unit that you can use with price ad extensions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/pricetablerow?view=bingads-13 PriceTableRow Data Object
     * 
     * @uses PriceQualifier
     * @uses PriceUnit
     * @used-by PriceAdExtension
     */
    final class PriceTableRow
    {
        /**
         * The currency code for the listed price.
         * @var string
         */
        public $CurrencyCode;

        /**
         * The description must provide further information about the header that is also defined in this object.
         * @var string
         */
        public $Description;

        /**
         * The landing page URL for mobile devices.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * The landing page URL.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * The header that precedes the pricing data.
         * @var string
         */
        public $Header;

        /**
         * The price that you are advertising.
         * @var double
         */
        public $Price;

        /**
         * The price qualifier for a given product or service e.g., starting from a specific price and up to a maximum price.
         * @var PriceQualifier
         */
        public $PriceQualifier;

        /**
         * The price unit allows you to specify the cost in terms of hour, day, week, etc.
         * @var PriceUnit
         */
        public $PriceUnit;

        /**
         * Reserved for future use.
         * @var string
         */
        public $TermsAndConditions;

        /**
         * Reserved for future use.
         * @var string
         */
        public $TermsAndConditionsUrl;
    }

}
