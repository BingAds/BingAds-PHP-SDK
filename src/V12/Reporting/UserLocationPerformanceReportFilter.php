<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the criteria to use to filter the user location performance report data.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/userlocationperformancereportfilter?view=bingads-12 UserLocationPerformanceReportFilter Data Object
     * 
     * @uses AdDistributionReportFilter
     * @used-by UserLocationPerformanceReportRequest
     */
    final class UserLocationPerformanceReportFilter
    {
        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data for only the specified countries/regions where the user that clicked the ad is located.
         * @var string[]
         */
        public $CountryCode;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var string[]
         */
        public $LanguageCode;
    }

}
