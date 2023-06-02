<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines the possible status values of an InsertionOrder.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/insertionorderstatus?view=bingads-13 InsertionOrderStatus Value Set
     * 
     * @used-by InsertionOrder
     */
    final class InsertionOrderStatus
    {
        /** You need to approve or decline an order that Microsoft Advertising created for your account. */
        const PendingUserReview = 'PendingUserReview';

        /** You have an approved insertion order, and your ads are eligible to run. */
        const Active = 'Active';

        /** You have declined an order created by Microsoft Advertising, or the order you created has been declined. */
        const Declined = 'Declined';

        /** Your order has reached its end date and is no longer valid. */
        const Expired = 'Expired';

        /** You have canceled an order that you created or that was created by Microsoft Advertising. */
        const Canceled = 'Canceled';

        /** You have an approved order that has not reached its start date yet. */
        const NotStarted = 'NotStarted';

        /** Your balance has been depleted and the order is no longer active. */
        const Exhausted = 'Exhausted';

        /** Reserved for future use. */
        const Queued = 'Queued';
    }

}
