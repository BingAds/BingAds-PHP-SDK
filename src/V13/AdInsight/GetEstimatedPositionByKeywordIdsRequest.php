<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the estimated position in the search results if the specified bid value had been used for the keywords in the last 7 days.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getestimatedpositionbykeywordids?view=bingads-13 GetEstimatedPositionByKeywordIds Request Object
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
