<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines an object that contains an account's identifier, name, and number.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/accountinfo?view=bingads-13 AccountInfo Data Object
     * 
     * @uses AccountLifeCycleStatus
     * @used-by FindAccountsResponse
     * @used-by GetAccountsInfoResponse
     * @used-by GetLinkedAccountsAndCustomersInfoResponse
     */
    final class AccountInfo
    {
        /**
         * The system-generated identifier of the account.
         * @var integer
         */
        public $Id;

        /**
         * The name of the account.
         * @var string
         */
        public $Name;

        /**
         * The account number.
         * @var string
         */
        public $Number;

        /**
         * The status of the account.
         * @var AccountLifeCycleStatus
         */
        public $AccountLifeCycleStatus;

        /**
         * A flag value that indicates who paused the account.
         * @var integer
         */
        public $PauseReason;
    }

}
