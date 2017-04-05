<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets associations between a campaign and a shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743771(v=msads.100).aspx GetSharedEntityAssociationsByEntityIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsByEntityIds
     */
    final class GetSharedEntityAssociationsByEntityIdsRequest
    {
        /**
         * An array of entity identifiers to return associations between a campaign and a shared entity such as a negative keyword list.
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
