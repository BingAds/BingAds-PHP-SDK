<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines an object with one sitelink per ad extension.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/sitelinkadextension?view=bingads-12 SitelinkAdExtension Data Object
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
         * Important: If you are currently using Destination URLs, you must eventually replace them with Final URLs.
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
