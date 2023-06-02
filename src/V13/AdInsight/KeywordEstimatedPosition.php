<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains the keyword and the estimated position in the search results for each match type.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordestimatedposition?view=bingads-13 KeywordEstimatedPosition Data Object
     * 
     * @uses EstimatedPositionAndTraffic
     * @used-by KeywordIdEstimatedPosition
     * @used-by GetEstimatedPositionByKeywordsResponse
     */
    final class KeywordEstimatedPosition
    {
        /**
         * The keyword to which the estimates apply.
         * @var string
         */
        public $Keyword;

        /**
         * An array of EstimatedPositionAndTraffic data objects that contains the position in the search results corresponding to the specified maximum bid.
         * @var EstimatedPositionAndTraffic[]
         */
        public $EstimatedPositions;
    }

}
