<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an action ad extension with a call-to-action button.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/actionadextension?view=bingads-13 ActionAdExtension Data Object
     * 
     * @uses ActionAdExtensionActionType
     * @uses CustomParameters
     */
    final class ActionAdExtension extends AdExtension
    {
        /**
         * The action type that you choose here, as well as the Language that you set, determines the text that is displayed on your call-to-action button.
         * @var ActionAdExtensionActionType
         */
        public $ActionType;

        /**
         * This is a mobile-friendly landing page URL when Action Extensions are served on mobile devices.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * The final URL suffix can include tracking parameters that will be appended to the end of your landing page URL.
         * @var string
         */
        public $FinalUrlSuffix;

        /**
         * This is the link to your specific web page or form that corresponds to the action text.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * The language that the ad extension will be served in.
         * @var string
         */
        public $Language;

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
