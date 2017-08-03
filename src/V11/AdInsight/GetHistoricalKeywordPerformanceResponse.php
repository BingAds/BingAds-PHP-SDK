<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the historical performance of the normalized search term.
     * @link http://msdn.microsoft.com/en-us/library/mt219302(v=msads.110).aspx GetHistoricalKeywordPerformance Response Object
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
