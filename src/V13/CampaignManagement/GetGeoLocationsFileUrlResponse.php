<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets a temporary URL that you can use to download a file that contains identifiers for the geographical locations that you can target or exclude.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getgeolocationsfileurl?view=bingads-13 GetGeoLocationsFileUrl Response Object
     * 
     * @used-by BingAdsCampaignManagementService::GetGeoLocationsFileUrl
     */
    final class GetGeoLocationsFileUrlResponse
    {
        /**
         * The file URL that you can use to download the geographical location data for the version, language, and locale that you requested.
         * @var string
         */
        public $FileUrl;

        /**
         * The date and time that the provided file URL will expire.
         * @var \DateTime
         */
        public $FileUrlExpiryTimeUtc;

        /**
         * The date and time that the geographical location data for the specified version, language, and locale was last updated.
         * @var \DateTime
         */
        public $LastModifiedTimeUtc;
    }
}
