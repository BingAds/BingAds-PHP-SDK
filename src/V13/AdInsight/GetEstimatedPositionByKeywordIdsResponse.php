<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the estimated position in the search results if the specified bid value had been used for the keywords in the last 7 days.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getestimatedpositionbykeywordids?view=bingads-13 GetEstimatedPositionByKeywordIds Response Object
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
