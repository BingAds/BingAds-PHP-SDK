<?php

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Defines an object that contains a keyword and corresponding match types.
     * @link http://msdn.microsoft.com/en-us/library/mt219342(v=msads.100).aspx KeywordAndMatchType Data Object
     * 
     * @uses MatchType
     * @used-by GetEstimatedBidByKeywordsRequest
     */
    final class KeywordAndMatchType
    {
        /**
         * The keyword text.
         * @var string
         */
        public $KeywordText;

        /**
         * The corresponding match types for the keyword.
         * @var MatchType[]
         */
        public $MatchTypes;
    }

}
