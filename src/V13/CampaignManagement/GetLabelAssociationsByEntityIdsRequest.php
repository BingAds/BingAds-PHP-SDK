<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets label associations by entity identifiers.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getlabelassociationsbyentityids?view=bingads-13 GetLabelAssociationsByEntityIds Request Object
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
