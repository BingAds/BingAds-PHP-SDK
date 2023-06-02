<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets account level properties by name.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getaccountproperties?view=bingads-13 GetAccountProperties Request Object
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
