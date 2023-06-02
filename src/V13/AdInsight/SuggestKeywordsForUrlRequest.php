<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Suggests the possible keywords for the content located at the specified URL.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/suggestkeywordsforurl?view=bingads-13 SuggestKeywordsForUrl Request Object
     * 
     * @used-by BingAdsAdInsightService::SuggestKeywordsForUrl
     */
    final class SuggestKeywordsForUrlRequest
    {
        /**
         * The URL of the webpage to scan for possible keywords.
         * @var string
         */
        public $Url;

        /**
         * The language used by the website.
         * @var string
         */
        public $Language;

        /**
         * A positive integer value that specifies the maximum number of keywords to return.
         * @var integer
         */
        public $MaxKeywords;

        /**
         * A filter value that limits the keywords that the service returns to those that have a confidence score that is greater than or equal to the specified score.
         * @var double
         */
        public $MinConfidenceScore;

        /**
         * A value that determines whether the results exclude brand keywords.
         * @var boolean
         */
        public $ExcludeBrand;
    }
}
