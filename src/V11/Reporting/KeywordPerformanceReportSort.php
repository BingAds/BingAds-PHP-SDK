<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a keyword performance report column and corresponding sort order.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/keywordperformancereportsort?view=bingads-11 KeywordPerformanceReportSort Data Object
     * 
     * @uses KeywordPerformanceReportColumn
     * @uses SortOrder
     * @used-by KeywordPerformanceReportRequest
     */
    final class KeywordPerformanceReportSort
    {
        /**
         * The keyword performance report column by which to sort.
         * @var KeywordPerformanceReportColumn
         */
        public $SortColumn;

        /**
         * Defines the ascending or descending sort order of values within the specified report column.
         * @var SortOrder
         */
        public $SortOrder;
    }

}
