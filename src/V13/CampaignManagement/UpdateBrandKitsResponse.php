<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the specified BrandKits in the account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatebrandkits?view=bingads-13 UpdateBrandKits Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateBrandKits
     */
    final class UpdateBrandKitsResponse
    {
        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
