<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getdataexclusionsbyids?view=bingads-13 GetDataExclusionsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetDataExclusionsByIds
     */
    final class GetDataExclusionsByIdsRequest
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved.
         * @var integer[]
         */
        public $DataExclusionIds;
    }
}
