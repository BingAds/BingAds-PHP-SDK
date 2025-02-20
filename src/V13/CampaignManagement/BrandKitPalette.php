<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/brandkitpalette?view=bingads-13 BrandKitPalette Data Object
     * 
     * @uses BrandKitColor
     * @used-by BrandKit
     */
    final class BrandKitPalette
    {
        /**
         * Reserved.
         * @var string
         */
        public $ColorType;

        /**
         * Reserved.
         * @var BrandKitColor[]
         */
        public $Colors;
    }

}
