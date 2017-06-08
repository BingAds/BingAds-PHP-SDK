<?php
// Generated on 6/7/2017 5:53:08 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the keyword status values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/mt489834(v=msads.90).aspx KeywordStatusReportFilter Value Set
     * 
     * @used-by AdDynamicTextPerformanceReportFilter
     * @used-by AdExtensionByKeywordReportFilter
     * @used-by ConversionPerformanceReportFilter
     * @used-by GoalsAndFunnelsReportFilter
     * @used-by KeywordPerformanceReportFilter
     * @used-by NegativeKeywordConflictReportFilter
     * @used-by ProductTargetPerformanceReportFilter
     * @used-by SearchQueryPerformanceReportFilter
     * @used-by ShareOfVoiceReportFilter
     * @used-by TacticChannelReportFilter
     */
    final class KeywordStatusReportFilter
    {
        /** The report will contain keywords that are active. */
        const Active = 'Active';

        /** The report will contain keywords that are paused. */
        const Paused = 'Paused';

        /** The report will contain keywords that have been deleted. */
        const Deleted = 'Deleted';
    }

}
