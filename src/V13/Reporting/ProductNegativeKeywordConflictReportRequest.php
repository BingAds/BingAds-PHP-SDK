<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a product negative keyword conflict report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/productnegativekeywordconflictreportrequest?view=bingads-13 ProductNegativeKeywordConflictReportRequest Data Object
     * 
     * @uses ProductNegativeKeywordConflictReportColumn
     * @uses ProductNegativeKeywordConflictReportFilter
     * @uses AccountThroughAdGroupReportScope
     */
    final class ProductNegativeKeywordConflictReportRequest extends ReportRequest
    {
        /**
         * The list of attributes and performance statistics to include in the report.
         * @var ProductNegativeKeywordConflictReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var ProductNegativeKeywordConflictReportFilter
         */
        public $Filter;

        /**
         * The entity scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;
    }

}
