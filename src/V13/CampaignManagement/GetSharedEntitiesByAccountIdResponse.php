<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets negative keyword lists.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getsharedentitiesbyaccountid?view=bingads-13 GetSharedEntitiesByAccountId Response Object
     * 
     * @uses SharedEntity
     * @used-by BingAdsCampaignManagementService::GetSharedEntitiesByAccountId
     */
    final class GetSharedEntitiesByAccountIdResponse
    {
        /**
         * The negative keyword lists from the shared library.
         * @var SharedEntity[]
         */
        public $SharedEntities;
    }
}
