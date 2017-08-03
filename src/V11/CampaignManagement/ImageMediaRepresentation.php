<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an image media representation with height and width.
     * @link http://msdn.microsoft.com/en-us/library/dn766197(v=msads.110).aspx ImageMediaRepresentation Data Object
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
