<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/reporting-service/mmmperformancereportfilter?view=bingads-13 MMMPerformanceReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdDistributionReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses AssetGroupStatusReportFilter
     * @uses CampaignStatusReportFilter
     * @uses LanguageReportFilter
     * @used-by MMMPerformanceReportRequest
     */
    final class MMMPerformanceReportFilter
    {
        /**
         * Reserved.
         * @var AccountStatusReportFilter
         */
        public $AccountStatus;

        /**
         * Reserved.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

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
        public $CountryCode;

        /**
         * Reserved.
         * @var LanguageReportFilter
         */
        public $Language;
    }

}
