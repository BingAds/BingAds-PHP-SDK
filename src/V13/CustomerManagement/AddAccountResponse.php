<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Creates a new account within an existing customer.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/addaccount?view=bingads-13 AddAccount Response Object
     * 
     * @used-by BingAdsCustomerManagementService::AddAccount
     */
    final class AddAccountResponse
    {
        /**
         * A system-generated account identifier corresponding to the new account specified in the request.
         * @var integer
         */
        public $AccountId;

        /**
         * The system-generated account number that is used to identify the account in the Microsoft Advertising web application.
         * @var string
         */
        public $AccountNumber;

        /**
         * The date and time that the account was added.
         * @var \DateTime
         */
        public $CreateTime;
    }
}
