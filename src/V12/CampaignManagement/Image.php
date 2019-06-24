<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines an image object that can be added to an account's media library.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/image?view=bingads-12 Image Data Object
     */
    final class Image extends Media
    {
        /**
         * A base64 string that represents the image or icon to add to the library.
         * @var string
         */
        public $Data;
    }

}
