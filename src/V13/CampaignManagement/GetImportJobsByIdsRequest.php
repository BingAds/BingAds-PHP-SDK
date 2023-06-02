<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets import jobs by their type and identifiers.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getimportjobsbyids?view=bingads-13 GetImportJobsByIds Request Object
     * 
     * @uses ImportAdditionalField
     * @used-by BingAdsCampaignManagementService::GetImportJobsByIds
     */
    final class GetImportJobsByIdsRequest
    {
        /**
         * The identifiers of the import jobs to get.
         * @var integer[]
         */
        public $ImportJobIds;

        /**
         * The type of import job to get.
         * @var string
         */
        public $ImportType;

        /**
         * The additional field values enable you to get the latest features using the current version of Campaign Management API, and in the next version the corresponding elements will be included by default.
         * @var ImportAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
