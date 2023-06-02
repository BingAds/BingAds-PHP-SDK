<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object with one sitelink per ad extension.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/sitelinkadextension?view=bingads-13 SitelinkAdExtension Data Object
     * 
     * @uses AppUrl
     * @uses CustomParameters
     */
    final class SitelinkAdExtension extends AdExtension
    {
        /**
         * The site link description line 1.
         * @var string
         */
        public $Description1;

        /**
         * The site link description line 2.
         * @var string
         */
        public $Description2;

        /**
         * The URL of the webpage that users are taken to when they click the site link.
         * @var string
         */
        public $DestinationUrl;

        /**
         * The site-link text displayed in the ad.
         * @var string
         */
        public $DisplayText;

        /**
         * Reserved for future use.
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
