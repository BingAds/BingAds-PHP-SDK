<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the status of a report.
     * @link https:/learn.microsoft.com/advertising/reporting-service/reportrequeststatustype?view=bingads-13 ReportRequestStatusType Value Set
     * 
     * @used-by ReportRequestStatus
     */
    final class ReportRequestStatusType
    {
        /** An error occurred while generating the report. */
        const Error = 'Error';

        /** The report was successfully completed. */
        const Success = 'Success';

        /** The report is not yet complete. */
        const Pending = 'Pending';
    }

}
