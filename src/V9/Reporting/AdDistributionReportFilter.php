<?php

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the ad distribution medium values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/bb671722(v=msads.90).aspx AdDistributionReportFilter Value Set
     * 
     * @used-by AccountPerformanceReportFilter
     * @used-by AdDynamicTextPerformanceReportFilter
     * @used-by AdGroupPerformanceReportFilter
     * @used-by AdPerformanceReportFilter
     * @used-by AgeGenderDemographicReportFilter
     * @used-by BrandZonePerformanceReportFilter
     * @used-by CampaignPerformanceReportFilter
     * @used-by ConversionPerformanceReportFilter
     * @used-by DestinationUrlPerformanceReportFilter
     * @used-by GeographicalLocationReportFilter
     * @used-by GeoLocationPerformanceReportFilter
     * @used-by GoalsAndFunnelsReportFilter
     * @used-by KeywordPerformanceReportFilter
     * @used-by PublisherUsagePerformanceReportFilter
     * @used-by SearchCampaignChangeHistoryReportFilter
     * @used-by ShareOfVoiceReportFilter
     * @used-by SitePerformanceReportFilter
     */
    final class AdDistributionReportFilter
    {
        /** The report will contain search ads. */
        const Search = 'Search';

        /** The report will contain content ads. */
        const Content = 'Content';

        /** The report will contain native ads. */
        const Native = 'Native';
    }

}
