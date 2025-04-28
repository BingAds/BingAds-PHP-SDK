<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getbrandkitsbyids?view=bingads-13 GetBrandKitsByIds Response Object
     * 
     * @uses BrandKit
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetBrandKitsByIds
     */
    final class GetBrandKitsByIdsResponse
    {
        /**
         * Reserved.
         * @var BrandKit[]
         */
        public $BrandKits;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
