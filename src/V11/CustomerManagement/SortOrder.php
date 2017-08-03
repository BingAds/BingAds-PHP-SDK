<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines the ascending or descending sort order of results for one of the search operations, for example SearchAccounts, SearchClientLinks, or SearchCustomers.
     * @link http://msdn.microsoft.com/en-us/library/dn452061(v=msads.110).aspx SortOrder Value Set
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
