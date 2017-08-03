<?php

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Defines an object that contains a suggested keyword and a confidence score.
     * @link http://msdn.microsoft.com/en-us/library/mt219341(v=msads.100).aspx KeywordAndConfidence Data Object
     * 
     * @used-by KeywordSuggestion
     * @used-by SuggestKeywordsForUrlResponse
     */
    final class KeywordAndConfidence
    {
        /**
         * The suggested keyword.
         * @var string
         */
        public $SuggestedKeyword;

        /**
         * A score from 0.
         * @var double
         */
        public $ConfidenceScore;
    }

}
