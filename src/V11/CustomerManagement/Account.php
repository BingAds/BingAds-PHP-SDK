<?php
// Generated on 5/7/2017 5:48:10 AM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines an account.
     * @link http://msdn.microsoft.com/en-us/library/bb671588(v=msads.110).aspx Account Data Object
     * 
     * @uses AccountType
     * @uses CurrencyType
     * @uses AccountFinancialStatus
     * @uses LanguageType
     * @uses KeyValuePairOfstringstring
     * @uses PaymentMethodType
     * @uses AccountLifeCycleStatus
     * @uses TimeZoneType
     * @used-by AddAccountRequest
     * @used-by AddPrepayAccountRequest
     * @used-by GetAccountResponse
     * @used-by SearchAccountsResponse
     * @used-by SignupCustomerRequest
     * @used-by UpdateAccountRequest
     * @used-by UpdatePrepayAccountRequest
     */
    class Account
    {
        /**
         * The type of the account.
         * @var AccountType
         */
        public $AccountType;

        /**
         * The identifier of the customer that is billed for the charges that the account generates.
         * @var integer
         */
        public $BillToCustomerId;

        /**
         * The code that identifies the country/region in which the account operates.
         * @var string
         */
        public $CountryCode;

        /**
         * The type of currency that is used to settle the account.
         * @var CurrencyType
         */
        public $CurrencyType;

        /**
         * The financial status of the account.
         * @var AccountFinancialStatus
         */
        public $AccountFinancialStatus;

        /**
         * The system generated identifier of the account.
         * @var integer
         */
        public $Id;

        /**
         * The language used to render the invoice (if you use an invoice as your payment method).
         * @var LanguageType
         */
        public $Language;

        /**
         * For a list of valid key and value strings for this element, see Account ForwardCompatibilityMap in the section below.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The identifier of the last user to update the account's information.
         * @var integer
         */
        public $LastModifiedByUserId;

        /**
         * The date and time that the account was last updated.
         * @var \DateTime
         */
        public $LastModifiedTime;

        /**
         * The name of the account.
         * @var string
         */
        public $Name;

        /**
         * The system generated account number that is used to identify the account in the Bing Ads web application.
         * @var string
         */
        public $Number;

        /**
         * The identifier of the customer that owns the account.
         * @var integer
         */
        public $ParentCustomerId;

        /**
         * The identifier of the payment instrument to use to settle the account.
         * @var integer
         */
        public $PaymentMethodId;

        /**
         * The type of payment instrument to use to settle the account.
         * @var PaymentMethodType
         */
        public $PaymentMethodType;

        /**
         * The identifier of the account manager who is primarily responsible for managing this account.
         * @var integer
         */
        public $PrimaryUserId;

        /**
         * The status of the account.
         * @var AccountLifeCycleStatus
         */
        public $AccountLifeCycleStatus;

        /**
         * The time-stamp value that the system uses internally to reconcile updates when you call the UpdateAccount and DeleteAccount operations.
         * @var base64Binary
         */
        public $TimeStamp;

        /**
         * The default time-zone value to use for campaigns in this account.
         * @var TimeZoneType
         */
        public $TimeZone;

        /**
         * A flag value that indicates who paused the account.
         * @var integer
         */
        public $PauseReason;
    }

}
