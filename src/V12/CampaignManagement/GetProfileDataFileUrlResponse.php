<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getprofiledatafileurl?view=bingads-12 GetProfileDataFileUrl Response Object
     * 
     * @used-by BingAdsCampaignManagementService::GetProfileDataFileUrl
     */
    final class GetProfileDataFileUrlResponse
    {
        /**
         * Reserved.
         * @var string
         */
        public $FileUrl;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $FileUrlExpiryTimeUtc;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $LastModifiedTimeUtc;
    }
}
