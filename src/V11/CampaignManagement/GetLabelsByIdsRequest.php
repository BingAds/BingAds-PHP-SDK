<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets labels by label identifiers.
     * @link http://msdn.microsoft.com/en-us/library/mt803291(v=msads.110).aspx GetLabelsByIds Request Object
     * 
     * @uses Paging
     * @used-by BingAdsCampaignManagementService::GetLabelsByIds
     */
    final class GetLabelsByIdsRequest
    {
        public $LabelIds;
        public $PageInfo;
    }
}
