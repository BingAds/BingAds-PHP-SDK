<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the list of keyword ideas.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/getkeywordideas?version=11 GetKeywordIdeas Response Object
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
