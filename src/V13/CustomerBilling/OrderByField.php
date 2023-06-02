<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines the field order of entities returned using one of the search operations, for example SearchCoupons or SearchInsertionOrders.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/orderbyfield?view=bingads-13 OrderByField Value Set
     * 
     * @used-by OrderBy
     */
    final class OrderByField
    {
        /** The order is determined by a predicate identifier. */
        const Id = 'Id';

        /** The order is determined by a predicate name. */
        const Name = 'Name';

        /** The order is determined by a predicate number. */
        const Number = 'Number';

        /** The order is determined by a predicate life cycle status. */
        const LifeCycleStatus = 'LifeCycleStatus';

        /** The order is determined by a predicate coupon class name. */
        const CouponClassName = 'CouponClassName';

        /** The order is determined by a predicate coupon start date. */
        const CouponStartDate = 'CouponStartDate';
    }

}
