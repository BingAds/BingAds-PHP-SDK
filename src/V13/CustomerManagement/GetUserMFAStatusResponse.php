<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Determines whether or not the user credentials have been obtained by passing through multi-factor authentication (MFA).
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getusermfastatus?view=bingads-13 GetUserMFAStatus Response Object
     * 
     * @used-by BingAdsCustomerManagementService::GetUserMFAStatus
     */
    final class GetUserMFAStatusResponse
    {
        /**
         * Determines whether or not the user credentials have been obtained by passing through multi-factor authentication.
         * @var boolean
         */
        public $MFAStatus;
    }
}
