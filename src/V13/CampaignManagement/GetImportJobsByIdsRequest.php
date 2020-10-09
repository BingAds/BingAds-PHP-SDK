<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets import jobs by their type and identifiers.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getimportjobsbyids?view=bingads-13 GetImportJobsByIds Request Object
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
         * Reserved for future use.
         * @var ImportAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
