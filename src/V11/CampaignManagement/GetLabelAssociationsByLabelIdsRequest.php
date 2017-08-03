<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets label associations by label identifiers.
     * @link http://msdn.microsoft.com/en-us/library/mt803287(v=msads.110).aspx GetLabelAssociationsByLabelIds Request Object
     * 
     * @uses EntityType
     * @uses Paging
     * @used-by BingAdsCampaignManagementService::GetLabelAssociationsByLabelIds
     */
    final class GetLabelAssociationsByLabelIdsRequest
    {
        public $EntityType;
        public $LabelIds;
        public $PageInfo;
    }
}
