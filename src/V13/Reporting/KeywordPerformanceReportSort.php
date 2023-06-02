<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a keyword performance report column and corresponding sort order.
     * @link https:/learn.microsoft.com/advertising/reporting-service/keywordperformancereportsort?view=bingads-13 KeywordPerformanceReportSort Data Object
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
