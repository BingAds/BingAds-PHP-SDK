<?php
// Generated on 7/10/2017 3:08:05 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the set of accounts to include in the report.
     * @link http://msdn.microsoft.com/en-us/library/bb671563(v=msads.110).aspx AccountReportScope Data Object
     * 
     * @used-by AccountPerformanceReportRequest
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
