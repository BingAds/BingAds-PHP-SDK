<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines the possible status values of InsertionOrderPendingChanges that can be used to manage changes for an approved insertion order.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/insertionorderpendingchangesstatus?view=bingads-13 InsertionOrderPendingChangesStatus Value Set
     * 
     * @used-by InsertionOrderPendingChanges
     */
    final class InsertionOrderPendingChangesStatus
    {
        /** The changes are pending user review. */
        const PendingUserReview = 'PendingUserReview';

        /** Approve the pending changes. */
        const ApproveChanges = 'ApproveChanges';

        /** Decline the pending changes. */
        const DeclineChanges = 'DeclineChanges';

        /** Cancel the pending changes. */
        const CancelChanges = 'CancelChanges';
    }

}
