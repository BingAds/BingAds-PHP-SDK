<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines a customer object that contains one or more Microsoft Advertising accounts.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/customer?view=bingads-13 Customer Data Object
     * 
     * @uses CustomerFinancialStatus
     * @uses Industry
     * @uses KeyValuePairOfstringstring
     * @uses LanguageType
     * @uses ServiceLevel
     * @uses CustomerLifeCycleStatus
     * @uses Address
     * @used-by GetAccessibleCustomerResponse
     * @used-by GetCustomerResponse
     * @used-by SearchCustomersResponse
     * @used-by SignupCustomerRequest
     * @used-by UpdateCustomerRequest
     */
    final class Customer
    {
        /**
         * The financial status of the customer.
         * @var CustomerFinancialStatus
         */
        public $CustomerFinancialStatus;

        /**
         * The system-generated customer identifier.
         * @var integer
         */
        public $Id;

        /**
         * The primary business segment of the customer, for example, automotive, food, or entertainment.
         * @var Industry
         */
        public $Industry;

        /**
         * The identifier of the last user to update the customer's information.
         * @var integer
         */
        public $LastModifiedByUserId;

        /**
         * The date and time that the customer information was last updated.
         * @var \DateTime
         */
        public $LastModifiedTime;

        /**
         * The primary country where the customer operates.
         * @var string
         */
        public $MarketCountry;

        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The primary language that the customer uses.
         * @var LanguageType
         */
        public $MarketLanguage;

        /**
         * The name of the customer.
         * @var string
         */
        public $Name;

        /**
         * For internal use only.
         * @var ServiceLevel
         */
        public $ServiceLevel;

        /**
         * The status of the customer.
         * @var CustomerLifeCycleStatus
         */
        public $CustomerLifeCycleStatus;

        /**
         * A time-stamp value that the system uses internally to reconcile updates when you call the UpdateCustomer and DeleteCustomer operations.
         * @var base64Binary
         */
        public $TimeStamp;

        /**
         * A system-generated customer number that is used in the Microsoft Advertising web application.
         * @var string
         */
        public $Number;

        /**
         * The customer's business address.
         * @var Address
         */
        public $CustomerAddress;
    }

}
