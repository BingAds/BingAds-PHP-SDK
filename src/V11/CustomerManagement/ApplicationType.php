<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines the possible application types.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/applicationtype?version=11 ApplicationType Value Set
     * 
     * @used-by User
     * @used-by FindAccountsRequest
     * @used-by FindAccountsOrCustomersInfoRequest
     * @used-by GetCustomersInfoRequest
     * @used-by SearchCustomersRequest
     * @used-by SignupCustomerRequest
     */
    final class ApplicationType
    {
        /** An advertiser application. */
        const Advertiser = 'Advertiser';
    }

}
