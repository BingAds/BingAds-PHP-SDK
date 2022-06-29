<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/getperformanceinsightsdetaildatabyaccountid?view=bingads-13 GetPerformanceInsightsDetailDataByAccountId Request Object
     * 
     * @uses EntityType
     * @uses DayMonthAndYear
     * @used-by BingAdsAdInsightService::GetPerformanceInsightsDetailDataByAccountId
     */
    final class GetPerformanceInsightsDetailDataByAccountIdRequest
    {
        /**
         * Reserved.
         * @var EntityType
         */
        public $EntityType;

        /**
         * Reserved.
         * @var DayMonthAndYear
         */
        public $StartDate;

        /**
         * Reserved.
         * @var DayMonthAndYear
         */
        public $EndDate;
    }
}
