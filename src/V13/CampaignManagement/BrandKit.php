<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the brand kit data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/brandkit?view=bingads-13 BrandKit Data Object
     * 
     * @uses BrandVoice
     * @uses BrandKitFont
     * @uses BrandKitImage
     * @uses BrandKitPalette
     * @used-by AddBrandKitsRequest
     * @used-by CreateBrandKitRecommendationResponse
     * @used-by GetBrandKitsByAccountIdResponse
     * @used-by GetBrandKitsByIdsResponse
     * @used-by UpdateBrandKitsRequest
     */
    final class BrandKit
    {
        /**
         * The brand's personality and tone.
         * @var BrandVoice
         */
        public $BrandVoice;

        /**
         * The name of the business.
         * @var string
         */
        public $BusinessName;

        /**
         * The brand kit's fonts.
         * @var BrandKitFont[]
         */
        public $Fonts;

        /**
         * The identifier of the brand kit.
         * @var integer
         */
        public $Id;

        /**
         * The brand kit's images.
         * @var BrandKitImage[]
         */
        public $Images;

        /**
         * The brand kit's landscape logos.
         * @var BrandKitImage[]
         */
        public $LandscapeLogos;

        /**
         * The brand kit's name.
         * @var string
         */
        public $Name;

        /**
         * The brand kit's palettes.
         * @var BrandKitPalette[]
         */
        public $Palettes;

        /**
         * The brand kit's square logos.
         * @var BrandKitImage[]
         */
        public $SquareLogos;
    }

}
