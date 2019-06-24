<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the negative keyword lists from the account's library.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getsharedentitiesbyaccountid?view=bingads-13 GetSharedEntitiesByAccountId Request Object
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
