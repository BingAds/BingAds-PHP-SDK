<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the criteria to use to filter the age and gender demographic report data.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/agegenderdemographicreportfilter?view=bingads-12 AgeGenderDemographicReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdDistributionReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses CampaignStatusReportFilter
     * @used-by AgeGenderDemographicReportRequest
     */
    final class AgeGenderDemographicReportFilter
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
         * The report will include data for only the campaign status.
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
