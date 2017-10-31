<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the status of a report.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/reportrequeststatustype?view=bingads-11 ReportRequestStatusType Value Set
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
