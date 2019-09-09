<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Defines an object that contains an account's identifier, name, and number.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/accountinfo?view=bingads-12 AccountInfo Data Object
     * 
     * @uses AccountLifeCycleStatus
     * @used-by FindAccountsResponse
     * @used-by GetAccountsInfoResponse
     */
    final class AccountInfo
    {
        /**
         * The system generated identifier of the account.
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
