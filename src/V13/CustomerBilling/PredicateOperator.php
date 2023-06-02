<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines the condition of results for insertion orders returned using one of the search operations, for example SearchCoupons or SearchInsertionOrders.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/predicateoperator?view=bingads-13 PredicateOperator Value Set
     * 
     * @used-by Predicate
     */
    final class PredicateOperator
    {
        /** The field must equal the specified value. */
        const Equals = 'Equals';

        /** The field must not equal the specified value. */
        const NotEquals = 'NotEquals';

        /** The field must contain the specified value. */
        const Contains = 'Contains';

        /** The field must equal one of the specified comma separated values. */
        const In = 'In';

        /** The field must be greater than or equal to the specified value. */
        const GreaterThanEquals = 'GreaterThanEquals';

        /** The field must be less than or equal to the specified value. */
        const LessThanEquals = 'LessThanEquals';

        /** The field must start with the specified value. */
        const StartsWith = 'StartsWith';

        /** The field must not contain the specified value. */
        const NotContains = 'NotContains';
    }

}
