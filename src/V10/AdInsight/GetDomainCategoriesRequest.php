<?php
// Generated on 4/4/2017 5:50:25 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Gets the list of categories available for the website domain and language.
     * @link http://msdn.microsoft.com/en-us/library/mt772351(v=msads.100).aspx GetDomainCategories Request Object
     * 
     * @used-by BingAdsAdInsightService::GetDomainCategories
     */
    final class GetDomainCategoriesRequest
    {
        /**
         * The category name filter.
         * @var string
         */
        public $CategoryName;

        /**
         * The website name corresponding to the pages you want your ads to target.
         * @var string
         */
        public $DomainName;

        /**
         * The language of the website domain.
         * @var string
         */
        public $Language;
    }
}
