<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Updates the details of the specified account.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/updateaccount?view=bingads-11 UpdateAccount Request Object
     * 
     * @uses Account
     * @used-by BingAdsCustomerManagementService::UpdateAccount
     */
    final class UpdateAccountRequest
    {
        /**
         * An AdvertiserAccount object that contains the updated account information.
         * @var Account
         */
        public $Account;
    }
}
