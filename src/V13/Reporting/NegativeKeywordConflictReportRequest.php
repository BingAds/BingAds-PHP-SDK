<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a negative keyword conflict report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/negativekeywordconflictreportrequest?view=bingads-13 NegativeKeywordConflictReportRequest Data Object
     * 
     * @uses NegativeKeywordConflictReportColumn
     * @uses NegativeKeywordConflictReportFilter
     * @uses AccountThroughAdGroupReportScope
     */
    final class NegativeKeywordConflictReportRequest extends ReportRequest
    {
        /**
         * The list of attributes and performance statistics to include in the report.
         * @var NegativeKeywordConflictReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var NegativeKeywordConflictReportFilter
         */
        public $Filter;

        /**
         * The entity scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;
    }

}
