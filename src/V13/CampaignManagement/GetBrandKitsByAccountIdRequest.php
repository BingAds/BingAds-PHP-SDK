<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getbrandkitsbyaccountid?view=bingads-13 GetBrandKitsByAccountId Request Object
     * 
     * @uses BrandKitAdditionalField
     * @used-by BingAdsCampaignManagementService::GetBrandKitsByAccountId
     */
    final class GetBrandKitsByAccountIdRequest
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved.
         * @var BrandKitAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
