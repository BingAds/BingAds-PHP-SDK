<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the ad type values that you can use to filter the report data.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/adtypereportfilter?view=bingads-12 AdTypeReportFilter Value Set
     * 
     * @used-by AdDynamicTextPerformanceReportFilter
     * @used-by AdPerformanceReportFilter
     * @used-by KeywordPerformanceReportFilter
     * @used-by ProductSearchQueryPerformanceReportFilter
     * @used-by SearchQueryPerformanceReportFilter
     */
    final class AdTypeReportFilter
    {
        /** The report will include text ads. */
        const Text = 'Text';

        /** Not supported. */
        const Local = 'Local';

        /** The report will include product ads. */
        const Product = 'Product';

        /** The report will include app install ads. */
        const AppInstall = 'AppInstall';

        /** The report will include dynamic search ads. */
        const DynamicSearchAd = 'DynamicSearchAd';

        /** The report will include expanded text ads. */
        const ExpandedText = 'ExpandedText';

        /** The report will include responsive ads. */
        const ResponsiveAd = 'ResponsiveAd';

        /** The report will include responsive search ads. */
        const ResponsiveSearchAd = 'ResponsiveSearchAd';
    }

}
