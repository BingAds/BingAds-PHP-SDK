<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/reporting-service/msclickidperformancereportrequest?view=bingads-13 MSClickIdPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses MSClickIdPerformanceReportColumn
     * @uses MSClickIdPerformanceReportFilter
     * @uses AccountThroughCampaignReportScope
     * @uses ReportTime
     */
    final class MSClickIdPerformanceReportRequest extends ReportRequest
    {
        /**
         * Reserved.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * Reserved.
         * @var MSClickIdPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * Reserved.
         * @var MSClickIdPerformanceReportFilter
         */
        public $Filter;

        /**
         * Reserved.
         * @var AccountThroughCampaignReportScope
         */
        public $Scope;

        /**
         * Reserved.
         * @var ReportTime
         */
        public $Time;
    }

}
