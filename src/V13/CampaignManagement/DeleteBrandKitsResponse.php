<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes BrandKits from the account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletebrandkits?view=bingads-13 DeleteBrandKits Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteBrandKits
     */
    final class DeleteBrandKitsResponse
    {
        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
