<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets import jobs by their type and identifiers.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getimportjobsbyids?view=bingads-13 GetImportJobsByIds Response Object
     * 
     * @uses ImportJob
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetImportJobsByIds
     */
    final class GetImportJobsByIdsResponse
    {
        /**
         * The import jobs that matched the request criteria.
         * @var ImportJob[]
         */
        public $ImportJobs;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
