<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Search for profile data by company name.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/searchcompanies?view=bingads-13 SearchCompanies Response Object
     * 
     * @uses Company
     * @used-by BingAdsCampaignManagementService::SearchCompanies
     */
    final class SearchCompaniesResponse
    {
        /**
         * The list of companies that match the requested company name filter.
         * @var Company[]
         */
        public $Companies;
    }
}
