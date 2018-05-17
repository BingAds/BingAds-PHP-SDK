<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets a temporary URL that you can use to download a file that contains identifiers for the geographical locations that you can target or exclude.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getgeolocationsfileurl?view=bingads-12 GetGeoLocationsFileUrl Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetGeoLocationsFileUrl
     */
    final class GetGeoLocationsFileUrlRequest
    {
        /**
         * The version of the location file that you want to download.
         * @var string
         */
        public $Version;

        /**
         * The language and locale of the geographical location display names.
         * @var string
         */
        public $LanguageLocale;
    }
}
