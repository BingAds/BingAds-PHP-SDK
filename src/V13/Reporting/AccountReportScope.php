<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the set of accounts to include in the report.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/accountreportscope?view=bingads-13 AccountReportScope Data Object
     * 
     * @used-by AccountPerformanceReportRequest
     */
    final class AccountReportScope
    {
        /**
         * A list of up to 1,000 account identifiers to include in the report.
         * @var integer[]
         */
        public $AccountIds;
    }

}
