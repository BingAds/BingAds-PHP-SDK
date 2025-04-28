<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Reserved.
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
         * Reserved.
         * @var AccountStatusReportFilter
         */
        public $AccountStatus;

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
    }

}
