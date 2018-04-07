<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getprofiledatafileurl?view=bingads-12 GetProfileDataFileUrl Request Object
     * 
     * @uses ProfileType
     * @used-by BingAdsCampaignManagementService::GetProfileDataFileUrl
     */
    final class GetProfileDataFileUrlRequest
    {
        /**
         * Reserved.
         * @var string
         */
        public $LanguageLocale;

        /**
         * Reserved.
         * @var ProfileType
         */
        public $ProfileType;
    }
}
