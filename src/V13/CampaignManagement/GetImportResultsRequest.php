<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets results for import jobs completed within the last 90 days.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getimportresults?view=bingads-13 GetImportResults Request Object
     * 
     * @uses Paging
     * @uses ImportAdditionalField
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

        /**
         * The additional field values enable you to get the latest features using the current version of Campaign Management API, and in the next version the corresponding elements will be included by default.
         * @var ImportAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
