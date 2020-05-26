<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Creates a new import job.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/addimportjobs?view=bingads-13 AddImportJobs Request Object
     * 
     * @uses ImportJob
     * @used-by BingAdsCampaignManagementService::AddImportJobs
     */
    final class AddImportJobsRequest
    {
        /**
         * The import jobs to create.
         * @var ImportJob[]
         */
        public $ImportJobs;
    }
}
