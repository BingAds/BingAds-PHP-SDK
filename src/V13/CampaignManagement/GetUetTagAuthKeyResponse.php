<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getuettagauthkey?view=bingads-13 GetUetTagAuthKey Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetUetTagAuthKey
     */
    final class GetUetTagAuthKeyResponse
    {
        /**
         * Reserved.
         * @var string
         */
        public $UetTagAuthKey;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
