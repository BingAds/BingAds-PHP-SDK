<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the UpdateImportJobs Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/updateimportjobs?view=bingads-13 UpdateImportJobs Request Object
     * 
     * @uses ImportJob
     * @used-by BingAdsCampaignManagementService::UpdateImportJobs
     */
    final class UpdateImportJobsRequest
    {
        /**
         * Reserved.
         * @var ImportJob[]
         */
        public $ImportJobs;
    }
}
