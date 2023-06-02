<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains a suggested keyword and a confidence score.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordandconfidence?view=bingads-13 KeywordAndConfidence Data Object
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
         * A score from 0.0 to 1.0 that indicates the probability that the keyword would match a user's search query.
         * @var double
         */
        public $ConfidenceScore;
    }

}
