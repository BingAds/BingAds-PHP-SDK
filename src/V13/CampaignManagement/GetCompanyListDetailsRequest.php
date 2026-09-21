<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retreives company list details.
     * @link https://learn.microsoft.com/en-us/advertising/campaign-management-service/getcompanylistdetails?view=bingads-13 GetCompanyListDetails Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetCompanyListDetails
     */
    final class GetCompanyListDetailsRequest
    {
        /**
         * The company list ID.
         * @var integer
         */
        public $CompanyListId;
    }
}
