<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addbrandkits?view=bingads-13 AddBrandKits Request Object
     * 
     * @uses BrandKit
     * @used-by BingAdsCampaignManagementService::AddBrandKits
     */
    final class AddBrandKitsRequest
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
