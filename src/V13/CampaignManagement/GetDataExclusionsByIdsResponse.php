<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getdataexclusionsbyids?view=bingads-13 GetDataExclusionsByIds Response Object
     * 
     * @uses DataExclusion
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetDataExclusionsByIds
     */
    final class GetDataExclusionsByIdsResponse
    {
        /**
         * Reserved.
         * @var DataExclusion[]
         */
        public $DataExclusions;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
