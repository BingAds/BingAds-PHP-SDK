<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the ApplyCustomerListItems service operation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/applycustomerlistitems?view=bingads-13 ApplyCustomerListItems Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::ApplyCustomerListItems
     */
    final class ApplyCustomerListItemsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that weren't successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
