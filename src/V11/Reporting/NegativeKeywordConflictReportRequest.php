<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a negative keyword conflict report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/negativekeywordconflictreportrequest?view=bingads-11 NegativeKeywordConflictReportRequest Data Object
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
