<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a site link to include in an ad.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/sitelink?version=11 SiteLink Data Object
     * 
     * @uses AppUrl
     * @uses Schedule
     * @uses CustomParameters
     * @used-by SiteLinksAdExtension
     */
    final class SiteLink
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
         * This element determines whether the preference is for site links to be displayed on mobile devices or all devices.
         * @var integer
         */
        public $DevicePreference;

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
         * Determines the calendar day and time ranges when the sitelink is eligible to be shown in ads.
         * @var Schedule
         */
        public $Scheduling;

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
