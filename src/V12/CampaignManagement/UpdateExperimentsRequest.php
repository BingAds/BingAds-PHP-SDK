<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Updates the specified experiments.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updateexperiments?view=bingads-12 UpdateExperiments Request Object
     * 
     * @uses Experiment
     * @used-by BingAdsCampaignManagementService::UpdateExperiments
     */
    final class UpdateExperimentsRequest
    {
        /**
         * An array of Experiment objects to update within the account.
         * @var Experiment[]
         */
        public $Experiments;
    }
}
