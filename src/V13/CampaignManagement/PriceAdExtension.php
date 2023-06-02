<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an ad extension that includes between 3 and 8 price table rows.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/priceadextension?view=bingads-13 PriceAdExtension Data Object
     * 
     * @uses PriceExtensionType
     * @uses PriceTableRow
     * @uses CustomParameters
     */
    final class PriceAdExtension extends AdExtension
    {
        /**
         * The final URL suffix can include tracking parameters that will be appended to the end of your landing page URL.
         * @var string
         */
        public $FinalUrlSuffix;

        /**
         * The language for the ad copy of your price ad extension.
         * @var string
         */
        public $Language;

        /**
         * The type of the price ad extension.
         * @var PriceExtensionType
         */
        public $PriceExtensionType;

        /**
         * The price table rows.
         * @var PriceTableRow[]
         */
        public $TableRows;

        /**
         * The tracking template to use as a default for all landing page URLs.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

}
