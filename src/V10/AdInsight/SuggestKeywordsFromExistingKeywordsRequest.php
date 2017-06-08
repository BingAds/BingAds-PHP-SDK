<?php
// Generated on 6/7/2017 5:54:05 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Suggests keywords that could perform better than the specified keywords.
     * @link http://msdn.microsoft.com/en-us/library/mt219311(v=msads.100).aspx SuggestKeywordsFromExistingKeywords Request Object
     * 
     * @used-by BingAdsAdInsightService::SuggestKeywordsFromExistingKeywords
     */
    final class SuggestKeywordsFromExistingKeywordsRequest
    {
        /**
         * An array of keywords for which you want to get suggested keywords that could perform better.
         * @var string[]
         */
        public $Keywords;

        /**
         * The language in which the keyword is written.
         * @var string
         */
        public $Language;

        /**
         * The country codes of the countries/regions to use as the source of data for determining the suggested keywords.
         * @var string[]
         */
        public $PublisherCountries;

        /**
         * The maximum number of keyword suggestions to return per specified keyword.
         * @var integer
         */
        public $MaxSuggestionsPerKeyword;

        /**
         * The provider to use to generate the keyword suggestions.
         * @var integer
         */
        public $SuggestionType;

        /**
         * A Boolean value that determines whether to remove duplicate keywords from the list of suggested keywords.
         * @var boolean
         */
        public $RemoveDuplicates;

        /**
         * A value that determines whether the results exclude brand keywords.
         * @var boolean
         */
        public $ExcludeBrand;

        /**
         * The identifier of the ad group for suggested keywords.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The identifier of the campaign for suggested keywords.
         * @var integer
         */
        public $CampaignId;
    }
}
