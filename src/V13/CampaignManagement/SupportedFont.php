<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the supported font data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/supportedfont?view=bingads-13 SupportedFont Data Object
     * 
     * @used-by SupportedFontsData
     */
    final class SupportedFont
    {
        /**
         * The supported font family.
         * @var string
         */
        public $FontFamily;

        /**
         * The supported weights for the font family.
         * @var string[]
         */
        public $FontWeights;
    }

}
