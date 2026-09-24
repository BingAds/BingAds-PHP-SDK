<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retreives company list details.
     * @link https://learn.microsoft.com/en-us/advertising/campaign-management-service/getcompanylistdetails?view=bingads-13 GetCompanyListDetails Response Object
     * 
     * @uses CompanyName
     * @used-by BingAdsCampaignManagementService::GetCompanyListDetails
     */
    final class GetCompanyListDetailsResponse
    {
        /**
         * An array of company name objects.
         * @var CompanyName[]
         */
        public $CompanyListDetails;
    }
}
