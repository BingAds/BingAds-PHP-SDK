<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines an object that can be used to manage changes for an approved insertion order.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/insertionorderpendingchanges?view=bingads-13 InsertionOrderPendingChanges Data Object
     * 
     * @uses InsertionOrderPendingChangesStatus
     * @used-by InsertionOrder
     */
    final class InsertionOrderPendingChanges
    {
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
         * An identifier of the last user to request a change to the insertion order.
         * @var integer
         */
        public $RequestedByUserId;

        /**
         * The date and time that the insertion order change request was submitted.
         * @var \DateTime
         */
        public $ModifiedDateTime;

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
         * A purchase order value that can be used to reference this insertion order in monthly invoices.
         * @var string
         */
        public $PurchaseOrder;

        /**
         * Can be used to accept or decline the insertion order pending changes.
         * @var InsertionOrderPendingChangesStatus
         */
        public $ChangeStatus;
    }

}
