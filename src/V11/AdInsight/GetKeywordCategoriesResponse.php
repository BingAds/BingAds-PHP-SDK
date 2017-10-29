<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the keyword categories to which the specified keywords belong.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/getkeywordcategories?version=11 GetKeywordCategories Response Object
     * 
     * @uses KeywordCategoryResult
     * @used-by BingAdsAdInsightService::GetKeywordCategories
     */
    final class GetKeywordCategoriesResponse
    {
        /**
         * An array of KeywordCategoryResult data objects.
         * @var KeywordCategoryResult[]
         */
        public $Result;
    }
}
