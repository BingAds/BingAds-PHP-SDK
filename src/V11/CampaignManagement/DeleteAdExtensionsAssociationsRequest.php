<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Removes the specified association from the respective campaigns or ad groups.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deleteadextensionsassociations?version=11 DeleteAdExtensionsAssociations Request Object
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
