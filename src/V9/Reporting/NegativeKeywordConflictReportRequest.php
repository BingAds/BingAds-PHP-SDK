<?php

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines a negative keyword conflict report request.
     * @link http://msdn.microsoft.com/en-us/library/hh560534(v=msads.90).aspx NegativeKeywordConflictReportRequest Data Object
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
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;
    }

}
