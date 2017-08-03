<?php

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Suggests the possible keywords for the content located at the specified URL.
     * @link http://msdn.microsoft.com/en-us/library/mt219319(v=msads.100).aspx SuggestKeywordsForUrl Response Object
     * 
     * @uses KeywordAndConfidence
     * @used-by BingAdsAdInsightService::SuggestKeywordsForUrl
     */
    final class SuggestKeywordsForUrlResponse
    {
        /**
         * An array of KeywordAndConfidence objects that contains the possible keywords found in the content of the specified URL.
         * @var KeywordAndConfidence[]
         */
        public $Keywords;
    }
}
