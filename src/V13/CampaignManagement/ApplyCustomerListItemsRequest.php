<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the ApplyCustomerListItems service operation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/applycustomerlistitems?view=bingads-13 ApplyCustomerListItems Request Object
     * 
     * @uses CustomerList
     * @used-by BingAdsCampaignManagementService::ApplyCustomerListItems
     */
    final class ApplyCustomerListItemsRequest
    {
        /**
         * The customer list associated with the audience.
         * @var CustomerList
         */
        public $CustomerListAudience;
    }
}
