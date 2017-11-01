<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the criteria to use to filter the campaign change history report data.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/searchcampaignchangehistoryreportfilter?view=bingads-11 SearchCampaignChangeHistoryReportFilter Data Object
     * 
     * @uses AdDistributionReportFilter
     * @uses ChangeTypeReportFilter
     * @uses ChangeEntityReportFilter
     * @used-by SearchCampaignChangeHistoryReportRequest
     */
    final class SearchCampaignChangeHistoryReportFilter
    {
        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data for only the specified type of change.
         * @var ChangeTypeReportFilter
         */
        public $HowChanged;

        /**
         * The report will include data for only the specified type of entity.
         * @var ChangeEntityReportFilter
         */
        public $ItemChanged;
    }

}
