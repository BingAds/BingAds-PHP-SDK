<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes the import jobs.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteimportjobs?view=bingads-13 DeleteImportJobs Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteImportJobs
     */
    final class DeleteImportJobsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
