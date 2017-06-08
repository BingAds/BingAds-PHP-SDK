<?php
// Generated on 6/7/2017 5:53:08 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the aggregation values for reports that cannot specify hourly aggregation.
     * @link http://msdn.microsoft.com/en-us/library/bb672057(v=msads.90).aspx NonHourlyReportAggregation Value Set
     * 
     * @used-by AdDynamicTextPerformanceReportRequest
     * @used-by AdPerformanceReportRequest
     * @used-by AgeGenderDemographicReportRequest
     * @used-by ConversionPerformanceReportRequest
     * @used-by DestinationUrlPerformanceReportRequest
     * @used-by GeographicalLocationReportRequest
     * @used-by GeoLocationPerformanceReportRequest
     * @used-by GoalsAndFunnelsReportRequest
     * @used-by PublisherUsagePerformanceReportRequest
     * @used-by RichAdComponentPerformanceReportRequest
     * @used-by ShareOfVoiceReportRequest
     * @used-by TacticChannelReportRequest
     * @used-by TrafficSourcesReportRequest
     */
    final class NonHourlyReportAggregation
    {
        /** The report data will be aggregated by the entire specified report time. */
        const Summary = 'Summary';

        /** Each row of the report identifies the month, day, and year when the transaction occurred. */
        const Daily = 'Daily';

        /** Each row of the report identifies the week when the transaction occurred. */
        const Weekly = 'Weekly';

        /** Each row of the report identifies the month when the transaction occurred. */
        const Monthly = 'Monthly';

        /** Each row of the report identifies the year when the transaction occurred. */
        const Yearly = 'Yearly';
    }

}
