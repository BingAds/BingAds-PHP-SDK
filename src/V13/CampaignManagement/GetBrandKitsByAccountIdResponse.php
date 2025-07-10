<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves all of the BrandKits associated with the specified account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getbrandkitsbyaccountid?view=bingads-13 GetBrandKitsByAccountId Response Object
     * 
     * @uses BrandKit
     * @used-by BingAdsCampaignManagementService::GetBrandKitsByAccountId
     */
    final class GetBrandKitsByAccountIdResponse
    {
        /**
         * A list of brand kits to be retrieved for the specified account.
         * @var BrandKit[]
         */
        public $BrandKits;
    }
}
