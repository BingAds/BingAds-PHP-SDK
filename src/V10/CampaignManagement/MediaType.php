<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines media type information for a website.
     * @link http://msdn.microsoft.com/en-us/library/dd797128(v=msads.100).aspx MediaType Data Object
     * 
     * @uses Dimension
     * @used-by PlacementDetail
     */
    final class MediaType
    {
        /**
         * The media dimensions.
         * @var Dimension[]
         */
        public $Dimensions;

        /**
         * The name of the media type.
         * @var string
         */
        public $Name;
    }

}
