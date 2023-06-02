<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the ad type values that you can use to filter the report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/adtypereportfilter?view=bingads-13 AdTypeReportFilter Value Set
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
