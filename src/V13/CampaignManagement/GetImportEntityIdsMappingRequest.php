<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets mappings of your source entity IDs to Microsoft Advertising entity IDs.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getimportentityidsmapping?view=bingads-13 GetImportEntityIdsMapping Request Object
     * 
     * @uses ImportEntityType
     * @used-by BingAdsCampaignManagementService::GetImportEntityIdsMapping
     */
    final class GetImportEntityIdsMappingRequest
    {
        /**
         * The type of import job to get entity ID mappings.
         * @var string
         */
        public $ImportType;

        /**
         * The source entity IDs that you want mapped to Microsoft Advertising entity IDs.
         * @var integer[]
         */
        public $SourceEntityIds;

        /**
         * The type of entity to get ID mappings.
         * @var ImportEntityType
         */
        public $ImportEntityType;

        /**
         * Reserved.
         * @var integer
         */
        public $SourceParentId;
    }
}
