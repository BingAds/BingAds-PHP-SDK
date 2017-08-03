<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets negative keyword list associations for the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn743771(v=msads.110).aspx GetSharedEntityAssociationsByEntityIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsByEntityIds
     */
    final class GetSharedEntityAssociationsByEntityIdsRequest
    {
        public $EntityIds;
        public $EntityType;
        public $SharedEntityType;
    }
}
