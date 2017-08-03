<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the list of keyword ideas.
     * @link http://msdn.microsoft.com/en-us/library/mt784397(v=msads.110).aspx GetKeywordIdeas Response Object
     * 
     * @uses KeywordIdea
     * @used-by BingAdsAdInsightService::GetKeywordIdeas
     */
    final class GetKeywordIdeasResponse
    {
        /**
         * The list of keyword ideas.
         * @var KeywordIdea[]
         */
        public $KeywordIdeas;
    }
}
