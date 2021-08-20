<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the DisclaimerAdExtension Data Object.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/disclaimeradextension?view=bingads-13 DisclaimerAdExtension Data Object
     * 
     * @uses AppUrl
     * @uses CustomParameters
     */
    final class DisclaimerAdExtension extends AdExtension
    {
        /**
         * Reserved.
         * @var string
         */
        public $DisclaimerLayout;

        /**
         * Reserved.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

        /**
         * Reserved.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * Reserved.
         * @var string
         */
        public $FinalUrlSuffix;

        /**
         * Reserved.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * Reserved.
         * @var string
         */
        public $LineText;

        /**
         * Reserved.
         * @var string
         */
        public $Name;

        /**
         * Reserved.
         * @var string
         */
        public $PopupText;

        /**
         * Reserved.
         * @var string
         */
        public $Title;

        /**
         * Reserved.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Reserved.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

}
