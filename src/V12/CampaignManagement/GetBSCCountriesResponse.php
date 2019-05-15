<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the list of supported sales country codes for Microsoft Shopping Campaigns.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getbsccountries?view=bingads-12 GetBSCCountries Response Object
     * 
     * @used-by BingAdsCampaignManagementService::GetBSCCountries
     */
    final class GetBSCCountriesResponse
    {
        /**
         * The list of supported sales country codes for Microsoft Shopping Campaigns.
         * @var string[]
         */
        public $CountryCodes;
    }
}
