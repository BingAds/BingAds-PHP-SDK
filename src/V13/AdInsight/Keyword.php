<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a keyword with match type.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keyword?view=bingads-13 Keyword Data Object
     * 
     * @uses MatchType
     * @used-by IdeaTextSearchParameter
     * @used-by KeywordEstimate
     * @used-by KeywordEstimator
     */
    final class Keyword
    {
        /**
         * The Microsoft Advertising identifier of the keyword.
         * @var integer
         */
        public $Id;

        /**
         * The match type of the keyword.
         * @var MatchType
         */
        public $MatchType;

        /**
         * The keyword text.
         * @var string
         */
        public $Text;
    }

}
