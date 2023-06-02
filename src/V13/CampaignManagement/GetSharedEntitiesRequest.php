<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets negative keyword lists or website exclusion lists.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getsharedentities?view=bingads-13 GetSharedEntities Request Object
     * 
     * @uses EntityScope
     * @used-by BingAdsCampaignManagementService::GetSharedEntities
     */
    final class GetSharedEntitiesRequest
    {
        /**
         * The type of shared entity to get from the ad account or manager account (customer) library.
         * @var string
         */
        public $SharedEntityType;

        /**
         * Indicates whether the shared entity is available at the ad account (Account) or manager account (Customer) level.
         * @var EntityScope
         */
        public $SharedEntityScope;
    }
}
