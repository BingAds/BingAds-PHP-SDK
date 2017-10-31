<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines a keyword with match type.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/keyword?view=bingads-11 Keyword Data Object
     * 
     * @uses MatchType
     * @used-by IdeaTextSearchParameter
     * @used-by KeywordEstimate
     * @used-by KeywordEstimator
     */
    final class Keyword
    {
        /**
         * The Bing Ads identifier of the keyword.
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
