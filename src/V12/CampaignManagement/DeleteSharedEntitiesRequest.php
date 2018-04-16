<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Deletes negative keyword lists from the account's library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deletesharedentities?view=bingads-12 DeleteSharedEntities Request Object
     * 
     * @uses SharedEntity
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntities
     */
    final class DeleteSharedEntitiesRequest
    {
        /**
         * The negative keyword lists to delete from the account's shared library, for example negative keyword lists.
         * @var SharedEntity[]
         */
        public $SharedEntities;
    }
}
