<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a data object for AssetGroupPerformanceReportFilter.
     * @link https:/learn.microsoft.com/advertising/reporting-service/assetgroupperformancereportfilter?view=bingads-13 AssetGroupPerformanceReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AssetGroupStatusReportFilter
     * @uses CampaignStatusReportFilter
     * @used-by AssetGroupPerformanceReportRequest
     */
    final class AssetGroupPerformanceReportFilter
    {
        /**
         * The account status.
         * @var AccountStatusReportFilter
         */
        public $AccountStatus;

        /**
         * The asset group status.
         * @var AssetGroupStatusReportFilter
         */
        public $AssetGroupStatus;

        /**
         * The campaign status.
         * @var CampaignStatusReportFilter
         */
        public $CampaignStatus;
    }

}
