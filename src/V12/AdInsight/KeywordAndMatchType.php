<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Defines an object that contains a keyword and corresponding match types.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/keywordandmatchtype?view=bingads-12 KeywordAndMatchType Data Object
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
