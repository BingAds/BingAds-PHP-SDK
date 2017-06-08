<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains the keyword and a list of keyword categories that the keyword might belong to.
     * @link http://msdn.microsoft.com/en-us/library/mt219282(v=msads.110).aspx KeywordCategoryResult Data Object
     * 
     * @uses KeywordCategory
     * @used-by GetKeywordCategoriesResponse
     */
    final class KeywordCategoryResult
    {
        /**
         * The keyword being categorized.
         * @var string
         */
        public $Keyword;

        /**
         * An array of KeywordCategory objects that contains a keyword category and a score that indicates the confidence that the keyword belongs to that keyword category.
         * @var KeywordCategory[]
         */
        public $KeywordCategories;
    }

}
