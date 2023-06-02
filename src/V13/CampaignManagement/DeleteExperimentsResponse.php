<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more experiments.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteexperiments?view=bingads-13 DeleteExperiments Response Object
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
