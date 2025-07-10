<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves all of the BrandKits associated with the specified account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getbrandkitsbyaccountid?view=bingads-13 GetBrandKitsByAccountId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetBrandKitsByAccountId
     */
    final class GetBrandKitsByAccountIdRequest
    {
        /**
         * The Microsoft Advertising identifier of the account.
         * @var integer
         */
        public $AccountId;
    }
}
