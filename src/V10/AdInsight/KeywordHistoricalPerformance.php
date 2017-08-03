<?php

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Defines an object that contains the key performance index data for the specified keyword.
     * @link http://msdn.microsoft.com/en-us/library/mt219292(v=msads.100).aspx KeywordHistoricalPerformance Data Object
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
