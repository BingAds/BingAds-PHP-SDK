<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Filter Link Extensions pair one header with between 3 and 10 clickable text values that tell customers more about your business.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/filterlinkadextension?view=bingads-13 FilterLinkAdExtension Data Object
     * 
     * @uses AdExtensionHeaderType
     * @uses CustomParameters
     */
    final class FilterLinkAdExtension extends AdExtension
    {
        /**
         * The header that is appended with a colon (:) and precedes the filter link values in the ad that is shown.
         * @var AdExtensionHeaderType
         */
        public $AdExtensionHeaderType;

        /**
         * The landing page URL for mobile devices.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * The final URL suffix can include tracking parameters that will be appended to the end of your landing page URL.
         * @var string
         */
        public $FinalUrlSuffix;

        /**
         * The landing page URL.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * The language you want to use for the filter link headers.
         * @var string
         */
        public $Language;

        /**
         * The text values that follow after the AdExtensionHeaderType component of the ad that is shown.
         * @var string[]
         */
        public $Texts;

        /**
         * The tracking template to use as a default for all FinalUrls and FinalMobileUrls.
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
