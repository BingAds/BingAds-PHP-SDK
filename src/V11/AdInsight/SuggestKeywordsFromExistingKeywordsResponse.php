<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Suggests keywords that could perform better than the specified keywords.
     * @link http://msdn.microsoft.com/en-us/library/mt219311(v=msads.110).aspx SuggestKeywordsFromExistingKeywords Response Object
     * 
     * @uses KeywordSuggestion
     * @used-by BingAdsAdInsightService::SuggestKeywordsFromExistingKeywords
     */
    final class SuggestKeywordsFromExistingKeywordsResponse
    {
        /**
         * An array of KeywordSuggestion data objects.
         * @var KeywordSuggestion[]
         */
        public $KeywordSuggestions;
    }
}
