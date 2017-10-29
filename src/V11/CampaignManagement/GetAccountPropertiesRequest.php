<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets account level properties by name.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getaccountproperties?version=11 GetAccountProperties Request Object
     * 
     * @uses AccountPropertyName
     * @used-by BingAdsCampaignManagementService::GetAccountProperties
     */
    final class GetAccountPropertiesRequest
    {
        /**
         * The names of account properties that you want to get.
         * @var AccountPropertyName[]
         */
        public $AccountPropertyNames;
    }
}
