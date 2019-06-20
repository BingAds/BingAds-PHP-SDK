<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines an image media representation with height and width.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/imagemediarepresentation?view=bingads-12 ImageMediaRepresentation Data Object
     */
    final class ImageMediaRepresentation extends MediaRepresentation
    {
        /**
         * The height of the image in pixels.
         * @var integer
         */
        public $Height;

        /**
         * The width of the image in pixels.
         * @var integer
         */
        public $Width;
    }

}
