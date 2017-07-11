<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Suggests the possible keywords for the content located at the specified URL.
     * @link http://msdn.microsoft.com/en-us/library/mt219319(v=msads.110).aspx SuggestKeywordsForUrl Response Object
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
