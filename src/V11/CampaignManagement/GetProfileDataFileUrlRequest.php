<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets a temporary URL that you can use to download company name, industry, or job function profile data.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getprofiledatafileurl?view=bingads-11 GetProfileDataFileUrl Request Object
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
         * Determines whether you want company name, industry, or job function profile data.
         * @var ProfileType
         */
        public $ProfileType;
    }
}
