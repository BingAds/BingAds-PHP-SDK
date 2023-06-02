<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the negative keyword list to campaign associations by negative keyword list IDs, or website exclusion list to ad account associations by website exclusion list IDs.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getsharedentityassociationsbysharedentityids?view=bingads-13 GetSharedEntityAssociationsBySharedEntityIds Request Object
     * 
     * @uses EntityScope
     * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsBySharedEntityIds
     */
    final class GetSharedEntityAssociationsBySharedEntityIdsRequest
    {
        /**
         * The type of entity corresponding to the specified SharedEntityIds element.
         * @var string
         */
        public $EntityType;

        /**
         * The list of either negative keyword list or website exclusion list identifiers.
         * @var integer[]
         */
        public $SharedEntityIds;

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
