<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the aggregation values for reports that cannot specify hourly aggregation.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/nonhourlyreportaggregation?view=bingads-11 NonHourlyReportAggregation Value Set
     * 
     * @used-by AdDynamicTextPerformanceReportRequest
     * @used-by AdPerformanceReportRequest
     * @used-by AgeGenderAudienceReportRequest
     * @used-by AgeGenderDemographicReportRequest
     * @used-by ConversionPerformanceReportRequest
     * @used-by DestinationUrlPerformanceReportRequest
     * @used-by DSAAutoTargetPerformanceReportRequest
     * @used-by DSACategoryPerformanceReportRequest
     * @used-by GeographicPerformanceReportRequest
     * @used-by GoalsAndFunnelsReportRequest
     * @used-by ProfessionalDemographicsAudienceReportRequest
     * @used-by PublisherUsagePerformanceReportRequest
     * @used-by ShareOfVoiceReportRequest
     * @used-by UserLocationPerformanceReportRequest
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
