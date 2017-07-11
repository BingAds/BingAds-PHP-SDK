<?php
// Generated on 7/10/2017 3:08:05 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the criteria to use to filter the DSA category performance report data.
     * @link http://msdn.microsoft.com/en-us/library/mt779096(v=msads.110).aspx DSACategoryPerformanceReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses AdStatusReportFilter
     * @uses CampaignStatusReportFilter
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
         * @var string[]
         */
        public $LanguageCode;
    }

}
