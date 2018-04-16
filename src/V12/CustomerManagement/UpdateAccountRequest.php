<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Updates the details of the specified account.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/updateaccount?view=bingads-12 UpdateAccount Request Object
     * 
     * @uses AdvertiserAccount
     * @used-by BingAdsCustomerManagementService::UpdateAccount
     */
    final class UpdateAccountRequest
    {
        /**
         * An AdvertiserAccount object that contains the updated account information.
         * @var AdvertiserAccount
         */
        public $Account;
    }
}
