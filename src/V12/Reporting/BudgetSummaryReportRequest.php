<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines a budget summary report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/budgetsummaryreportrequest?view=bingads-12 BudgetSummaryReportRequest Data Object
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
