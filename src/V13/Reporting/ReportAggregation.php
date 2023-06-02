<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the aggregation values that you can use for a report.
     * @link https:/learn.microsoft.com/advertising/reporting-service/reportaggregation?view=bingads-13 ReportAggregation Value Set
     * 
     * @used-by AccountPerformanceReportRequest
     * @used-by AdDynamicTextPerformanceReportRequest
     * @used-by AdExtensionByAdReportRequest
     * @used-by AdExtensionByKeywordReportRequest
     * @used-by AdExtensionDetailReportRequest
     * @used-by AdGroupPerformanceReportRequest
     * @used-by AdPerformanceReportRequest
     * @used-by AgeGenderAudienceReportRequest
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
     * @used-by HotelDimensionPerformanceReportRequest
     * @used-by HotelGroupPerformanceReportRequest
     * @used-by KeywordPerformanceReportRequest
     * @used-by ProductDimensionPerformanceReportRequest
     * @used-by ProductMatchCountReportRequest
     * @used-by ProductPartitionPerformanceReportRequest
     * @used-by ProductPartitionUnitPerformanceReportRequest
     * @used-by ProductSearchQueryPerformanceReportRequest
     * @used-by ProfessionalDemographicsAudienceReportRequest
     * @used-by PublisherUsagePerformanceReportRequest
     * @used-by SearchQueryPerformanceReportRequest
     * @used-by ShareOfVoiceReportRequest
     * @used-by UserLocationPerformanceReportRequest
     */
    final class ReportAggregation
    {
        /** The report data will be aggregated by the entire specified report time. */
        const Summary = 'Summary';

        /** Each row of the report identifies the hour when the transaction occurred. */
        const Hourly = 'Hourly';

        /** Each row of the report identifies the month, day, and year when the transaction occurred. */
        const Daily = 'Daily';

        /** Each row of the report identifies the week when the transaction occurred. */
        const Weekly = 'Weekly';

        /** Each row of the report identifies the month when the transaction occurred. */
        const Monthly = 'Monthly';

        /** Each row of the report identifies the year when the transaction occurred. */
        const Yearly = 'Yearly';

        /** Each row of the report identifies the hour of the day when the transaction occurred. */
        const HourOfDay = 'HourOfDay';

        /** Each row of the report identifies the day of the week when the transaction occurred. */
        const DayOfWeek = 'DayOfWeek';

        /** Each row of the report identifies the week when the transaction occurred. */
        const WeeklyStartingMonday = 'WeeklyStartingMonday';
    }

}
