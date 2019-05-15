<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Determines whether or not the submitted address is valid for Microsoft Advertising accounts.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/validateaddress?view=bingads-12 ValidateAddress Request Object
     * 
     * @uses Address
     * @used-by BingAdsCustomerManagementService::ValidateAddress
     */
    final class ValidateAddressRequest
    {
        /**
         * The address to validate.
         * @var Address
         */
        public $Address;
    }
}
