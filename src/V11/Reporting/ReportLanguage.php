<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the language values that you may specify for columns of a downloaded report.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/reportlanguage?version=11 ReportLanguage Value Set
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
