<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the set of accounts to include in the report.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/accountreportscope?view=bingads-12 AccountReportScope Data Object
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
