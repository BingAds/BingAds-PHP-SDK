<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/imageasset?view=bingads-12 ImageAsset Data Object
     */
    final class ImageAsset extends Asset
    {
        /**
         * Reserved.
         * @var integer
         */
        public $CropHeight;

        /**
         * Reserved.
         * @var integer
         */
        public $CropWidth;

        /**
         * Reserved.
         * @var integer
         */
        public $CropX;

        /**
         * Reserved.
         * @var integer
         */
        public $CropY;

        /**
         * Reserved.
         * @var string
         */
        public $SubType;
    }

}
