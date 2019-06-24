<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the specified experiments.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/updateexperiments?view=bingads-13 UpdateExperiments Response Object
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
