<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes negative keyword lists from the ad account library, or deletes website exclusion lists from the manager account (customer) library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletesharedentities?view=bingads-13 DeleteSharedEntities Request Object
     * 
     * @uses SharedEntity
     * @uses EntityScope
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntities
     */
    final class DeleteSharedEntitiesRequest
    {
        /**
         * The negative keyword lists or website exclusion lists to delete.
         * @var SharedEntity[]
         */
        public $SharedEntities;

        /**
         * Indicates whether the shared entity is available at the ad account (Account) or manager account (Customer) level.
         * @var EntityScope
         */
        public $SharedEntityScope;
    }
}
