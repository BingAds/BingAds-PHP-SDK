<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Replaces the specified import jobs with new import jobs.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateimportjobs?view=bingads-13 UpdateImportJobs Request Object
     * 
     * @uses ImportJob
     * @used-by BingAdsCampaignManagementService::UpdateImportJobs
     */
    final class UpdateImportJobsRequest
    {
        /**
         * The import jobs to update.
         * @var ImportJob[]
         */
        public $ImportJobs;
    }
}
