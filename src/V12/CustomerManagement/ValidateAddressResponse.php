<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/validateaddress?view=bingads-12 ValidateAddress Response Object
     * 
     * @uses Address
     * @used-by BingAdsCustomerManagementService::ValidateAddress
     */
    final class ValidateAddressResponse
    {
        /**
         * Reserved.
         * @var Address
         */
        public $OriginalAddress;

        /**
         * Reserved.
         * @var string
         */
        public $Status;

        /**
         * Reserved.
         * @var Address[]
         */
        public $SuggestedAddresses;
    }
}
