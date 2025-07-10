<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the specified BrandKits in the account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatebrandkits?view=bingads-13 UpdateBrandKits Request Object
     * 
     * @uses BrandKit
     * @used-by BingAdsCampaignManagementService::UpdateBrandKits
     */
    final class UpdateBrandKitsRequest
    {
        /**
         * The Microsoft Advertising identifier of the account.
         * @var integer
         */
        public $AccountId;

        /**
         * A list of BrandKits to be created for the specified account.
         * @var BrandKit[]
         */
        public $BrandKits;
    }
}
