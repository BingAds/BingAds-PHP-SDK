<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes BrandKits from the account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletebrandkits?view=bingads-13 DeleteBrandKits Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteBrandKits
     */
    final class DeleteBrandKitsRequest
    {
        /**
         * The Microsoft Advertising identifier of the account.
         * @var integer
         */
        public $AccountId;

        /**
         * The identifiers of the BrandKits to delete.
         * @var integer[]
         */
        public $BrandKitIds;
    }
}
