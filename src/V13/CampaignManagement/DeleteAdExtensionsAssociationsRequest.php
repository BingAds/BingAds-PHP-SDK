<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Removes the specified association from the respective campaigns or ad groups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteadextensionsassociations?view=bingads-13 DeleteAdExtensionsAssociations Request Object
     * 
     * @uses AdExtensionIdToEntityIdAssociation
     * @uses AssociationType
     * @used-by BingAdsCampaignManagementService::DeleteAdExtensionsAssociations
     */
    final class DeleteAdExtensionsAssociationsRequest
    {
        /**
         * The identifier of the account that owns the extensions.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of ad extensions that are associated with campaigns or ad groups before calling this  operation.
         * @var AdExtensionIdToEntityIdAssociation[]
         */
        public $AdExtensionIdToEntityIdAssociations;

        /**
         * The entity type or types associated with an ad extension.
         * @var AssociationType
         */
        public $AssociationType;
    }
}
