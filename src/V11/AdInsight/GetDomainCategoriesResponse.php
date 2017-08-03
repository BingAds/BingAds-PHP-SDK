<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the list of categories available for the website domain and language.
     * @link http://msdn.microsoft.com/en-us/library/mt772351(v=msads.110).aspx GetDomainCategories Response Object
     * 
     * @uses DomainCategory
     * @used-by BingAdsAdInsightService::GetDomainCategories
     */
    final class GetDomainCategoriesResponse
    {
        /**
         * The list of domain categories.
         * @var DomainCategory[]
         */
        public $Categories;
    }
}
