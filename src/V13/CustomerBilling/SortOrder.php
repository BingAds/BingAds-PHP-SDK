<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines the ascending or descending sort order of results using one of the search operations, for example SearchCoupons or SearchInsertionOrders.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/sortorder?view=bingads-13 SortOrder Value Set
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
