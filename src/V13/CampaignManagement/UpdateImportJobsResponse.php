<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the UpdateImportJobs Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/updateimportjobs?view=bingads-13 UpdateImportJobs Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateImportJobs
     */
    final class UpdateImportJobsResponse
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $ImportJobIds;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
