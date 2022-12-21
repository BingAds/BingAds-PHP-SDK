<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the performance insights detail data for a single account.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/getperformanceinsightsdetaildatabyaccountid?view=bingads-13 GetPerformanceInsightsDetailDataByAccountId Response Object
     * 
     * @uses PerformanceInsightsDetail
     * @used-by BingAdsAdInsightService::GetPerformanceInsightsDetailDataByAccountId
     */
    final class GetPerformanceInsightsDetailDataByAccountIdResponse
    {
        /**
         * Defines the performance insight results from calling the GetPerformanceInsightsDetailDataByAccountId operation.
         * @var PerformanceInsightsDetail[]
         */
        public $Result;
    }
}
