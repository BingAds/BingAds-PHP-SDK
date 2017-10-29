<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the list of keyword idea categories.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/getkeywordideacategories?version=11 GetKeywordIdeaCategories Response Object
     * 
     * @uses KeywordIdeaCategory
     * @used-by BingAdsAdInsightService::GetKeywordIdeaCategories
     */
    final class GetKeywordIdeaCategoriesResponse
    {
        /**
         * The list of keyword idea categories.
         * @var KeywordIdeaCategory[]
         */
        public $KeywordIdeaCategories;
    }
}
