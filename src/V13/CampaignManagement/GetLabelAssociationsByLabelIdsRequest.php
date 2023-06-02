<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets label associations by label identifiers.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getlabelassociationsbylabelids?view=bingads-13 GetLabelAssociationsByLabelIds Request Object
     * 
     * @uses EntityType
     * @uses Paging
     * @used-by BingAdsCampaignManagementService::GetLabelAssociationsByLabelIds
     */
    final class GetLabelAssociationsByLabelIdsRequest
    {
        /**
         * Filters the returned associations by entity type.
         * @var EntityType
         */
        public $EntityType;

        /**
         * The list of label identifiers used to request label associations.
         * @var integer[]
         */
        public $LabelIds;

        /**
         * Determines the index and size of label association results per page.
         * @var Paging
         */
        public $PageInfo;
    }
}
