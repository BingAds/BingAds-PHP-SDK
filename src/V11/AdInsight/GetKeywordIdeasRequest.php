<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the list of keyword ideas.
     * @link http://msdn.microsoft.com/en-us/library/mt784397(v=msads.110).aspx GetKeywordIdeas Request Object
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
         * The keyword idea attributes that you want included in the response e.
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
