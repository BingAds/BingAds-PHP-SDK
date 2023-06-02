<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets results for import jobs completed within the last 90 days.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getimportresults?view=bingads-13 GetImportResults Response Object
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
