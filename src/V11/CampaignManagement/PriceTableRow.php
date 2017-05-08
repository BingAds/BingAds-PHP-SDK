<?php
// Generated on 5/7/2017 5:48:20 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines pricing information by currency and unit that you can use with price ad extensions.
     * @link http://msdn.microsoft.com/en-us/library/mt807734(v=msads.110).aspx PriceTableRow Data Object
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
         * The mobile landing page URL.
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
         * The price qualifier.
         * @var PriceQualifier
         */
        public $PriceQualifier;

        /**
         * The price unit.
         * @var PriceUnit
         */
        public $PriceUnit;
    }

}
