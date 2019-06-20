<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Updates the details of the specified account.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/updateaccount?view=bingads-13 UpdateAccount Request Object
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
