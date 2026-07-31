<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets an authentication key for a UET (Universal Event Tracking) tag.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getuettagauthkey?view=bingads-13 GetUetTagAuthKey Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetUetTagAuthKey
     */
    final class GetUetTagAuthKeyRequest
    {
        /**
         * The unique identifier of the UET tag used to retrieve or generate an authentication key.
         * @var integer
         */
        public $UetTagId;
    }
}
