<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the ascending or descending sort order of values within the specified report column.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/sortorder?view=bingads-11 SortOrder Value Set
     * 
     * @used-by KeywordPerformanceReportSort
     */
    final class SortOrder
    {
        /** The results will be sorted ascending. */
        const Ascending = 'Ascending';

        /** The results will be sorted descending. */
        const Descending = 'Descending';
    }

}
