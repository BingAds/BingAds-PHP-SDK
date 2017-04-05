<?php
// Generated on 4/4/2017 5:50:25 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Gets the estimated position in the search results if the specified bid value would be used for the specified keywords.
     * @link http://msdn.microsoft.com/en-us/library/mt219298(v=msads.100).aspx GetEstimatedPositionByKeywords Response Object
     * 
     * @uses KeywordEstimatedPosition
     * @used-by BingAdsAdInsightService::GetEstimatedPositionByKeywords
     */
    final class GetEstimatedPositionByKeywordsResponse
    {
        /**
         * An array of KeywordEstimatedPosition data objects.
         * @var KeywordEstimatedPosition[]
         */
        public $KeywordEstimatedPositions;
    }
}
