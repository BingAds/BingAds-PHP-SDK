<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the negative keyword lists or website exclusion lists.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatesharedentities?view=bingads-13 UpdateSharedEntities Request Object
     * 
     * @uses SharedEntity
     * @uses EntityScope
     * @used-by BingAdsCampaignManagementService::UpdateSharedEntities
     */
    final class UpdateSharedEntitiesRequest
    {
        /**
         * The negative keyword lists or website exclusion lists to update.
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
