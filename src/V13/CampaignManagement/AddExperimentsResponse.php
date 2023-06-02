<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds experiments and creates experiment campaigns based on existing campaigns in an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addexperiments?view=bingads-13 AddExperiments Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddExperiments
     */
    final class AddExperimentsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the experiments that were added.
         * @var integer[]
         */
        public $ExperimentIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
