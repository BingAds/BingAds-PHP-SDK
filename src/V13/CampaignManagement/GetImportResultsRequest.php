<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets results for import jobs completed within the last 90 days.
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

        /**
         * The identifiers of the import jobs to get results.
         * @var integer[]
         */
        public $ImportJobIds;
    }
}
