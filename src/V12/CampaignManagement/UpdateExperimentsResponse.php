<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Updates the specified experiments.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updateexperiments?view=bingads-12 UpdateExperiments Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateExperiments
     */
    final class UpdateExperimentsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
