<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the negative keyword lists from the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743728(v=msads.110).aspx GetSharedEntitiesByAccountId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSharedEntitiesByAccountId
     */
    final class GetSharedEntitiesByAccountIdRequest
    {
        public $SharedEntityType;
    }
}
