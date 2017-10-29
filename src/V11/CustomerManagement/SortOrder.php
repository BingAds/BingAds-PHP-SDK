<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines the ascending or descending sort order of results for one of the search operations, for example SearchAccounts, SearchClientLinks, or SearchCustomers.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/sortorder?version=11 SortOrder Value Set
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
