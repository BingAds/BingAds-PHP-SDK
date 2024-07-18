<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/reporting-service/searchinsightperformancereportfilter?view=bingads-13 SearchInsightPerformanceReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses AssetGroupStatusReportFilter
     * @uses CampaignStatusReportFilter
     * @used-by SearchInsightPerformanceReportRequest
     */
    final class SearchInsightPerformanceReportFilter
    {
        /**
         * Reserved.
         * @var AccountStatusReportFilter
         */
        public $AccountStatus;

        /**
         * Reserved.
         * @var AdGroupStatusReportFilter
         */
        public $AdGroupStatus;

        /**
         * Reserved.
         * @var AssetGroupStatusReportFilter
         */
        public $AssetGroupStatus;

        /**
         * Reserved.
         * @var CampaignStatusReportFilter
         */
        public $CampaignStatus;

        /**
         * Reserved.
         * @var string[]
         */
        public $SearchCategory;

        /**
         * Reserved.
         * @var string[]
         */
        public $SearchQueries;
    }

}
