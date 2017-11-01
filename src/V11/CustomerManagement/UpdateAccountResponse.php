<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Updates the details of the specified account.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/updateaccount?view=bingads-11 UpdateAccount Response Object
     * 
     * @used-by BingAdsCustomerManagementService::UpdateAccount
     */
    final class UpdateAccountResponse
    {
        /**
         * The date and time that the account was last updated.
         * @var \DateTime
         */
        public $LastModifiedTime;
    }
}
