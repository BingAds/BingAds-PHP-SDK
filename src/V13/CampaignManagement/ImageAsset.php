<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Applies crop settings to stored image media for a specific aspect ratio.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/imageasset?view=bingads-13 ImageAsset Data Object
     * 
     * @used-by VideoAsset
     */
    final class ImageAsset extends Asset
    {
        /**
         * The number of pixels to use from the image asset source, starting from the CropY position and moving upwards.
         * @var integer
         */
        public $CropHeight;

        /**
         * The number of pixels to use from the image asset source, starting from the CropX position and moving to the right.
         * @var integer
         */
        public $CropWidth;

        /**
         * Starting from the lower left corner of image asset source, this is the number of pixels to skip to the right on the x-axis before applying the CropWidth.
         * @var integer
         */
        public $CropX;

        /**
         * Starting from the lower left corner of image asset source, this is the number of pixels to skip upwards on the y-axis before applying the CropHeight.
         * @var integer
         */
        public $CropY;

        /**
         * Represents the aspect ratio for this image asset.
         * @var string
         */
        public $SubType;

        /**
         * The target height dimension of an image asset.
         * @var integer
         */
        public $TargetHeight;

        /**
         * The target width dimension of an image asset.
         * @var integer
         */
        public $TargetWidth;
    }

}
