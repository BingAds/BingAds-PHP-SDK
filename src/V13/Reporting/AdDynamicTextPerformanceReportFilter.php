<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the criteria to use to filter the ad dynamic text performance report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/addynamictextperformancereportfilter?view=bingads-13 AdDynamicTextPerformanceReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdDistributionReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses AdStatusReportFilter
     * @uses AdTypeReportFilter
     * @uses DeviceTypeReportFilter
     * @uses KeywordStatusReportFilter
     * @uses LanguageReportFilter
     * @used-by AdDynamicTextPerformanceReportRequest
     */
    final class AdDynamicTextPerformanceReportFilter
    {
        /**
         * The report will include data for only the account status.
         * @var AccountStatusReportFilter
         */
        public $AccountStatus;

        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data for only the ad group status.
         * @var AdGroupStatusReportFilter
         */
        public $AdGroupStatus;

        /**
         * The report will include data for only the ad status.
         * @var AdStatusReportFilter
         */
        public $AdStatus;

        /**
         * The report will include data for only the specified ad types.
         * @var AdTypeReportFilter
         */
        public $AdType;

        /**
         * The report will include data for only the specified types of devices on which the ad is displayed.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;

        /**
         * The report will include data for only the keyword status.
         * @var KeywordStatusReportFilter
         */
        public $KeywordStatus;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var LanguageReportFilter
         */
        public $Language;
    }

}
