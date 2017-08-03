<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines a keyword with match type.
     * @link http://msdn.microsoft.com/en-us/library/mt784405(v=msads.110).aspx Keyword Data Object
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
        public $MatchType;

        /**
         * The keyword text.
         * @var string
         */
        public $Text;
    }

}
