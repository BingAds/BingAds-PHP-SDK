<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the estimated position in the search results if the specified bid value had been used for the keywords in the last 7 days.
     * @link http://msdn.microsoft.com/en-us/library/mt219300(v=msads.110).aspx GetEstimatedPositionByKeywordIds Response Object
     * 
     * @uses KeywordIdEstimatedPosition
     * @used-by BingAdsAdInsightService::GetEstimatedPositionByKeywordIds
     */
    final class GetEstimatedPositionByKeywordIdsResponse
    {
        /**
         * A list of KeywordIdEstimatedPosition data objects.
         * @var KeywordIdEstimatedPosition[]
         */
        public $KeywordEstimatedPositions;
    }
}
