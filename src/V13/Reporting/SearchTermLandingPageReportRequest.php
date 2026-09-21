<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a search term landing page report request.
     * @link https:/learn.microsoft.com/advertising/reporting-service/searchtermlandingpagereportrequest?view=bingads-13 SearchTermLandingPageReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses SearchTermLandingPageReportColumn
     * @uses SearchTermLandingPageReportFilter
     * @uses AccountThroughCampaignReportScope
     * @uses ReportTime
     */
    final class SearchTermLandingPageReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var SearchTermLandingPageReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var SearchTermLandingPageReportFilter
         */
        public $Filter;

        /**
         * The entities and their scope to include in the report.
         * @var AccountThroughCampaignReportScope
         */
        public $Scope;

        /**
         * The time frame to use to aggregate the report data.
         * @var ReportTime
         */
        public $Time;
    }

}
