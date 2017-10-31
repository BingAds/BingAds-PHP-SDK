<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets a temporary URL that you can use to download a file that contains the supported geographical location targeting codes.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getgeolocationsfileurl?view=bingads-11 GetGeoLocationsFileUrl Request Object
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
         * The language and locale of the geographical location code descriptions.
         * @var string
         */
        public $LanguageLocale;
    }
}
