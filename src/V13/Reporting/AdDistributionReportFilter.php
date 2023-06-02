<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the ad distribution medium values that you can use to filter the report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/addistributionreportfilter?view=bingads-13 AdDistributionReportFilter Value Set
     * 
     * @used-by AccountPerformanceReportFilter
     * @used-by AdDynamicTextPerformanceReportFilter
     * @used-by AdGroupPerformanceReportFilter
     * @used-by AdPerformanceReportFilter
     * @used-by AgeGenderAudienceReportFilter
     * @used-by CampaignPerformanceReportFilter
     * @used-by ConversionPerformanceReportFilter
     * @used-by DestinationUrlPerformanceReportFilter
     * @used-by GeographicPerformanceReportFilter
     * @used-by GoalsAndFunnelsReportFilter
     * @used-by KeywordPerformanceReportFilter
     * @used-by ProfessionalDemographicsAudienceReportFilter
     * @used-by PublisherUsagePerformanceReportFilter
     * @used-by SearchCampaignChangeHistoryReportFilter
     * @used-by ShareOfVoiceReportFilter
     * @used-by UserLocationPerformanceReportFilter
     */
    final class AdDistributionReportFilter
    {
        /** The report will contain search ads. */
        const Search = 'Search';

        /** The report will contain audience ads. */
        const Audience = 'Audience';
    }

}
