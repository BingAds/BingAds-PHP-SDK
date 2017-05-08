<?php
// Generated on 5/7/2017 5:45:55 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the status of a report.
     * @link http://msdn.microsoft.com/en-us/library/bb671578(v=msads.90).aspx ReportRequestStatusType Value Set
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
