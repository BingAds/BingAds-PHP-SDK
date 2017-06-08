<?php
// Generated on 6/7/2017 5:53:08 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the date range values of a report request.
     * @link http://msdn.microsoft.com/en-us/library/bb671895(v=msads.90).aspx ReportTime Data Object
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
     * @used-by BrandZonePerformanceReportRequest
     * @used-by CallDetailReportRequest
     * @used-by CampaignPerformanceReportRequest
     * @used-by ConversionPerformanceReportRequest
     * @used-by DestinationUrlPerformanceReportRequest
     * @used-by GeographicalLocationReportRequest
     * @used-by GeoLocationPerformanceReportRequest
     * @used-by GoalsAndFunnelsReportRequest
     * @used-by KeywordPerformanceReportRequest
     * @used-by ProductDimensionPerformanceReportRequest
     * @used-by ProductOfferPerformanceReportRequest
     * @used-by ProductPartitionPerformanceReportRequest
     * @used-by ProductPartitionUnitPerformanceReportRequest
     * @used-by ProductSearchQueryPerformanceReportRequest
     * @used-by ProductTargetPerformanceReportRequest
     * @used-by PublisherUsagePerformanceReportRequest
     * @used-by RichAdComponentPerformanceReportRequest
     * @used-by SearchCampaignChangeHistoryReportRequest
     * @used-by SearchQueryPerformanceReportRequest
     * @used-by ShareOfVoiceReportRequest
     * @used-by SitePerformanceReportRequest
     * @used-by TacticChannelReportRequest
     * @used-by TrafficSourcesReportRequest
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
