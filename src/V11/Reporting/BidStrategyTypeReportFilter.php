<?php
// Generated on 5/7/2017 5:48:04 AM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the possible values that you can use to use to filter the report data by bid strategy type.
     * @link http://msdn.microsoft.com/en-us/library/mt711485(v=msads.110).aspx BidStrategyTypeReportFilter Value Set
     * 
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
