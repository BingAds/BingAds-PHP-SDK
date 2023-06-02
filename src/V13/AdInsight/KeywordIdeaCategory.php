<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains a keyword idea category.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordideacategory?view=bingads-13 KeywordIdeaCategory Data Object
     * 
     * @used-by GetKeywordIdeaCategoriesResponse
     */
    final class KeywordIdeaCategory
    {
        /**
         * The Microsoft Advertising identifier of the keyword idea category.
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
