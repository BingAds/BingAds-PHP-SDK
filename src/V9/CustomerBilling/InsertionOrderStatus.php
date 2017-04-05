<?php
// Generated on 12/5/2016 5:47:08 AM

namespace Microsoft\BingAds\V9\CustomerBilling;

{
    /**
     * Defines the possible status values of an InsertionOrder.
     * @link http://msdn.microsoft.com/en-us/library/dn743761(v=msads.90).aspx InsertionOrderStatus Value Set
     * 
     * @used-by InsertionOrder
     */
    final class InsertionOrderStatus
    {
        /** A super admin of the bill-to customer added the insertion order, and the insertion order is pending account manager approval. */
        const PendingSystemReview = 'PendingSystemReview';

        /** An account manager added the insertion order, and the insertion order is pending approval from the super admin of the bill-to customer. */
        const PendingUserReview = 'PendingUserReview';

        /** The insertion order is active, which means that the account and its campaigns will begin showing ads once the start date is reached. */
        const Active = 'Active';

        /** Either the super admin of the bill-to customer or the account manager declined the insertion order. */
        const Declined = 'Declined';

        /** The end date or spend limit of the insertion order is reached, which means that the insertion order is expired or inactive. */
        const Expired = 'Expired';

        /** Either the super admin of the bill-to customer or the account manager canceled the insertion order. */
        const Canceled = 'Canceled';
    }

}
