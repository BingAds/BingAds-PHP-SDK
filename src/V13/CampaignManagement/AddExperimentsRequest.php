<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds experiments and creates experiment campaigns based on existing campaigns in an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addexperiments?view=bingads-13 AddExperiments Request Object
     * 
     * @uses Experiment
     * @used-by BingAdsCampaignManagementService::AddExperiments
     */
    final class AddExperimentsRequest
    {
        /**
         * The list of experiments to add.
         * @var Experiment[]
         */
        public $Experiments;
    }
}
