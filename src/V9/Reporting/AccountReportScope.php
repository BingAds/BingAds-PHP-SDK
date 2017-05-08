<?php
// Generated on 5/7/2017 5:45:55 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the set of accounts to include in the report.
     * @link http://msdn.microsoft.com/en-us/library/bb671563(v=msads.90).aspx AccountReportScope Data Object
     * 
     * @used-by AccountPerformanceReportRequest
     * @used-by AdExtensionDimensionReportRequest
     * @used-by TrafficSourcesReportRequest
     */
    final class AccountReportScope
    {
        /**
         * An array of a maximum of 1,000 account identifiers that identifies the account data to include in the report.
         * @var integer[]
         */
        public $AccountIds;
    }

}
