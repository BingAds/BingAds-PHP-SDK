<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Reserved.
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
