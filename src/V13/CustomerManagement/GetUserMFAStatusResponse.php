<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Used to estimate adoption of multi-factor authentication (MFA) by users of your application.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/getusermfastatus?view=bingads-13 GetUserMFAStatus Response Object
     * 
     * @used-by BingAdsCustomerManagementService::GetUserMFAStatus
     */
    final class GetUserMFAStatusResponse
    {
        /**
         * Used to estimate adoption of multi-factor authentication (MFA) by users of your application.
         * @var boolean
         */
        public $MFAStatus;
    }
}
