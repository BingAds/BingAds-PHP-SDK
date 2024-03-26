<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a KeywordRecommendation data object.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordrecommendation?view=bingads-13 KeywordRecommendation Data Object
     */
    final class KeywordRecommendation extends RecommendationBase
    {
        /**
         * An indicator of competitive bids for this keyword relative to all search keywords.
         * @var double
         */
        public $Competition;

        /**
         * The match type that the suggested bid applies to.
         * @var integer
         */
        public $MatchType;

        /**
         * The estimated monthly volume of user search queries that may match the suggested keyword for the corresponding MatchType element.
         * @var integer
         */
        public $MonthlySearches;

        /**
         * The suggested bid that may result in your ads serving on the first page of the search query results.
         * @var double
         */
        public $SuggestedBid;

        /**
         * The text of the keyword (at most 80 characters and 10 words).
         * @var string
         */
        public $SuggestedKeyword;
    }

}
