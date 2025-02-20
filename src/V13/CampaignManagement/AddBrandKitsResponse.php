<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addbrandkits?view=bingads-13 AddBrandKits Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddBrandKits
     */
    final class AddBrandKitsResponse
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $BrandKitIds;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
