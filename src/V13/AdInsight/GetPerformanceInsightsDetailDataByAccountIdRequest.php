<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the performance insights detail data for a single account.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/getperformanceinsightsdetaildatabyaccountid?view=bingads-13 GetPerformanceInsightsDetailDataByAccountId Request Object
     * 
     * @uses EntityType
     * @uses DayMonthAndYear
     * @used-by BingAdsAdInsightService::GetPerformanceInsightsDetailDataByAccountId
     */
    final class GetPerformanceInsightsDetailDataByAccountIdRequest
    {
        /**
         * The entity level that you want to request performance insights summary data from.
         * @var EntityType
         */
        public $EntityType;

        /**
         * The start date range for performance insights.
         * @var DayMonthAndYear
         */
        public $StartDate;

        /**
         * The end date range for performance insights.
         * @var DayMonthAndYear
         */
        public $EndDate;
    }
}
