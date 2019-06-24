<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines the ascending or descending sort order of results for SearchInsertionOrders.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/sortorder?view=bingads-13 SortOrder Value Set
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
