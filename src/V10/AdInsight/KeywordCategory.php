<?php
// Generated on 4/4/2017 5:50:25 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Defines an object that contains a keyword category and a confidence score.
     * @link http://msdn.microsoft.com/en-us/library/mt219331(v=msads.100).aspx KeywordCategory Data Object
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
