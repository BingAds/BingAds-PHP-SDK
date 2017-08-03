<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains the keyword and the estimated position in the search results for each match type.
     * @link http://msdn.microsoft.com/en-us/library/mt219294(v=msads.110).aspx KeywordEstimatedPosition Data Object
     * 
     * @uses EstimatedPositionAndTraffic
     * @used-by KeywordIdEstimatedPosition
     * @used-by GetEstimatedPositionByKeywordsResponse
     */
    final class KeywordEstimatedPosition
    {
        public $Keyword;
        public $EstimatedPositions;
    }

}
