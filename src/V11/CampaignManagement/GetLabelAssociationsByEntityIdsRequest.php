<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets label associations by entity identifiers.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getlabelassociationsbyentityids?version=11 GetLabelAssociationsByEntityIds Request Object
     * 
     * @uses EntityType
     * @used-by BingAdsCampaignManagementService::GetLabelAssociationsByEntityIds
     */
    final class GetLabelAssociationsByEntityIdsRequest
    {
        /**
         * The list of entity identifiers used to request label associations.
         * @var integer[]
         */
        public $EntityIds;

        /**
         * Filters the returned associations by entity type.
         * @var EntityType
         */
        public $EntityType;
    }
}
