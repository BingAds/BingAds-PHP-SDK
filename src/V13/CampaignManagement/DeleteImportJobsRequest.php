<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes the import jobs.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/deleteimportjobs?view=bingads-13 DeleteImportJobs Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteImportJobs
     */
    final class DeleteImportJobsRequest
    {
        /**
         * The identifiers of the import jobs to delete.
         * @var integer[]
         */
        public $ImportJobIds;

        /**
         * The type of import job to delete.
         * @var string
         */
        public $ImportType;
    }
}
