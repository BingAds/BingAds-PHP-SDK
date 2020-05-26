<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets results for completed import jobs.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getimportresults?view=bingads-13 GetImportResults Response Object
     * 
     * @uses ImportResult
     * @used-by BingAdsCampaignManagementService::GetImportResults
     */
    final class GetImportResultsResponse
    {
        /**
         * Contains the status, run time, and statistical results for each import that has run.
         * @var ImportResult[]
         */
        public $ImportResults;
    }
}
