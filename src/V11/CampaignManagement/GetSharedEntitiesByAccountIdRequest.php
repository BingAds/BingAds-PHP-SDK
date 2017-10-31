<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the negative keyword lists from the account's library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getsharedentitiesbyaccountid?view=bingads-11 GetSharedEntitiesByAccountId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSharedEntitiesByAccountId
     */
    final class GetSharedEntitiesByAccountIdRequest
    {
        /**
         * The type of shared entity to get from the account's library.
         * @var string
         */
        public $SharedEntityType;
    }
}
