<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains a list of suggested keywords that may perform better than the specified keyword.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordsuggestion?view=bingads-13 KeywordSuggestion Data Object
     * 
     * @uses KeywordAndConfidence
     * @used-by SuggestKeywordsFromExistingKeywordsResponse
     */
    final class KeywordSuggestion
    {
        /**
         * The keyword to which the suggested keywords apply.
         * @var string
         */
        public $Keyword;

        /**
         * A KeywordAndConfidence array that contains a list of suggested keywords and, for each keyword, a score that indicates the probability that using the keyword would result in an ad being included in the results of a search query.
         * @var KeywordAndConfidence[]
         */
        public $SuggestionsAndConfidence;
    }

}
