<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getexperimentsbyids?view=bingads-12 GetExperimentsByIds Response Object
     * 
     * @uses Experiment
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetExperimentsByIds
     */
    final class GetExperimentsByIdsResponse
    {
        /**
         * Reserved.
         * @var Experiment[]
         */
        public $Experiments;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
