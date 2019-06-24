<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets shared entity associations for the specified negative keyword lists.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getsharedentityassociationsbysharedentityids?view=bingads-13 GetSharedEntityAssociationsBySharedEntityIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsBySharedEntityIds
     */
    final class GetSharedEntityAssociationsBySharedEntityIdsRequest
    {
        /**
         * The type of entity corresponding to the specified EntityIds element.
         * @var string
         */
        public $EntityType;

        /**
         * The list of negative keyword list identifiers to return associations with campaigns.
         * @var integer[]
         */
        public $SharedEntityIds;

        /**
         * The type of shared entity to get associations from the account's library.
         * @var string
         */
        public $SharedEntityType;
    }
}
