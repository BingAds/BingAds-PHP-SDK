<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Sets account level properties by name.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/setaccountproperties?version=11 SetAccountProperties Request Object
     * 
     * @uses AccountProperty
     * @used-by BingAdsCampaignManagementService::SetAccountProperties
     */
    final class SetAccountPropertiesRequest
    {
        /**
         * The list of account properties that you want to set.
         * @var AccountProperty[]
         */
        public $AccountProperties;
    }
}
