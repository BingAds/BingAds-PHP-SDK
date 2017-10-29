<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the list of categories available for the website domain and language.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/getdomaincategories?version=11 GetDomainCategories Response Object
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
