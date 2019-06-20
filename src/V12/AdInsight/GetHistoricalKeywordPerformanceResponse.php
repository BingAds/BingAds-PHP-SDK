<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Gets the historical performance of the normalized search term.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/gethistoricalkeywordperformance?view=bingads-12 GetHistoricalKeywordPerformance Response Object
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
