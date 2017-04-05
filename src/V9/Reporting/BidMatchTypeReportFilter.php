<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the bid match type values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/ff728812(v=msads.90).aspx BidMatchTypeReportFilter Value Set
     * 
     * @used-by KeywordPerformanceReportFilter
     * @used-by ShareOfVoiceReportFilter
     */
    final class BidMatchTypeReportFilter
    {
        /** The report will contain keywords that set a bid value for the exact match type. */
        const Exact = 'Exact';

        /** The report will contain keywords that set a bid value for the phrase match type. */
        const Phrase = 'Phrase';

        /** The report will contain keywords that set a bid value for the broad match type. */
        const Broad = 'Broad';

        /** The report will contain keywords that set a bid value for the content match type. */
        const Content = 'Content';
    }

}
