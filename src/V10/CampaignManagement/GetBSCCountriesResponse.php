<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the list of supported sales country codes for Bing Shopping campaigns.
     * @link http://msdn.microsoft.com/en-us/library/mt750281(v=msads.100).aspx GetBSCCountries Response Object
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
