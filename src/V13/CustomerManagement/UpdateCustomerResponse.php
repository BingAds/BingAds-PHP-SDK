<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Updates the details of the specified customer.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/updatecustomer?view=bingads-13 UpdateCustomer Response Object
     * 
     * @used-by BingAdsCustomerManagementService::UpdateCustomer
     */
    final class UpdateCustomerResponse
    {
        /**
         * The date and time that the customer was last updated.
         * @var \DateTime
         */
        public $LastModifiedTime;
    }
}
