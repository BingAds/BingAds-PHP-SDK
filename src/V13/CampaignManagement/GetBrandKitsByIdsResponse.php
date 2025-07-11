<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the specified BrandKits from the specified account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getbrandkitsbyids?view=bingads-13 GetBrandKitsByIds Response Object
     * 
     * @uses BrandKit
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetBrandKitsByIds
     */
    final class GetBrandKitsByIdsResponse
    {
        /**
         * A list of BrandKits to be retrieved for the specified account.
         * @var BrandKit[]
         */
        public $BrandKits;

        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
