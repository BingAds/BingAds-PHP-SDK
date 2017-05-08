<?php
// Generated on 5/7/2017 5:48:04 AM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the ad type values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/cc580687(v=msads.110).aspx AdTypeReportFilter Value Set
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
    }

}
