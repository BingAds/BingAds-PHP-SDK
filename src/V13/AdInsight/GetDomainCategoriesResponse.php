<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the list of categories available for the website domain and language.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getdomaincategories?view=bingads-13 GetDomainCategories Response Object
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
