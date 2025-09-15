<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Reserved.
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
         * Reserved.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * Reserved.
         * @var BidStrategyReportColumn[]
         */
        public $Columns;

        /**
         * Reserved.
         * @var BidStrategyReportFilter
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
