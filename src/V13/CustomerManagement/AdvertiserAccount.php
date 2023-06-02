<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines an advertiser account.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/advertiseraccount?view=bingads-13 AdvertiserAccount Data Object
     * 
     * @uses CurrencyCode
     * @uses AccountFinancialStatus
     * @uses LanguageType
     * @uses PaymentMethodType
     * @uses AccountLifeCycleStatus
     * @uses TimeZoneType
     * @uses KeyValuePairOfstringstring
     * @uses CustomerInfo
     * @uses Address
     * @uses AutoTagType
     * @uses AccountTaxCertificate
     * @used-by AddAccountRequest
     * @used-by AddPrepayAccountRequest
     * @used-by GetAccountResponse
     * @used-by SearchAccountsResponse
     * @used-by SignupCustomerRequest
     * @used-by UpdateAccountRequest
     * @used-by UpdatePrepayAccountRequest
     */
    final class AdvertiserAccount
    {
        /**
         * The identifier of the customer that is billed for the charges that the account generates.
         * @var integer
         */
        public $BillToCustomerId;

        /**
         * The ISO code for the currency that is used to settle the account.
         * @var CurrencyCode
         */
        public $CurrencyCode;

        /**
         * The financial status of the account.
         * @var AccountFinancialStatus
         */
        public $AccountFinancialStatus;

        /**
         * The system-generated identifier of the account.
         * @var integer
         */
        public $Id;

        /**
         * The language used to render the billing documents that you receive from Microsoft Advertising (if you use an invoice as your payment method).
         * @var LanguageType
         */
        public $Language;

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
         * The system-generated account number that is used to identify the account in the Microsoft Advertising web application.
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

        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The list of agencies linked to this account.
         * @var CustomerInfo[]
         */
        public $LinkedAgencies;

        /**
         * The identifier of the third party that is responsible for a sales lead.
         * @var integer
         */
        public $SalesHouseCustomerId;

        /**
         * For a list of valid key and value strings for this element, see AdvertiserAccount TaxInformation in the section below.
         * @var KeyValuePairOfstringstring[]
         */
        public $TaxInformation;

        /**
         * The identifier of a backup  payment instrument to use to settle the account.
         * @var integer
         */
        public $BackUpPaymentInstrumentId;

        /**
         * A customer specified amount for settling against the selected payment instrument.
         * @var float
         */
        public $BillingThresholdAmount;

        /**
         * The location where your business is legally registered.
         * @var Address
         */
        public $BusinessAddress;

        /**
         * Determines whether to append or replace the supported UTM tracking codes.
         * @var AutoTagType
         */
        public $AutoTagType;

        /**
         * The identifier of the payment instrument of your client (the sold-to customer) to use to settle the account.
         * @var integer
         */
        public $SoldToPaymentInstrumentId;

        /**
         * Reserved.
         * @var AccountTaxCertificate
         */
        public $TaxCertificate;

        /**
         * The account mode distinguishes between smart and expert accounts.
         * @var string
         */
        public $AccountMode;
    }

}
