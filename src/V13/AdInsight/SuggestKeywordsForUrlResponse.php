<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Suggests the possible keywords for the content located at the specified URL.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/suggestkeywordsforurl?view=bingads-13 SuggestKeywordsForUrl Response Object
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
