<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified supported fonts.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getsupportedfonts?view=bingads-13 GetSupportedFonts Response Object
     * 
     * @uses SupportedFontsData
     * @used-by BingAdsCampaignManagementService::GetSupportedFonts
     */
    final class GetSupportedFontsResponse
    {
        /**
         * Reserved.
         * @var SupportedFontsData
         */
        public $Data;
    }
}
