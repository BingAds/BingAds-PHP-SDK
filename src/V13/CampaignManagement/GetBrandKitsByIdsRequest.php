<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the specified BrandKits from the specified account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getbrandkitsbyids?view=bingads-13 GetBrandKitsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetBrandKitsByIds
     */
    final class GetBrandKitsByIdsRequest
    {
        /**
         * The Microsoft Advertising identifier of the account.
         * @var integer
         */
        public $AccountId;

        /**
         * The identifiers of the BrandKits to retrieve.
         * @var integer[]
         */
        public $BrandKitIds;
    }
}
