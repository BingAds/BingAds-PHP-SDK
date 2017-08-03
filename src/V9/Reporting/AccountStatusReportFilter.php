<?php

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the account status values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/mt489832(v=msads.90).aspx AccountStatusReportFilter Value Set
     * 
     * @used-by AccountPerformanceReportFilter
     * @used-by AdDynamicTextPerformanceReportFilter
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
     * @used-by ProductSearchQueryPerformanceReportFilter
     * @used-by ProductTargetPerformanceReportFilter
     * @used-by PublisherUsagePerformanceReportFilter
     * @used-by RichAdComponentPerformanceReportFilter
     * @used-by SearchQueryPerformanceReportFilter
     * @used-by ShareOfVoiceReportFilter
     * @used-by SitePerformanceReportFilter
     * @used-by TacticChannelReportFilter
     * @used-by TrafficSourcesReportFilter
     */
    final class AccountStatusReportFilter
    {
        /** The report will contain accounts that are active. */
        const Active = 'Active';

        /** The report will contain accounts that are paused. */
        const Paused = 'Paused';

        /** The report will contain accounts that are not active. */
        const Inactive = 'Inactive';
    }

}
