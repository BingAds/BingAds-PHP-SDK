<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains a suggested keyword with historical statistics, like monthly search volume, competition, suggested minimum bid, and ad impression share.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordidea?view=bingads-13 KeywordIdea Data Object
     * 
     * @uses CompetitionLevel
     * @uses SourceType
     * @used-by GetKeywordIdeasResponse
     */
    final class KeywordIdea
    {
        /**
         * The negative ad group identifier that groups keyword ideas into suggested new ad groups.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The suggested name of the ad group for the keyword idea.
         * @var string
         */
        public $AdGroupName;

        /**
         * Ad impression share is the number of impressions you've received divided by the total number of searches for the location and network you're targeting that matched the keyword exactly in the last calendar month.
         * @var double
         */
        public $AdImpressionShare;

        /**
         * Determined by the number of advertisers bidding on this keyword, relative to all other keywords across Microsoft Advertising.
         * @var CompetitionLevel
         */
        public $Competition;

        /**
         * The suggested keyword.
         * @var string
         */
        public $Keyword;

        /**
         * The number of times this keyword was used as a search term for each month within the date range and targeting settings you've selected.
         * @var integer[]
         */
        public $MonthlySearchCounts;

        /**
         * The keyword relevance score.
         * @var double
         */
        public $Relevance;

        /**
         * The source or seed for the keyword.
         * @var SourceType
         */
        public $Source;

        /**
         * The suggested minimum bid for this keyword.
         * @var double
         */
        public $SuggestedBid;
    }

}
