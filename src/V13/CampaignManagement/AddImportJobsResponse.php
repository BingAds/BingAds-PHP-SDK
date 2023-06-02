<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Creates a new import job.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addimportjobs?view=bingads-13 AddImportJobs Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddImportJobs
     */
    final class AddImportJobsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the import jobs that were added.
         * @var integer[]
         */
        public $ImportJobIds;

        /**
         * A list of BatchError objects that contain details for any list item requests that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
