<?php
// Generated on 7/10/2017 3:08:06 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the criteria to use to filter the search query performance report data.
     * @link http://msdn.microsoft.com/en-us/library/ee703961(v=msads.110).aspx SearchQueryPerformanceReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses AdStatusReportFilter
     * @uses AdTypeReportFilter
     * @uses CampaignStatusReportFilter
     * @uses DeliveredMatchTypeReportFilter
     * @uses KeywordStatusReportFilter
     * @used-by SearchQueryPerformanceReportRequest
     */
    final class SearchQueryPerformanceReportFilter
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
         * The report will include data for only the specified ad types.
         * @var AdTypeReportFilter
         */
        public $AdType;

        /**
         * The report will include data for campaigns that have the specified status value.
         * @var CampaignStatusReportFilter
         */
        public $CampaignStatus;

        /**
         * The report will include data for only the specified delivered match types (as opposed to the bid match type).
         * @var DeliveredMatchTypeReportFilter
         */
        public $DeliveredMatchType;

        /**
         * If the value of this element is set to true, search terms that had one or more ad impressions but resulted in zero clicks in the specified time duration will be excluded from the report.
         * @var boolean
         */
        public $ExcludeZeroClicks;

        /**
         * The report will include data for only the keyword status.
         * @var KeywordStatusReportFilter
         */
        public $KeywordStatus;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var string[]
         */
        public $LanguageCode;

        /**
         * The report will include data for only the specified search query strings.
         * @var string[]
         */
        public $SearchQueries;
    }

}
