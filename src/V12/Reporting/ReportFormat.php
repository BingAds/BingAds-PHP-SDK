<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the file formats that you can use for a report.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/reportformat?view=bingads-12 ReportFormat Value Set
     * 
     * @used-by ReportRequest
     */
    final class ReportFormat
    {
        /** The report format will be comma-separated values (. */
        const Csv = 'Csv';

        /** The report format will be tab-separated values (. */
        const Tsv = 'Tsv';

        /** The report format will be XML (. */
        const Xml = 'Xml';
    }

}
