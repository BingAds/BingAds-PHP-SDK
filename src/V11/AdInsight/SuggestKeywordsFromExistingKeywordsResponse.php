<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Suggests keywords that could perform better than the specified keywords.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/suggestkeywordsfromexistingkeywords?version=11 SuggestKeywordsFromExistingKeywords Response Object
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
