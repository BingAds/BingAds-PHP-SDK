<?php

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the language values that you may specify for columns of a downloaded report.
     * @link http://msdn.microsoft.com/en-us/library/bb671595(v=msads.90).aspx ReportLanguage Value Set
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
