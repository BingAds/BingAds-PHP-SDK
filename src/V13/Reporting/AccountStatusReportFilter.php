<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the account status values that you can use to filter the report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/accountstatusreportfilter?view=bingads-13 AccountStatusReportFilter Value Set
     * 
     * @used-by AccountPerformanceReportFilter
     * @used-by AdDynamicTextPerformanceReportFilter
     * @used-by AdExtensionByAdReportFilter
     * @used-by AdExtensionByKeywordReportFilter
     * @used-by AdExtensionDetailReportFilter
     * @used-by AdGroupPerformanceReportFilter
     * @used-by AdPerformanceReportFilter
     * @used-by AgeGenderAudienceReportFilter
     * @used-by AssetGroupPerformanceReportFilter
     * @used-by AudiencePerformanceReportFilter
     * @used-by CallDetailReportFilter
     * @used-by CampaignPerformanceReportFilter
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
