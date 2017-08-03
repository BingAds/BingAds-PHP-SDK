<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the keyword categories to which the specified keywords belong.
     * @link http://msdn.microsoft.com/en-us/library/mt219320(v=msads.110).aspx GetKeywordCategories Response Object
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
