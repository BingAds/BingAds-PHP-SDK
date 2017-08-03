<?php

namespace Microsoft\BingAds\V9\CustomerBilling;

{
    /**
     * Defines the ascending or descending sort order of results for SearchInsertionOrders.
     * @link http://msdn.microsoft.com/en-us/library/dn743751(v=msads.90).aspx SortOrder Value Set
     * 
     * @used-by OrderBy
     */
    final class SortOrder
    {
        /** The results will be sorted ascending. */
        const Ascending = 'Ascending';

        /** The results will be sorted descending. */
        const Descending = 'Descending';
    }

}
