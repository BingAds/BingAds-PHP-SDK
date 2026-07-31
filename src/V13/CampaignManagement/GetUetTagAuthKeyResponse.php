<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets an authentication key for a UET (Universal Event Tracking) tag.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getuettagauthkey?view=bingads-13 GetUetTagAuthKey Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetUetTagAuthKey
     */
    final class GetUetTagAuthKeyResponse
    {
        /**
         * The authentication key associated with the specified UET tag.
         * @var string
         */
        public $UetTagAuthKey;

        /**
         * An array of BatchError objects containing error details.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
