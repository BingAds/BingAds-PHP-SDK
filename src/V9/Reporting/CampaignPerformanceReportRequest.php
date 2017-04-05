<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines a campaign performance report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671804(v=msads.90).aspx CampaignPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses CampaignPerformanceReportColumn
     * @uses CampaignPerformanceReportFilter
     * @uses AccountThroughCampaignReportScope
     * @uses ReportTime
     */
    final class CampaignPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var CampaignPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var CampaignPerformanceReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
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
