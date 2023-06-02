<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the criteria to use to filter the DSA category performance report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/dsacategoryperformancereportfilter?view=bingads-13 DSACategoryPerformanceReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses AdStatusReportFilter
     * @uses CampaignStatusReportFilter
     * @uses LanguageReportFilter
     * @used-by DSACategoryPerformanceReportRequest
     */
    final class DSACategoryPerformanceReportFilter
    {
        /**
         * The report will include data for only the account status.
         * @var AccountStatusReportFilter
         */
        public $AccountStatus;

        /**
         * The report will include data for only the ad group status.
         * @var AdGroupStatusReportFilter
         */
        public $AdGroupStatus;

        /**
         * The report will include data for ads that have the specified status value.
         * @var AdStatusReportFilter
         */
        public $AdStatus;

        /**
         * The report will include data for campaigns that have the specified status value.
         * @var CampaignStatusReportFilter
         */
        public $CampaignStatus;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var LanguageReportFilter
         */
        public $Language;
    }

}
