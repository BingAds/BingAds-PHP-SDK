<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the campaign status values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/bb672004(v=msads.90).aspx CampaignStatusReportFilter Value Set
     * 
     * @used-by AdExtensionByAdReportFilter
     * @used-by AdExtensionByKeywordReportFilter
     * @used-by AdExtensionDetailReportFilter
     * @used-by AdGroupPerformanceReportFilter
     * @used-by AdPerformanceReportFilter
     * @used-by AgeGenderDemographicReportFilter
     * @used-by AudiencePerformanceReportFilter
     * @used-by CallDetailReportFilter
     * @used-by CampaignPerformanceReportFilter
     * @used-by ConversionPerformanceReportFilter
     * @used-by DestinationUrlPerformanceReportFilter
     * @used-by GeoLocationPerformanceReportFilter
     * @used-by GoalsAndFunnelsReportFilter
     * @used-by KeywordPerformanceReportFilter
     * @used-by NegativeKeywordConflictReportFilter
     * @used-by ProductDimensionPerformanceReportFilter
     * @used-by ProductOfferPerformanceReportFilter
     * @used-by ProductPartitionPerformanceReportFilter
     * @used-by ProductPartitionUnitPerformanceReportFilter
     * @used-by ProductTargetPerformanceReportFilter
     * @used-by PublisherUsagePerformanceReportFilter
     * @used-by RichAdComponentPerformanceReportFilter
     * @used-by SearchQueryPerformanceReportFilter
     * @used-by ShareOfVoiceReportFilter
     * @used-by SitePerformanceReportFilter
     * @used-by TacticChannelReportFilter
     */
    final class CampaignStatusReportFilter
    {
        /** The same meaning as Active. */
        const Submitted = 'Submitted';

        /** The report will contain campaigns that have been canceled. */
        const Cancelled = 'Cancelled';

        /** The report will contain campaigns that have been deleted. */
        const Deleted = 'Deleted';

        /** The report will contain campaigns that are paused. */
        const Paused = 'Paused';

        /** The report will contain campaigns that are paused due to budget restrictions. */
        const BudgetPaused = 'BudgetPaused';

        /** The report will contain campaigns that are active. */
        const Active = 'Active';

        /** The report will contain campaigns that have been suspended. */
        const Suspended = 'Suspended';
    }

}
