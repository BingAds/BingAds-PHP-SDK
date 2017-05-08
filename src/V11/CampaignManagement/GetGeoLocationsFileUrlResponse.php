<?php
// Generated on 5/7/2017 5:48:21 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets a temporary URL that you can use to download a file that contains the supported geographical location targeting codes.
     * @link http://msdn.microsoft.com/en-us/library/mt791775(v=msads.110).aspx GetGeoLocationsFileUrl Response Object
     * 
     * @used-by BingAdsCampaignManagementService::GetGeoLocationsFileUrl
     */
    final class GetGeoLocationsFileUrlResponse
    {
        /**
         * The file URL that you can use to download the geographical location targeting codes for the version, language, and locale that you requested.
         * @var string
         */
        public $FileUrl;

        /**
         * The date and time that the provided file URL will expire.
         * @var \DateTime
         */
        public $FileUrlExpiryTimeUtc;

        /**
         * The date and time that the geographical locations file for the specified version, language, and locale was last updated.
         * @var \DateTime
         */
        public $LastModifiedTimeUtc;
    }
}
