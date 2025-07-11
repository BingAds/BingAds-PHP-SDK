<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Create new brand kit.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addbrandkits?view=bingads-13 AddBrandKits Request Object
     * 
     * @uses BrandKit
     * @used-by BingAdsCampaignManagementService::AddBrandKits
     */
    final class AddBrandKitsRequest
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
