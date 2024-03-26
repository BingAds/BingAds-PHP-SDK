<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getdataexclusionsbyaccountid?view=bingads-13 GetDataExclusionsByAccountId Response Object
     * 
     * @uses DataExclusion
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetDataExclusionsByAccountId
     */
    final class GetDataExclusionsByAccountIdResponse
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
