<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines the possible status values of a customer.
     * @link http://msdn.microsoft.com/en-us/library/ff728419(v=msads.110).aspx CustomerLifeCycleStatus Value Set
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
