<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified ad extensions from the account's ad extension library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getadextensionsbyids?version=11 GetAdExtensionsByIds Response Object
     * 
     * @uses AdExtension
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsByIds
     */
    final class GetAdExtensionsByIdsResponse
    {
        /**
         * A list of AdExtension objects.
         * @var AdExtension[]
         */
        public $AdExtensions;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
