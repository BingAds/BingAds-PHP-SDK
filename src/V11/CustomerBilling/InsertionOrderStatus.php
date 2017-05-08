<?php
// Generated on 5/7/2017 5:48:14 AM

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Defines the possible status values of an InsertionOrder.
     * @link http://msdn.microsoft.com/en-us/library/dn743761(v=msads.110).aspx InsertionOrderStatus Value Set
     * 
     * @used-by InsertionOrder
     */
    final class InsertionOrderStatus
    {
        /** You have created a new order and submitted it for approval. */
        const PendingSystemReview = 'PendingSystemReview';

        /** You need to approve or decline an order that Bing Ads created for your account. */
        const PendingUserReview = 'PendingUserReview';

        /** You have an approved insertion order, and your ads are eligible to run. */
        const Active = 'Active';

        /** You have declined an order created by Bing Ads, or the order you created has been declined. */
        const Declined = 'Declined';

        /** Your order has reached its end date and is no longer valid. */
        const Expired = 'Expired';

        /** You have canceled an order that you created or that was created by Bing Ads. */
        const Canceled = 'Canceled';

        /** You have an approved order that has not reached its start date yet. */
        const Pending = 'Pending';

        /** Your balance has been depleted and the order is no longer active. */
        const Exhausted = 'Exhausted';
    }

}
