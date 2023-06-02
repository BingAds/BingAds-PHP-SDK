<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the list of keyword ideas.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getkeywordideas?view=bingads-13 GetKeywordIdeas Request Object
     * 
     * @uses KeywordIdeaAttribute
     * @uses SearchParameter
     * @used-by BingAdsAdInsightService::GetKeywordIdeas
     */
    final class GetKeywordIdeasRequest
    {
        /**
         * Determines whether you want new keyword ideas, or if you only want keyword attributes for the set of keywords that you specified in the SearchParameters list.
         * @var boolean
         */
        public $ExpandIdeas;

        /**
         * The keyword idea attributes that you want included in the response e.g., Keyword, Competition, MonthlySearchCounts, and SuggestedBid.
         * @var KeywordIdeaAttribute[]
         */
        public $IdeaAttributes;

        /**
         * The search parameters define your criteria and filters for the requested keyword ideas.
         * @var SearchParameter[]
         */
        public $SearchParameters;
    }
}
