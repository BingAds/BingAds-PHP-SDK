<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the file formats that you can use for a report.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/reportformat?version=11 ReportFormat Value Set
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
