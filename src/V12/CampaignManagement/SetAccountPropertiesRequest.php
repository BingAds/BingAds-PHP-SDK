<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Sets account level properties by name.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/setaccountproperties?view=bingads-12 SetAccountProperties Request Object
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
