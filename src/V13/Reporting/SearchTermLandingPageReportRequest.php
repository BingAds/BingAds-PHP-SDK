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
         * Reserved.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * Reserved.
         * @var SearchTermLandingPageReportColumn[]
         */
        public $Columns;

        /**
         * Reserved.
         * @var SearchTermLandingPageReportFilter
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
