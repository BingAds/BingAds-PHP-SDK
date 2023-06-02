<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Updates the details of the specified account.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/updateaccount?view=bingads-13 UpdateAccount Response Object
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
