<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets account level properties by name.
     * @link http://msdn.microsoft.com/en-us/library/mt803284(v=msads.110).aspx GetAccountProperties Request Object
     * 
     * @uses AccountPropertyName
     * @used-by BingAdsCampaignManagementService::GetAccountProperties
     */
    final class GetAccountPropertiesRequest
    {
        public $AccountPropertyNames;
    }
}
