<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets negative keyword lists or website exclusion lists.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getsharedentities?view=bingads-13 GetSharedEntities Response Object
     * 
     * @uses SharedEntity
     * @used-by BingAdsCampaignManagementService::GetSharedEntities
     */
    final class GetSharedEntitiesResponse
    {
        /**
         * The negative keyword lists or website exclusion lists.
         * @var SharedEntity[]
         */
        public $SharedEntities;
    }
}
