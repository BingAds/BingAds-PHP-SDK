<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * A data object for the brand kit font.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/brandkitfont?view=bingads-13 BrandKitFont Data Object
     * 
     * @used-by BrandKit
     */
    final class BrandKitFont
    {
        /**
         * The font text assset type.
         * @var string
         */
        public $TextAssetType;

        /**
         * The font typeface.
         * @var string
         */
        public $Typeface;

        /**
         * The font weight.
         * @var string
         */
        public $Weight;
    }

}
