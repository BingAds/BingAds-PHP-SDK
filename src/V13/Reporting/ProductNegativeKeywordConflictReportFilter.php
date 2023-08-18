<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the criteria to use to filter the product negative keyword conflict report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/productnegativekeywordconflictreportfilter?view=bingads-13 ProductNegativeKeywordConflictReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses AssetGroupStatusReportFilter
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
         * The report will include data for only the asset group status.
         * @var AssetGroupStatusReportFilter
         */
        public $AssetGroupStatus;

        /**
         * The report will only include data for campaigns with the specified status.
         * @var CampaignStatusReportFilter
         */
        public $CampaignStatus;
    }

}
