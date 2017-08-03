<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the date range values of a report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671895(v=msads.110).aspx ReportTime Data Object
     * 
     * @uses Date
     * @uses ReportTimePeriod
     * @used-by AccountPerformanceReportRequest
     * @used-by AdDynamicTextPerformanceReportRequest
     * @used-by AdExtensionByAdReportRequest
     * @used-by AdExtensionByKeywordReportRequest
     * @used-by AdExtensionDetailReportRequest
     * @used-by AdGroupPerformanceReportRequest
     * @used-by AdPerformanceReportRequest
     * @used-by AgeGenderDemographicReportRequest
     * @used-by AudiencePerformanceReportRequest
     * @used-by CallDetailReportRequest
     * @used-by CampaignPerformanceReportRequest
     * @used-by ConversionPerformanceReportRequest
     * @used-by DestinationUrlPerformanceReportRequest
     * @used-by DSAAutoTargetPerformanceReportRequest
     * @used-by DSACategoryPerformanceReportRequest
     * @used-by DSASearchQueryPerformanceReportRequest
     * @used-by GeographicPerformanceReportRequest
     * @used-by GoalsAndFunnelsReportRequest
     * @used-by KeywordPerformanceReportRequest
     * @used-by ProductDimensionPerformanceReportRequest
     * @used-by ProductPartitionPerformanceReportRequest
     * @used-by ProductPartitionUnitPerformanceReportRequest
     * @used-by ProductSearchQueryPerformanceReportRequest
     * @used-by PublisherUsagePerformanceReportRequest
     * @used-by SearchCampaignChangeHistoryReportRequest
     * @used-by SearchQueryPerformanceReportRequest
     * @used-by ShareOfVoiceReportRequest
     * @used-by UserLocationPerformanceReportRequest
     */
    final class ReportTime
    {
        /**
         * The end date of the custom date range.
         * @var Date
         */
        public $CustomDateRangeEnd;

        /**
         * The start date of the custom date range.
         * @var Date
         */
        public $CustomDateRangeStart;

        /**
         * A predefined date range value.
         * @var ReportTimePeriod
         */
        public $PredefinedTime;
    }

}
