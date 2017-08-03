<?php

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Gets the estimated position in the search results if the specified bid value had been used for the keywords in the last 7 days.
     * @link http://msdn.microsoft.com/en-us/library/mt219300(v=msads.100).aspx GetEstimatedPositionByKeywordIds Request Object
     * 
     * @used-by BingAdsAdInsightService::GetEstimatedPositionByKeywordIds
     */
    final class GetEstimatedPositionByKeywordIdsRequest
    {
        /**
         * An array of identifiers of the keywords for which you want to get the estimated position in the search results, based on the specified bid value.
         * @var integer[]
         */
        public $KeywordIds;

        /**
         * The maximum bid value to use to determine the estimated position in the search results.
         * @var double
         */
        public $MaxBid;
    }
}
