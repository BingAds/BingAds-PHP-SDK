<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the ad group status values that you can use to filter the report data.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/adgroupstatusreportfilter?view=bingads-13 AdGroupStatusReportFilter Value Set
     * 
     * @used-by AdDynamicTextPerformanceReportFilter
     * @used-by AdExtensionByAdReportFilter
     * @used-by AdExtensionByKeywordReportFilter
     * @used-by AdExtensionDetailReportFilter
     * @used-by AdGroupPerformanceReportFilter
     * @used-by AdPerformanceReportFilter
     * @used-by AgeGenderAudienceReportFilter
     * @used-by AudiencePerformanceReportFilter
     * @used-by CallDetailReportFilter
     * @used-by ConversionPerformanceReportFilter
     * @used-by DestinationUrlPerformanceReportFilter
     * @used-by DSAAutoTargetPerformanceReportFilter
     * @used-by DSACategoryPerformanceReportFilter
     * @used-by DSASearchQueryPerformanceReportFilter
     * @used-by GeographicPerformanceReportFilter
     * @used-by GoalsAndFunnelsReportFilter
     * @used-by HotelDimensionPerformanceReportFilter
     * @used-by HotelGroupPerformanceReportFilter
     * @used-by KeywordPerformanceReportFilter
     * @used-by NegativeKeywordConflictReportFilter
     * @used-by ProductDimensionPerformanceReportFilter
     * @used-by ProductNegativeKeywordConflictReportFilter
     * @used-by ProductPartitionPerformanceReportFilter
     * @used-by ProductPartitionUnitPerformanceReportFilter
     * @used-by ProductSearchQueryPerformanceReportFilter
     * @used-by ProfessionalDemographicsAudienceReportFilter
     * @used-by PublisherUsagePerformanceReportFilter
     * @used-by SearchQueryPerformanceReportFilter
     * @used-by ShareOfVoiceReportFilter
     */
    final class AdGroupStatusReportFilter
    {
        /** The report will contain ad groups that are active. */
        const Active = 'Active';

        /** The report will contain ad groups that have been deleted. */
        const Deleted = 'Deleted';

        /** The report will contain ad groups that have expired. */
        const Expired = 'Expired';

        /** The report will contain ad groups that are paused. */
        const Paused = 'Paused';
    }

}
