<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the respective ad extension associations by the specified campaign and ad group identifiers.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getadextensionsassociations?view=bingads-13 GetAdExtensionsAssociations Response Object
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
