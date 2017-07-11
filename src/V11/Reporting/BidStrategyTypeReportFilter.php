<?php
// Generated on 7/10/2017 3:08:05 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the possible values that you can use to use to filter the report data by bid strategy type.
     * @link http://msdn.microsoft.com/en-us/library/mt711485(v=msads.110).aspx BidStrategyTypeReportFilter Value Set
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
