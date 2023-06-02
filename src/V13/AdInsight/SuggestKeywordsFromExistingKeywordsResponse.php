<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Suggests keywords that could perform better than the specified keywords.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/suggestkeywordsfromexistingkeywords?view=bingads-13 SuggestKeywordsFromExistingKeywords Response Object
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
