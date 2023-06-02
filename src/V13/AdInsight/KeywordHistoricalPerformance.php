<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains the key performance index data for the specified keyword.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordhistoricalperformance?view=bingads-13 KeywordHistoricalPerformance Data Object
     * 
     * @uses KeywordKPI
     * @used-by GetHistoricalKeywordPerformanceResponse
     */
    final class KeywordHistoricalPerformance
    {
        /**
         * The keyword to which the keyword performance data applies.
         * @var string
         */
        public $Keyword;

        /**
         * An array of KeywordKPI objects that contains the performance data.
         * @var KeywordKPI[]
         */
        public $KeywordKPIs;
    }

}
