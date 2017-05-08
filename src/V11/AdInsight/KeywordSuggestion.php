<?php
// Generated on 5/7/2017 5:48:15 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains a list of suggested keywords that may perform better than the specified keyword.
     * @link http://msdn.microsoft.com/en-us/library/mt219313(v=msads.110).aspx KeywordSuggestion Data Object
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
