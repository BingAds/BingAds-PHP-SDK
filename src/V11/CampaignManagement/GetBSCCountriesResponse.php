<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the list of supported sales country codes for Bing Shopping campaigns.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getbsccountries?version=11 GetBSCCountries Response Object
     * 
     * @used-by BingAdsCampaignManagementService::GetBSCCountries
     */
    final class GetBSCCountriesResponse
    {
        /**
         * The list of supported sales country codes for Bing Shopping campaigns.
         * @var string[]
         */
        public $CountryCodes;
    }
}
