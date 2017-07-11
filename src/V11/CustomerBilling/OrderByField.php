<?php
// Generated on 7/10/2017 3:08:15 PM

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Defines the field order of insertion orders returned using SearchInsertionOrders.
     * @link http://msdn.microsoft.com/en-us/library/dn743750(v=msads.110).aspx OrderByField Value Set
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
    }

}
