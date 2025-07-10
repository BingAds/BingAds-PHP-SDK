<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the campaign types by which you can filter the report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/campaigntypereportfilter?view=bingads-13 CampaignTypeReportFilter Value Set
     * 
     * @used-by ProductPartitionPerformanceReportFilter
     */
    final class CampaignTypeReportFilter
    {
        /** The report will contain Search and content campaigns. */
        const SearchAndContent = 'SearchAndContent';

        /** The report will contain Shopping campaigns. */
        const Shopping = 'Shopping';

        /** The report will contain Dynamic search campaigns. */
        const DynamicSearch = 'DynamicSearch';

        /** The report will contain Audience campaigns. */
        const Audience = 'Audience';

        /** The report will contain Smart campaigns. */
        const Smart = 'Smart';

        /** The report will contain Hotel campaigns. */
        const Hotel = 'Hotel';

        /** The report will contain Performance max campaigns. */
        const PerformanceMax = 'PerformanceMax';

        /** The report will contain App campaigns. */
        const App = 'App';
    }

}
