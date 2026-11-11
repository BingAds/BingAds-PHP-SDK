<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified supported fonts.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getsupportedfonts?view=bingads-13 GetSupportedFonts Request Object
     * 
     * @uses AdSubType
     * @used-by BingAdsCampaignManagementService::GetSupportedFonts
     */
    final class GetSupportedFontsRequest
    {
        /**
         * The ad subtype for which to get supported fonts.
         * @var AdSubType
         */
        public $AdSubType;
    }
}
