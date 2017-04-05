<?php
// Generated on 4/4/2017 5:50:25 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Gets the keyword categories to which the specified keywords belong.
     * @link http://msdn.microsoft.com/en-us/library/mt219320(v=msads.100).aspx GetKeywordCategories Response Object
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
