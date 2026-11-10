<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines the ungrouped account data object.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/ungroupedaccount?view=bingads-13 UngroupedAccount Data Object
     * 
     * @uses KeyValueEntityOflongstring
     * @used-by GetUngroupedAccountsResponse
     */
    final class UngroupedAccount
    {
        /**
         * The Microsoft Advertising identifier of the account.
         * @var integer
         */
        public $AccountId;

        /**
         * The system-generated account number that is used to identify the account in the Microsoft Advertising web application.
         * @var string
         */
        public $AccountNumber;

        /**
         * The account name.
         * @var string
         */
        public $AccountName;

        /**
         * The billing groups to which the account can be assigned.
         * @var KeyValueEntityOflongstring[]
         */
        public $PotentialBillingGroups;
    }

}
