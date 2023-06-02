<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the list of keyword ideas.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getkeywordideas?view=bingads-13 GetKeywordIdeas Response Object
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
