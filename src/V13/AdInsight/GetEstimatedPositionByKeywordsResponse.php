<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the estimated position in the search results if the specified bid value would be used for the specified keywords.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getestimatedpositionbykeywords?view=bingads-13 GetEstimatedPositionByKeywords Response Object
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
