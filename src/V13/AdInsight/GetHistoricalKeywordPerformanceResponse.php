<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the historical performance of the normalized search term.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/gethistoricalkeywordperformance?view=bingads-13 GetHistoricalKeywordPerformance Response Object
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
