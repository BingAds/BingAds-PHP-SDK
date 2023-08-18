<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/applycustomerlistitems?view=bingads-13 ApplyCustomerListItems Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::ApplyCustomerListItems
     */
    final class ApplyCustomerListItemsResponse
    {
        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
