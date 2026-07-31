<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a bid strategy report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/bidstrategyreportrequest?view=bingads-13 BidStrategyReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses BidStrategyReportColumn
     * @uses BidStrategyReportFilter
     * @uses AccountThroughCampaignReportScope
     * @uses ReportTime
     */
    final class BidStrategyReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var BidStrategyReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var BidStrategyReportFilter
         */
        public $Filter;

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
