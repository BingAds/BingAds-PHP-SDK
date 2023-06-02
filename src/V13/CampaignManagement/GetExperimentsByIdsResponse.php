<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets experiments by experiment identifiers.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getexperimentsbyids?view=bingads-13 GetExperimentsByIds Response Object
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
