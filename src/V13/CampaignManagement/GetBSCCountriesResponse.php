<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the list of supported sales country codes for Microsoft Shopping Campaigns.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getbsccountries?view=bingads-13 GetBSCCountries Response Object
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
