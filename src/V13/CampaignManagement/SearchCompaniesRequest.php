<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Search for profile data by company name.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/searchcompanies?view=bingads-13 SearchCompanies Request Object
     * 
     * @used-by BingAdsCampaignManagementService::SearchCompanies
     */
    final class SearchCompaniesRequest
    {
        /**
         * The company name filter string.
         * @var string
         */
        public $CompanyNameFilter;

        /**
         * The language and locale of the profile display names.
         * @var string
         */
        public $LanguageLocale;
    }
}
