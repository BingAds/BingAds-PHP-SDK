<?php
// Generated on 5/7/2017 5:45:54 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the possible values that you can use to use to filter the report data by bid strategy type.
     * @link http://msdn.microsoft.com/en-us/library/mt711485(v=msads.90).aspx BidStrategyTypeReportFilter Value Set
     * 
     * @used-by KeywordPerformanceReportFilter
     * @used-by ShareOfVoiceReportFilter
     * @used-by SitePerformanceReportFilter
     */
    final class BidStrategyTypeReportFilter
    {
        /** The report will contain data related to keywords, ad groups, or campaigns that use the manual CPC bid strategy. */
        const ManualCpc = 'ManualCpc';

        /** The report will contain data related to keywords, ad groups, or campaigns that use the enhanced CPC bid strategy. */
        const EnhancedCpc = 'EnhancedCpc';
    }

}
