<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the ascending or descending sort order of values within the specified report column.
     * @link https:/learn.microsoft.com/advertising/reporting-service/sortorder?view=bingads-13 SortOrder Value Set
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
