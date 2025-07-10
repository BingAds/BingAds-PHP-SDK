<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Create new brand kit.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addbrandkits?view=bingads-13 AddBrandKits Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddBrandKits
     */
    final class AddBrandKitsResponse
    {
        /**
         * A list of the created BrandKits.
         * @var integer[]
         */
        public $BrandKitIds;

        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
