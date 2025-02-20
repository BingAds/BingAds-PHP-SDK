<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletebrandkits?view=bingads-13 DeleteBrandKits Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteBrandKits
     */
    final class DeleteBrandKitsResponse
    {
        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
