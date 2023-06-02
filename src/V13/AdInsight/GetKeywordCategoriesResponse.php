<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the keyword categories to which the specified keywords belong.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getkeywordcategories?view=bingads-13 GetKeywordCategories Response Object
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
