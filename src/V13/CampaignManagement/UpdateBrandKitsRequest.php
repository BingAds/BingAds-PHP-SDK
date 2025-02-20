<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatebrandkits?view=bingads-13 UpdateBrandKits Request Object
     * 
     * @uses BrandKit
     * @used-by BingAdsCampaignManagementService::UpdateBrandKits
     */
    final class UpdateBrandKitsRequest
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved.
         * @var BrandKit[]
         */
        public $BrandKits;
    }
}
