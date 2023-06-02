<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains a suggested keyword and bid value.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordopportunity?view=bingads-13 KeywordOpportunity Data Object
     * 
     * @used-by GetKeywordOpportunitiesResponse
     */
    class KeywordOpportunity extends Opportunity
    {
        /**
         * The identifier of the ad group to apply the suggested keyword to.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The name of the ad group to apply the suggested keyword to.
         * @var string
         */
        public $AdGroupName;

        /**
         * The identifier of the campaign that owns the ad group.
         * @var integer
         */
        public $CampaignId;

        /**
         * The name of the campaign that owns the ad group.
         * @var string
         */
        public $CampaignName;

        /**
         * An indicator of competitive bids for this keyword relative to all search keywords.
         * @var double
         */
        public $Competition;

        /**
         * Estimated increase in clicks if the opportunity is applied.
         * @var double
         */
        public $EstimatedIncreaseInClicks;

        /**
         * Estimated increase in cost if the opportunity is applied.
         * @var double
         */
        public $EstimatedIncreaseInCost;

        /**
         * Estimated increase in impressions if the opportunity is applied.
         * @var integer
         */
        public $EstimatedIncreaseInImpressions;

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
         * The suggested keyword.
         * @var string
         */
        public $SuggestedKeyword;
    }

}
