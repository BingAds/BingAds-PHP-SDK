<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets mappings of your source entity IDs to Microsoft Advertising entity IDs.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getimportentityidsmapping?view=bingads-13 GetImportEntityIdsMapping Response Object
     * 
     * @uses KeyValuePairOflonglong
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetImportEntityIdsMapping
     */
    final class GetImportEntityIdsMappingResponse
    {
        /**
         * The resulting list of key and value pairs.
         * @var KeyValuePairOflonglong[]
         */
        public $EntityIdsMapping;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
