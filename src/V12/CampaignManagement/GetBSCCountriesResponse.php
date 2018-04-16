<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the list of supported sales country codes for Bing Shopping campaigns.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getbsccountries?view=bingads-12 GetBSCCountries Response Object
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
