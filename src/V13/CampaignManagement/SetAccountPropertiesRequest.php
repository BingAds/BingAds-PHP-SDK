<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Sets account level properties by name.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/setaccountproperties?view=bingads-13 SetAccountProperties Request Object
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
