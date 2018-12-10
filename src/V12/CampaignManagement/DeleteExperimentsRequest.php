<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Deletes one or more experiments.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deleteexperiments?view=bingads-12 DeleteExperiments Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteExperiments
     */
    final class DeleteExperimentsRequest
    {
        /**
         * A maximum of 100 experiment identifiers to delete.
         * @var integer[]
         */
        public $ExperimentIds;
    }
}
