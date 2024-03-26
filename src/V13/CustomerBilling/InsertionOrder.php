<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * An insertion order is a contract that establishes the maximum amount you will spend on your account over a specified period of time.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/insertionorder?view=bingads-13 InsertionOrder Data Object
     * 
     * @uses InsertionOrderStatus
     * @uses InsertionOrderPendingChanges
     * @used-by AddInsertionOrderRequest
     * @used-by SearchInsertionOrdersResponse
     * @used-by UpdateInsertionOrderRequest
     */
    final class InsertionOrder
    {
        /**
         * The identifier of the account to which the insertion order applies.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved for internal use.
         * @var string
         */
        public $BookingCountryCode;

        /**
         * A description of the insertion order.
         * @var string
         */
        public $Comment;

        /**
         * The date that the insertion order expires.
         * @var \DateTime
         */
        public $EndDate;

        /**
         * A system-generated identifier that identifies the insertion order.
         * @var integer
         */
        public $Id;

        /**
         * An identifier of the last user to update the insertion order.
         * @var integer
         */
        public $LastModifiedByUserId;

        /**
         * The date and time that the insertion order was last updated.
         * @var \DateTime
         */
        public $LastModifiedTime;

        /**
         * A percentage of the budget that has been spent.
         * @var double
         */
        public $NotificationThreshold;

        /**
         * Reserved for internal use only.
         * @var integer
         */
        public $ReferenceId;

        /**
         * The budget for this insertion order.
         * @var double
         */
        public $SpendCapAmount;

        /**
         * The date that the insertion order can begin accruing charges.
         * @var \DateTime
         */
        public $StartDate;

        /**
         * The friendly name that can be used to reference this insertion order.
         * @var string
         */
        public $Name;

        /**
         * The status of the insertion order.
         * @var InsertionOrderStatus
         */
        public $Status;

        /**
         * A purchase order value that can be used to reference this insertion order in monthly invoices.
         * @var string
         */
        public $PurchaseOrder;

        /**
         * Can be used to manage changes for an approved insertion order with status set to either Active, Exhausted, Expired, or NotStarted.
         * @var InsertionOrderPendingChanges
         */
        public $PendingChanges;

        /**
         * The system-generated account number that is used to identify the account in the Microsoft Advertising web application.
         * @var string
         */
        public $AccountNumber;

        /**
         * The running balance of the insertion order.
         * @var double
         */
        public $BudgetRemaining;

        /**
         * The remaining balance of the insertion order.
         * @var double
         */
        public $BudgetSpent;

        /**
         * The percent of budget remaining for the insertion order.
         * @var double
         */
        public $BudgetRemainingPercent;

        /**
         * The percent of budget spent for the insertion order.
         * @var double
         */
        public $BudgetSpentPercent;

        /**
         * The name of the recurring insertion order series.
         * @var string
         */
        public $SeriesName;

        /**
         * Determines whether the insertion order is in a recurring series.
         * @var boolean
         */
        public $IsInSeries;

        /**
         * Determines how an order recurs in the series.
         * @var string
         */
        public $SeriesFrequencyType;

        /**
         * Reserved.
         * @var boolean
         */
        public $IsUnlimited;

        /**
         * Reserved.
         * @var boolean
         */
        public $IsEndless;
    }

}
