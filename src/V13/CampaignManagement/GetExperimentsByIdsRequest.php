<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets experiments by experiment identifiers.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getexperimentsbyids?view=bingads-13 GetExperimentsByIds Request Object
     * 
     * @uses Paging
     * @used-by BingAdsCampaignManagementService::GetExperimentsByIds
     */
    final class GetExperimentsByIdsRequest
    {
        /**
         * The identifiers of the experiments to get.
         * @var integer[]
         */
        public $ExperimentIds;

        /**
         * Reserved for future use.
         * @var Paging
         */
        public $PageInfo;
    }
}
