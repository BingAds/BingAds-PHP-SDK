<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines a budget summary report request.
     * @link http://msdn.microsoft.com/en-us/library/bb672028(v=msads.90).aspx BudgetSummaryReportRequest Data Object
     * 
     * @uses BudgetSummaryReportColumn
     * @uses AccountThroughCampaignReportScope
     * @uses BudgetSummaryReportTime
     */
    final class BudgetSummaryReportRequest extends ReportRequest
    {
        /**
         * The list of attributes and performance statistics to include in the report.
         * @var BudgetSummaryReportColumn[]
         */
        public $Columns;

        /**
         * The scope of the report.
         * @var AccountThroughCampaignReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var BudgetSummaryReportTime
         */
        public $Time;
    }

}
