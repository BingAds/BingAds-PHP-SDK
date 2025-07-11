<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * A data object for the brand kit color.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/brandkitcolor?view=bingads-13 BrandKitColor Data Object
     * 
     * @used-by BrandKitPalette
     */
    final class BrandKitColor
    {
        /**
         * The hex code for the brand kit color.
         * @var string
         */
        public $HexCode;

        /**
         * The name of the brand kit color.
         * @var string
         */
        public $Name;
    }

}
