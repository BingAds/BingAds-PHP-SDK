<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getprofiledatafileurl?view=bingads-11 GetProfileDataFileUrl Request Object
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
