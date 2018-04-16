<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets account level properties by name.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getaccountproperties?view=bingads-12 GetAccountProperties Response Object
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
