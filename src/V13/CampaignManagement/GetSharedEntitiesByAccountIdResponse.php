<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the negative keyword lists from the account's library.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getsharedentitiesbyaccountid?view=bingads-13 GetSharedEntitiesByAccountId Response Object
     * 
     * @uses SharedEntity
     * @used-by BingAdsCampaignManagementService::GetSharedEntitiesByAccountId
     */
    final class GetSharedEntitiesByAccountIdResponse
    {
        /**
         * The shared entities from the account's shared library, for example negative keyword lists.
         * @var SharedEntity[]
         */
        public $SharedEntities;
    }
}
