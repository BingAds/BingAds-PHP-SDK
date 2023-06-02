<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the possible values that you can use to use to filter the report data by bid strategy type.
     * @link https:/learn.microsoft.com/advertising/reporting-service/bidstrategytypereportfilter?view=bingads-13 BidStrategyTypeReportFilter Value Set
     * 
     * @used-by DSAAutoTargetPerformanceReportFilter
     * @used-by KeywordPerformanceReportFilter
     * @used-by ShareOfVoiceReportFilter
     */
    final class BidStrategyTypeReportFilter
    {
        /** The report will contain data related to keywords, ad groups, or campaigns that use the manual CPC bid strategy. */
        const ManualCpc = 'ManualCpc';

        /** The report will contain data related to keywords, ad groups, or campaigns that use the enhanced CPC bid strategy. */
        const EnhancedCpc = 'EnhancedCpc';
    }

}
