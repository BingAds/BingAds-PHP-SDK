<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Determines whether or not the submitted address is valid for Microsoft Advertising accounts.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/validateaddress?view=bingads-13 ValidateAddress Request Object
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
