<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains a keyword category and a confidence score.
     * @link http://msdn.microsoft.com/en-us/library/mt219331(v=msads.110).aspx KeywordCategory Data Object
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
