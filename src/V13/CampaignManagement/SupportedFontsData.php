<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the supported fonts data data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/supportedfontsdata?view=bingads-13 SupportedFontsData Data Object
     * 
     * @uses SupportedFont
     * @used-by GetSupportedFontsResponse
     */
    final class SupportedFontsData
    {
        /**
         * The supported fonts.
         * @var SupportedFont[]
         */
        public $SupportedFonts;
    }

}
