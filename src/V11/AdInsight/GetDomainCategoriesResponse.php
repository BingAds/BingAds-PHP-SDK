<?php
// Generated on 7/10/2017 3:08:16 PM

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
