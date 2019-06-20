<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the language values that you may specify for columns of a downloaded report.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/reportlanguage?view=bingads-12 ReportLanguage Value Set
     * 
     * @used-by ReportRequest
     */
    final class ReportLanguage
    {
        /** The report columns will be in English. */
        const English = 'English';

        /** The report columns will be in French. */
        const French = 'French';
    }

}
