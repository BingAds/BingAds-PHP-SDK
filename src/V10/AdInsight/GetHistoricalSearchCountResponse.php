<?php

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Gets the number of times the normalized term was used in a search during the specified time period.
     * @link http://msdn.microsoft.com/en-us/library/mt219308(v=msads.100).aspx GetHistoricalSearchCount Response Object
     * 
     * @uses KeywordSearchCount
     * @used-by BingAdsAdInsightService::GetHistoricalSearchCount
     */
    final class GetHistoricalSearchCountResponse
    {
        /**
         * An array of KeywordSearchCount data objects.
         * @var KeywordSearchCount[]
         */
        public $KeywordSearchCounts;
    }
}
