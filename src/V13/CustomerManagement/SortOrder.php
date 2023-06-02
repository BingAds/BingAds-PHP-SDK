<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines the ascending or descending sort order of results for one of the search operations, for example SearchAccounts, SearchClientLinks, or SearchCustomers.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/sortorder?view=bingads-13 SortOrder Value Set
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
