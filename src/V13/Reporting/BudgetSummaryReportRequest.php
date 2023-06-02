<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a budget summary report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/budgetsummaryreportrequest?view=bingads-13 BudgetSummaryReportRequest Data Object
     * 
     * @uses BudgetSummaryReportColumn
     * @uses AccountThroughCampaignReportScope
     * @uses ReportTime
     */
    final class BudgetSummaryReportRequest extends ReportRequest
    {
        /**
         * The list of attributes and performance statistics to include in the report.
         * @var BudgetSummaryReportColumn[]
         */
        public $Columns;

        /**
         * The entity scope of the report.
         * @var AccountThroughCampaignReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

}
