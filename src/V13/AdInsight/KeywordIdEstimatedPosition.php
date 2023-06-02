<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains the identifier of a keyword and the estimated search results position for the keyword and match type.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordidestimatedposition?view=bingads-13 KeywordIdEstimatedPosition Data Object
     * 
     * @uses KeywordEstimatedPosition
     * @used-by GetEstimatedPositionByKeywordIdsResponse
     */
    final class KeywordIdEstimatedPosition
    {
        /**
         * The identifier of the keyword to which the estimated position applies.
         * @var integer
         */
        public $KeywordId;

        /**
         * An object that contains the keyword string and estimated position in the search results given the specified maximum bid.
         * @var KeywordEstimatedPosition
         */
        public $KeywordEstimatedPosition;
    }

}
