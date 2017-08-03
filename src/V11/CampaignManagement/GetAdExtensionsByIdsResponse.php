<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified ad extensions from the account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277515(v=msads.110).aspx GetAdExtensionsByIds Response Object
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
