<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets results for completed import jobs.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getimportresults?view=bingads-13 GetImportResults Request Object
     * 
     * @uses Paging
     * @used-by BingAdsCampaignManagementService::GetImportResults
     */
    final class GetImportResultsRequest
    {
        /**
         * The type of import job to get results.
         * @var string
         */
        public $ImportType;

        /**
         * Determines the index and size of import results per page.
         * @var Paging
         */
        public $PageInfo;
    }
}
