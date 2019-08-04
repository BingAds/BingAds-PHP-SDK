<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets a temporary URL that you can use to download industry or job function profile data.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getprofiledatafileurl?view=bingads-12 GetProfileDataFileUrl Request Object
     * 
     * @uses ProfileType
     * @used-by BingAdsCampaignManagementService::GetProfileDataFileUrl
     */
    final class GetProfileDataFileUrlRequest
    {
        /**
         * The language and locale of the profile display names.
         * @var string
         */
        public $LanguageLocale;

        /**
         * Determines whether you want industry or job function profile data.
         * @var ProfileType
         */
        public $ProfileType;
    }
}
