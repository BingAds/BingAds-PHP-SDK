<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Gets the list of keyword ideas.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/getkeywordideas?view=bingads-12 GetKeywordIdeas Response Object
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
