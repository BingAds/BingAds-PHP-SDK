<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets the details of an account.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/getaccount?view=bingads-13 GetAccount Request Object
     * 
     * @uses AccountAdditionalField
     * @used-by BingAdsCustomerManagementService::GetAccount
     */
    final class GetAccountRequest
    {
        /**
         * The identifier of the account to get.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of additional properties that you want included within each returned account.
         * @var AccountAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
