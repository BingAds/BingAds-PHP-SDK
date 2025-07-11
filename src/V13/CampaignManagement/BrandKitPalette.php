<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The brand kit palette data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/brandkitpalette?view=bingads-13 BrandKitPalette Data Object
     * 
     * @uses BrandKitColor
     * @used-by BrandKit
     */
    final class BrandKitPalette
    {
        /**
         * The color type.
         * @var string
         */
        public $ColorType;

        /**
         * The brand kit's color palettes.
         * @var BrandKitColor[]
         */
        public $Colors;

        /**
         * Reserved.
         * @var string
         */
        public $Name;
    }

}
