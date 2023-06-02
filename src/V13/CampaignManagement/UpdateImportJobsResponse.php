<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Replaces the specified import jobs with new import jobs.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateimportjobs?view=bingads-13 UpdateImportJobs Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateImportJobs
     */
    final class UpdateImportJobsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the replacement import jobs.
         * @var integer[]
         */
        public $ImportJobIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
