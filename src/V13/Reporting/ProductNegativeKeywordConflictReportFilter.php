<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the criteria to use to filter the product negative keyword conflict report data.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/productnegativekeywordconflictreportfilter?view=bingads-13 ProductNegativeKeywordConflictReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses CampaignStatusReportFilter
     * @used-by ProductNegativeKeywordConflictReportRequest
     */
    final class ProductNegativeKeywordConflictReportFilter
    {
        /**
         * The report will only include data for accounts with the specified status.
         * @var AccountStatusReportFilter
         */
        public $AccountStatus;

        /**
         * The report will only include data for ad groups with the specified status.
         * @var AdGroupStatusReportFilter
         */
        public $AdGroupStatus;

        /**
         * The report will only include data for campaigns with the specified status.
         * @var CampaignStatusReportFilter
         */
        public $CampaignStatus;
    }

}
