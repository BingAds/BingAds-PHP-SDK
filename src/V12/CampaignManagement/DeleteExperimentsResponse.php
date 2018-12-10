<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Deletes one or more experiments.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deleteexperiments?view=bingads-12 DeleteExperiments Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteExperiments
     */
    final class DeleteExperimentsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
