<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines the possible status values of a customer.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/customerlifecyclestatus?view=bingads-11 CustomerLifeCycleStatus Value Set
     * 
     * @used-by Customer
     */
    final class CustomerLifeCycleStatus
    {
        /** The customer is active. */
        const Active = 'Active';

        /** The customer is inactive, which means that the customer was deleted. */
        const Inactive = 'Inactive';
    }

}
