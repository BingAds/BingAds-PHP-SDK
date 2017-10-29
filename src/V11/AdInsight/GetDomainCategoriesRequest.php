<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the list of categories available for the website domain and language.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/getdomaincategories?version=11 GetDomainCategories Request Object
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
