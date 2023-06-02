<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the negative keyword list to campaign associations by campaign IDs, or website exclusion list to ad account associations by ad account IDs.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getsharedentityassociationsbyentityids?view=bingads-13 GetSharedEntityAssociationsByEntityIds Request Object
     * 
     * @uses EntityScope
     * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsByEntityIds
     */
    final class GetSharedEntityAssociationsByEntityIdsRequest
    {
        /**
         * The list of either campaign or ad account identifiers.
         * @var integer[]
         */
        public $EntityIds;

        /**
         * The type of entity corresponding to the specified EntityIds element.
         * @var string
         */
        public $EntityType;

        /**
         * The type of shared entity to get associations.
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
