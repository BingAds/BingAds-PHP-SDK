<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the bid match type values that you can use to filter the report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/bidmatchtypereportfilter?view=bingads-13 BidMatchTypeReportFilter Value Set
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
    }

}
