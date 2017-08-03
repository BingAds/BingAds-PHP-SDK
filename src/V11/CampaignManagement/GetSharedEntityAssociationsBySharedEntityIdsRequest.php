<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets shared entity associations for the specified negative keyword lists.
     * @link http://msdn.microsoft.com/en-us/library/dn743773(v=msads.110).aspx GetSharedEntityAssociationsBySharedEntityIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsBySharedEntityIds
     */
    final class GetSharedEntityAssociationsBySharedEntityIdsRequest
    {
        public $EntityType;
        public $SharedEntityIds;
        public $SharedEntityType;
    }
}
