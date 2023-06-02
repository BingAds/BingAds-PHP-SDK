<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the specified experiments.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateexperiments?view=bingads-13 UpdateExperiments Request Object
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
