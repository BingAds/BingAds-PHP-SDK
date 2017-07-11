<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the number of times the normalized term was used in a search during the specified time period.
     * @link http://msdn.microsoft.com/en-us/library/mt219308(v=msads.110).aspx GetHistoricalSearchCount Response Object
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
