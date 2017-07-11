<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Suggests the possible keywords for the content located at the specified URL.
     * @link http://msdn.microsoft.com/en-us/library/mt219319(v=msads.110).aspx SuggestKeywordsForUrl Request Object
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
