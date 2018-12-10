<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets experiments by experiment identifiers.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getexperimentsbyids?view=bingads-12 GetExperimentsByIds Response Object
     * 
     * @uses Experiment
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetExperimentsByIds
     */
    final class GetExperimentsByIdsResponse
    {
        /**
         * An array of Experiment objects that corresponds directly to the experiment identifiers that you specified in the request.
         * @var Experiment[]
         */
        public $Experiments;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
