<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets account level properties by name.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getaccountproperties?view=bingads-13 GetAccountProperties Response Object
     * 
     * @uses AccountProperty
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAccountProperties
     */
    final class GetAccountPropertiesResponse
    {
        /**
         * An array of account properties.
         * @var AccountProperty[]
         */
        public $AccountProperties;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
