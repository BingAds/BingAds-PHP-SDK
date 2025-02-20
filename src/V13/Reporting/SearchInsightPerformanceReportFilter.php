<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a data object for SearchInsightPerformanceReportFilter.
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
         * The report will only include data for accounts with the specified status.
         * @var AccountStatusReportFilter
         */
        public $AccountStatus;

        /**
         * The report will only include data for ad groups with the specified status.
         * @var AdGroupStatusReportFilter
         */
        public $AdGroupStatus;

        /**
         * The report will include data for only the asset group status.
         * @var AssetGroupStatusReportFilter
         */
        public $AssetGroupStatus;

        /**
         * The report will only include data for campaigns with the specified status.
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
