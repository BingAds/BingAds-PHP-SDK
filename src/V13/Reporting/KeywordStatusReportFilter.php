<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the keyword status values that you can use to filter the report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/keywordstatusreportfilter?view=bingads-13 KeywordStatusReportFilter Value Set
     * 
     * @used-by AdDynamicTextPerformanceReportFilter
     * @used-by AdExtensionByKeywordReportFilter
     * @used-by ConversionPerformanceReportFilter
     * @used-by GoalsAndFunnelsReportFilter
     * @used-by KeywordPerformanceReportFilter
     * @used-by NegativeKeywordConflictReportFilter
     * @used-by SearchQueryPerformanceReportFilter
     * @used-by ShareOfVoiceReportFilter
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
