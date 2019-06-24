<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets negative keyword list associations for the specified campaigns.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getsharedentityassociationsbyentityids?view=bingads-13 GetSharedEntityAssociationsByEntityIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsByEntityIds
     */
    final class GetSharedEntityAssociationsByEntityIdsRequest
    {
        /**
         * The list of campaign identifiers to return shared negative keyword list associations.
         * @var integer[]
         */
        public $EntityIds;

        /**
         * The type of entity corresponding to the specified EntityIds element.
         * @var string
         */
        public $EntityType;

        /**
         * The type of shared entity to get associations from the account's library.
         * @var string
         */
        public $SharedEntityType;
    }
}
