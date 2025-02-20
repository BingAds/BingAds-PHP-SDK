<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an ad extension with a video and call-to-action button.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/videoadextension?view=bingads-13 VideoAdExtension Data Object
     * 
     * @uses AppUrl
     * @uses CustomParameters
     */
    final class VideoAdExtension extends AdExtension
    {
        /**
         * The action text for the video asset.
         * @var string
         */
        public $ActionText;

        /**
         * The alt text for the video asset.
         * @var string
         */
        public $AlternativeText;

        /**
         * The display text for the video asset.
         * @var string
         */
        public $DisplayText;

        /**
         * For future use.
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
         * The name of the video asset.
         * @var string
         */
        public $Name;

        /**
         * The ID of the thumbnail asset.
         * @var integer
         */
        public $ThumbnailId;

        /**
         * The thumbnail URL of the video asset.
         * @var string
         */
        public $ThumbnailUrl;

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

        /**
         * The ID of the video.
         * @var integer
         */
        public $VideoId;
    }

}
