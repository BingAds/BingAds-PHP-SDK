<?php
// Generated on 5/7/2017 5:45:54 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the aggregation values that you can use for a report.
     * @link http://msdn.microsoft.com/en-us/library/bb672067(v=msads.90).aspx ReportAggregation Value Set
     * 
     * @used-by AccountPerformanceReportRequest
     * @used-by AdExtensionByAdReportRequest
     * @used-by AdExtensionByKeywordReportRequest
     * @used-by AdExtensionDetailReportRequest
     * @used-by AdGroupPerformanceReportRequest
     * @used-by AudiencePerformanceReportRequest
     * @used-by BrandZonePerformanceReportRequest
     * @used-by CallDetailReportRequest
     * @used-by CampaignPerformanceReportRequest
     * @used-by KeywordPerformanceReportRequest
     * @used-by ProductDimensionPerformanceReportRequest
     * @used-by ProductOfferPerformanceReportRequest
     * @used-by ProductPartitionPerformanceReportRequest
     * @used-by ProductPartitionUnitPerformanceReportRequest
     * @used-by ProductSearchQueryPerformanceReportRequest
     * @used-by ProductTargetPerformanceReportRequest
     * @used-by SitePerformanceReportRequest
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
    }

}
