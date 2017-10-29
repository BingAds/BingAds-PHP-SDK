<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains a keyword category and a confidence score.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/keywordcategory?version=11 KeywordCategory Data Object
     * 
     * @used-by KeywordCategoryResult
     */
    final class KeywordCategory
    {
        /**
         * The keyword category that the keyword might belong to.
         * @var string
         */
        public $Category;

        /**
         * A score from 0.
         * @var double
         */
        public $ConfidenceScore;
    }

}
