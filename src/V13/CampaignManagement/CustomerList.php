<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/customerlist?view=bingads-13 CustomerList Data Object
     * 
     * @uses CustomerListActionType
     * @uses CustomerListItem
     * @used-by ApplyCustomerListItemsRequest
     */
    final class CustomerList extends Audience
    {
        /**
         * Reserved.
         * @var CustomerListActionType
         */
        public $ActionType;

        /**
         * Reserved.
         * @var CustomerListItem[]
         */
        public $CustomerListItems;
    }

}
