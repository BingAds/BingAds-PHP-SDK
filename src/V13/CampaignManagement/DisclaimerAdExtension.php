<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an ad extension that specifies disclaimer text to include in an expanded text ad or responsive search ad.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/disclaimeradextension?view=bingads-13 DisclaimerAdExtension Data Object
     * 
     * @uses AppUrl
     * @uses CustomParameters
     */
    final class DisclaimerAdExtension extends AdExtension
    {
        /**
         * The layout of the disclaimer.
         * @var string
         */
        public $DisclaimerLayout;

        /**
         * Reserved.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

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
         * Required text if the disclaimer is in additionalLine layout.
         * @var string
         */
        public $LineText;

        /**
         * The name of the disclaimer.
         * @var string
         */
        public $Name;

        /**
         * Required text if the disclaimer is in popup layout.
         * @var string
         */
        public $PopupText;

        /**
         * The title of the popup in popup layout.
         * @var string
         */
        public $Title;

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
