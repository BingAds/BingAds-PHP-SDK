<?php
// Generated on 6/7/2017 5:55:20 AM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the criteria to use to filter the user location performance report data.
     * @link http://msdn.microsoft.com/en-us/library/mt781257(v=msads.110).aspx UserLocationPerformanceReportFilter Data Object
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
