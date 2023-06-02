<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more experiments.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteexperiments?view=bingads-13 DeleteExperiments Request Object
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
