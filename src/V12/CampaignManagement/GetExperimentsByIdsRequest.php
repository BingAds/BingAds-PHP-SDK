<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getexperimentsbyids?view=bingads-12 GetExperimentsByIds Request Object
     * 
     * @uses Paging
     * @used-by BingAdsCampaignManagementService::GetExperimentsByIds
     */
    final class GetExperimentsByIdsRequest
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $ExperimentIds;

        /**
         * Reserved.
         * @var Paging
         */
        public $PageInfo;
    }
}
