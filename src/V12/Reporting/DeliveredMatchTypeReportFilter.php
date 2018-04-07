<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the delivered match type values that you can use to filter the report data.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/deliveredmatchtypereportfilter?view=bingads-12 DeliveredMatchTypeReportFilter Value Set
     * 
     * @used-by KeywordPerformanceReportFilter
     * @used-by SearchQueryPerformanceReportFilter
     * @used-by ShareOfVoiceReportFilter
     */
    final class DeliveredMatchTypeReportFilter
    {
        /** The report will contain ads that were delivered by using an exact match comparison. */
        const Exact = 'Exact';

        /** The report will contain ads that were delivered by using a phrase match comparison. */
        const Phrase = 'Phrase';

        /** The report will contain ads that were delivered using a broad match comparison. */
        const Broad = 'Broad';
    }

}
