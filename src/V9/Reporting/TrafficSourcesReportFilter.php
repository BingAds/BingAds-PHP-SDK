<?php

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the criteria to use to filter the traffic sources report data.
     * @link http://msdn.microsoft.com/en-us/library/gg262844(v=msads.90).aspx TrafficSourcesReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @used-by TrafficSourcesReportRequest
     */
    final class TrafficSourcesReportFilter
    {
        /**
         * The report will include data for only the account status.
         * @var AccountStatusReportFilter
         */
        public $AccountStatus;

        /**
         * The report will include data for only the specified goals.
         * @var integer[]
         */
        public $GoalIds;
    }

}
