<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains a keyword idea category.
     * @link http://msdn.microsoft.com/en-us/library/mt784426(v=msads.110).aspx KeywordIdeaCategory Data Object
     * 
     * @used-by GetKeywordIdeaCategoriesResponse
     */
    final class KeywordIdeaCategory
    {
        /**
         * The Bing Ads identifier of the keyword idea category.
         * @var integer
         */
        public $CategoryId;

        /**
         * The name of the keyword idea category.
         * @var string
         */
        public $CategoryName;
    }

}
