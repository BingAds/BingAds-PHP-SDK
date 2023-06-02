<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the criteria to use to filter the negative keyword conflict report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/negativekeywordconflictreportfilter?view=bingads-13 NegativeKeywordConflictReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses CampaignStatusReportFilter
     * @uses KeywordStatusReportFilter
     * @used-by NegativeKeywordConflictReportRequest
     */
    final class NegativeKeywordConflictReportFilter
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

        /**
         * The report will only include data for keywords with the specified status.
         * @var KeywordStatusReportFilter
         */
        public $KeywordStatus;
    }

}
