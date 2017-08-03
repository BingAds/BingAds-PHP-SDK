<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Updates the details of the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn451286(v=msads.110).aspx UpdateAccount Request Object
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
