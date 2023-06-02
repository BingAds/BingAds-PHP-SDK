<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets a temporary URL that you can use to download industry or job function profile data.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getprofiledatafileurl?view=bingads-13 GetProfileDataFileUrl Response Object
     * 
     * @used-by BingAdsCampaignManagementService::GetProfileDataFileUrl
     */
    final class GetProfileDataFileUrlResponse
    {
        /**
         * The file URL that you can use to download the profile data for the profile type, language, and locale that you requested.
         * @var string
         */
        public $FileUrl;

        /**
         * The date and time that the provided file URL will expire.
         * @var \DateTime
         */
        public $FileUrlExpiryTimeUtc;

        /**
         * The date and time that the profile data for the profile type, language, and locale was last updated.
         * @var \DateTime
         */
        public $LastModifiedTimeUtc;
    }
}
