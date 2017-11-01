<?php

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Defines an insertion order.
     * @link https://docs.microsoft.com/en-us/bingads/customer-billing-service/insertionorder?view=bingads-11 InsertionOrder Data Object
     * 
     * @uses InsertionOrderStatus
     * @used-by AddInsertionOrderRequest
     * @used-by GetInsertionOrdersByAccountResponse
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
         * The running balance of the insertion order.
         * @var double
         */
        public $BalanceAmount;

        /**
         * A code that identifies the country/region in which the account operates.
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
         * A system generated identifier that identifies the insertion order.
         * @var integer
         */
        public $InsertionOrderId;

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
         * Internal use only.
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
         * Determines whether or not you need to approve or decline a change made to an existing order by Bing Ads.
         * @var boolean
         */
        public $ChangePendingReview;
    }

}
