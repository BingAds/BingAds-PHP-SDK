<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the criteria to use to filter the apps performance report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/appsperformancereportfilter?view=bingads-13 AppsPerformanceReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AssetGroupStatusReportFilter
     * @uses CampaignStatusReportFilter
     * @used-by AppsPerformanceReportRequest
     */
    final class AppsPerformanceReportFilter
    {
        /**
         * The report will include data for only the account status.
         * @var AccountStatusReportFilter
         */
        public $AccountStatus;

        /**
         * The report will include data for only the asset group status.
         * @var AssetGroupStatusReportFilter
         */
        public $AssetGroupStatus;

        /**
         * The report will include data for only the campaign status.
         * @var CampaignStatusReportFilter
         */
        public $CampaignStatus;
    }

}
