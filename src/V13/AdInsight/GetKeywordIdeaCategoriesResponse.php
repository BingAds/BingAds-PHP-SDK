<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the list of keyword idea categories.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getkeywordideacategories?view=bingads-13 GetKeywordIdeaCategories Response Object
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
