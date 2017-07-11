<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the respective ad extension associations by the specified campaign and ad group identifiers.
     * @link http://msdn.microsoft.com/en-us/library/dn236309(v=msads.110).aspx GetAdExtensionsAssociations Response Object
     * 
     * @uses AdExtensionAssociationCollection
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsAssociations
     */
    final class GetAdExtensionsAssociationsResponse
    {
        /**
         * An array of ad extension association collections.
         * @var AdExtensionAssociationCollection[]
         */
        public $AdExtensionAssociationCollection;

        /**
         * An array of BatchError objects that contain details for any associations that were not successfully retrieved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
