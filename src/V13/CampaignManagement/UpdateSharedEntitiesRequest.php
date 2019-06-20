<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates negative keyword lists within the account's library.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/updatesharedentities?view=bingads-13 UpdateSharedEntities Request Object
     * 
     * @uses SharedEntity
     * @used-by BingAdsCampaignManagementService::UpdateSharedEntities
     */
    final class UpdateSharedEntitiesRequest
    {
        /**
         * The negative keyword lists to update within the account's shared library.
         * @var SharedEntity[]
         */
        public $SharedEntities;
    }
}
