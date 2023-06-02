<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the file formats that you can use for a report.
     * @link https:/learn.microsoft.com/advertising/reporting-service/reportformat?view=bingads-13 ReportFormat Value Set
     * 
     * @used-by ReportRequest
     */
    final class ReportFormat
    {
        /** The report format will be comma-separated values (.csv). */
        const Csv = 'Csv';

        /** The report format will be tab-separated values (.tsv). */
        const Tsv = 'Tsv';

        /** The report format will be XML (.xml). */
        const Xml = 'Xml';
    }

}
