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
         * Reserved.
         * @var string
         */
        public $ActionText;

        /**
         * Reserved.
         * @var string
         */
        public $AlternativeText;

        /**
         * Reserved.
         * @var string
         */
        public $DisplayText;

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
        public $Name;

        /**
         * Reserved.
         * @var integer
         */
        public $ThumbnailId;

        /**
         * Reserved.
         * @var string
         */
        public $ThumbnailUrl;

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

        /**
         * Reserved.
         * @var integer
         */
        public $VideoId;
    }

}
