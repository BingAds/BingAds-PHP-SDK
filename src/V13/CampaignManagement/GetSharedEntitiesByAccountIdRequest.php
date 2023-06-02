<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets negative keyword lists.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getsharedentitiesbyaccountid?view=bingads-13 GetSharedEntitiesByAccountId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSharedEntitiesByAccountId
     */
    final class GetSharedEntitiesByAccountIdRequest
    {
        /**
         * The type of shared entity to get from the ad account shared library.
         * @var string
         */
        public $SharedEntityType;
    }
}
