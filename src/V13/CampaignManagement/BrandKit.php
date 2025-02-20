<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/brandkit?view=bingads-13 BrandKit Data Object
     * 
     * @uses BrandKitFont
     * @uses BrandKitImage
     * @uses BrandKitPalette
     * @used-by AddBrandKitsRequest
     * @used-by GetBrandKitsByAccountIdResponse
     * @used-by UpdateBrandKitsRequest
     */
    final class BrandKit
    {
        /**
         * Reserved.
         * @var BrandKitFont[]
         */
        public $Fonts;

        /**
         * Reserved.
         * @var integer
         */
        public $Id;

        /**
         * Reserved.
         * @var BrandKitImage[]
         */
        public $Images;

        /**
         * Reserved.
         * @var BrandKitImage[]
         */
        public $LandscapeLogos;

        /**
         * Reserved.
         * @var string
         */
        public $Name;

        /**
         * Reserved.
         * @var BrandKitPalette[]
         */
        public $Palettes;

        /**
         * Reserved.
         * @var BrandKitImage[]
         */
        public $SquareLogos;
    }

}
