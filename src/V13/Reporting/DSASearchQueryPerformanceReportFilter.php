<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the criteria to use to filter the DSA search query performance report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/dsasearchqueryperformancereportfilter?view=bingads-13 DSASearchQueryPerformanceReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses AdStatusReportFilter
     * @uses CampaignStatusReportFilter
     * @uses LanguageReportFilter
     * @used-by DSASearchQueryPerformanceReportRequest
     */
    final class DSASearchQueryPerformanceReportFilter
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
         * If the value of this element is set to true, search terms that had one or more ad impressions but resulted in zero clicks in the specified time duration will be excluded from the report.
         * @var boolean
         */
        public $ExcludeZeroClicks;

        /**
         * The feed URL will appear either as "True" or "False".
         * @var boolean
         */
        public $FeedUrl;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var LanguageReportFilter
         */
        public $Language;

        /**
         * The report will include data for only the specified search query strings.
         * @var string[]
         */
        public $SearchQueries;
    }

}
