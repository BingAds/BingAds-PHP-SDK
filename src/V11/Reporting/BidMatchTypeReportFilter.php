<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the bid match type values that you can use to filter the report data.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/bidmatchtypereportfilter?view=bingads-11 BidMatchTypeReportFilter Value Set
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
