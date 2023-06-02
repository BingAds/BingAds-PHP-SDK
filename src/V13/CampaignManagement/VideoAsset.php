<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the VideoAsset Data Object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/videoasset?view=bingads-13 VideoAsset Data Object
     * 
     * @uses ImageAsset
     */
    final class VideoAsset extends Asset
    {
        /**
         * Represents the aspect ratio for this Video asset.
         * @var string
         */
        public $SubType;

        /**
         * Reserved.
         * @var ImageAsset
         */
        public $ThumbnailImage;
    }

}
