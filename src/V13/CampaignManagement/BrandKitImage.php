<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The brand kit image data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/brandkitimage?view=bingads-13 BrandKitImage Data Object
     * 
     * @used-by BrandKit
     */
    final class BrandKitImage
    {
        /**
         * The crop height in pixels.
         * @var integer
         */
        public $CropHeight;

        /**
         * The crop wdith in pixels.
         * @var integer
         */
        public $CropWidth;

        /**
         * Where to crop along the x-axis in pixels.
         * @var integer
         */
        public $CropX;

        /**
         * Where to crop along the y-axis in pixels.
         * @var integer
         */
        public $CropY;

        /**
         * The identifier of the brand kit image.
         * @var integer
         */
        public $Id;

        /**
         * The URL for the image thumbnail.
         * @var string
         */
        public $ThumbnailUrl;

        /**
         * The URL for the image.
         * @var string
         */
        public $Url;
    }

}
