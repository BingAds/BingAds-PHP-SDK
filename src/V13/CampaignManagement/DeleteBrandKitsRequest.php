<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletebrandkits?view=bingads-13 DeleteBrandKits Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteBrandKits
     */
    final class DeleteBrandKitsRequest
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved.
         * @var integer[]
         */
        public $BrandKitIds;
    }
}
