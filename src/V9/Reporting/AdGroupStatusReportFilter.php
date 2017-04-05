<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the ad group status values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/bb671991(v=msads.90).aspx AdGroupStatusReportFilter Value Set
     * 
     * @used-by AdDynamicTextPerformanceReportFilter
     * @used-by AdExtensionByAdReportFilter
     * @used-by AdExtensionByKeywordReportFilter
     * @used-by AdExtensionDetailReportFilter
     * @used-by AdGroupPerformanceReportFilter
     * @used-by AdPerformanceReportFilter
     * @used-by AgeGenderDemographicReportFilter
     * @used-by AudiencePerformanceReportFilter
     * @used-by CallDetailReportFilter
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
    final class AdGroupStatusReportFilter
    {
        /** The same meaning as Active. */
        const Submitted = 'Submitted';

        /** The report will contain ad groups that have been deleted. */
        const Deleted = 'Deleted';

        /** The report will contain ad groups that have expired. */
        const Expired = 'Expired';

        /** The report will contain ad groups that are in a draft state. */
        const Draft = 'Draft';

        /** The report will contain ad groups that are paused. */
        const Paused = 'Paused';

        /** The report will contain ad groups that are active. */
        const Active = 'Active';
    }

}
