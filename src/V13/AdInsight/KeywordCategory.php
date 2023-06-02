<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains a keyword category and a confidence score.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordcategory?view=bingads-13 KeywordCategory Data Object
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
         * A score from 0.0 to 1.0 that indicates the likelihood that the keyword belongs to the category.
         * @var double
         */
        public $ConfidenceScore;
    }

}
