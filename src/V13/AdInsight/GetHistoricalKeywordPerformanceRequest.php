<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the historical performance of the normalized search term.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/gethistoricalkeywordperformance?view=bingads-13 GetHistoricalKeywordPerformance Request Object
     * 
     * @uses TimeInterval
     * @uses AdPosition
     * @uses MatchType
     * @used-by BingAdsAdInsightService::GetHistoricalKeywordPerformance
     */
    final class GetHistoricalKeywordPerformanceRequest
    {
        /**
         * An array of keywords for which you want to get historical performance statistics.
         * @var string[]
         */
        public $Keywords;

        /**
         * The time period that identifies the data to use to determine the key performance index of the specified keywords.
         * @var TimeInterval
         */
        public $TimeInterval;

        /**
         * The position of the search results for which you want to get performance data.
         * @var AdPosition
         */
        public $TargetAdPosition;

        /**
         * The match types for which you want to get historical data.
         * @var MatchType[]
         */
        public $MatchTypes;

        /**
         * The language in which the keywords are written.
         * @var string
         */
        public $Language;

        /**
         * The country codes of the countries/regions to use as the source of the historical data.
         * @var string[]
         */
        public $PublisherCountries;

        /**
         * A list of one or more of the following device types: Computers, NonSmartphones, Smartphones, Tablets.
         * @var string[]
         */
        public $Devices;
    }
}
