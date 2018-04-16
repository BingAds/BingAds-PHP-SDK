<?php

namespace Microsoft\BingAds\V12\Bulk;

{
    /**
     * This data object is not supported in Bing Ads API Version 12, and will be removed in a future version.
     * @link https://docs.microsoft.com/en-us/bingads/bulk-service/performancestatsdaterange?view=bingads-12 PerformanceStatsDateRange Data Object
     * 
     * @uses Date
     * @uses ReportTimePeriod
     * @used-by DownloadCampaignsByAccountIdsRequest
     * @used-by DownloadCampaignsByCampaignIdsRequest
     */
    final class PerformanceStatsDateRange
    {
        /**
         * The end date of the custom date range.
         * @var Date
         */
        public $CustomDateRangeEnd;

        /**
         * The start date of the custom date range.
         * @var Date
         */
        public $CustomDateRangeStart;

        /**
         * A predefined date range value.
         * @var ReportTimePeriod
         */
        public $PredefinedTime;
    }

}
