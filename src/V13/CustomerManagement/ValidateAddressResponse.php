<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Determines whether or not the submitted address is valid for Microsoft Advertising accounts.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/validateaddress?view=bingads-13 ValidateAddress Response Object
     * 
     * @uses Address
     * @used-by BingAdsCustomerManagementService::ValidateAddress
     */
    final class ValidateAddressResponse
    {
        /**
         * The address that was submitted for validation.
         * @var Address
         */
        public $OriginalAddress;

        /**
         * Determines whether or not the submitted address is valid for Microsoft Advertising accounts, and whether or not any address suggestions are available via the SuggestedAddresses response element.
         * @var string
         */
        public $Status;

        /**
         * One or more suggested addresses if the Status is either AddressValidWithSuggestions or AddressInvalidWithSuggestions.
         * @var Address[]
         */
        public $SuggestedAddresses;
    }
}
