<?php
// Generated on 7/10/2017 3:08:06 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the criteria to use to filter the campaign change history report data.
     * @link http://msdn.microsoft.com/en-us/library/hh912356(v=msads.110).aspx SearchCampaignChangeHistoryReportFilter Data Object
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
