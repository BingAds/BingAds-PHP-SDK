<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an image media representation with height and width.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/imagemediarepresentation?view=bingads-13 ImageMediaRepresentation Data Object
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
