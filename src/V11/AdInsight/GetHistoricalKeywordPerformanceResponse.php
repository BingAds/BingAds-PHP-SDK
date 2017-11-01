<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the historical performance of the normalized search term.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/gethistoricalkeywordperformance?view=bingads-11 GetHistoricalKeywordPerformance Response Object
     * 
     * @uses KeywordHistoricalPerformance
     * @used-by BingAdsAdInsightService::GetHistoricalKeywordPerformance
     */
    final class GetHistoricalKeywordPerformanceResponse
    {
        /**
         * An array of KeywordHistoricalPerformance data objects.
         * @var KeywordHistoricalPerformance[]
         */
        public $KeywordHistoricalPerformances;
    }
}
