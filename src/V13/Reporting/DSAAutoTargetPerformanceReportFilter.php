<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the criteria to use to filter the DSA auto target performance report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/dsaautotargetperformancereportfilter?view=bingads-13 DSAAutoTargetPerformanceReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses BidStrategyTypeReportFilter
     * @uses CampaignStatusReportFilter
     * @uses DynamicAdTargetStatusReportFilter
     * @uses LanguageReportFilter
     * @used-by DSAAutoTargetPerformanceReportRequest
     */
    final class DSAAutoTargetPerformanceReportFilter
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
         * The report will include data for only the specified bid strategy types.
         * @var BidStrategyTypeReportFilter
         */
        public $BidStrategyType;

        /**
         * The report will include data for campaigns that have the specified status value.
         * @var CampaignStatusReportFilter
         */
        public $CampaignStatus;

        /**
         * The report will include data for only the dynamic ad targets that have the specified status.
         * @var DynamicAdTargetStatusReportFilter
         */
        public $DynamicAdTargetStatus;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var LanguageReportFilter
         */
        public $Language;
    }

}
