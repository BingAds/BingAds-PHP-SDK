<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Associates the specified ad extensions with the respective campaigns or ad groups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/setadextensionsassociations?view=bingads-13 SetAdExtensionsAssociations Request Object
     * 
     * @uses AdExtensionIdToEntityIdAssociation
     * @uses AssociationType
     * @used-by BingAdsCampaignManagementService::SetAdExtensionsAssociations
     */
    final class SetAdExtensionsAssociationsRequest
    {
        /**
         * The identifier of the account that owns the extensions.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of ad extensions with associated account, campaign, or ad group.
         * @var AdExtensionIdToEntityIdAssociation[]
         */
        public $AdExtensionIdToEntityIdAssociations;

        /**
         * The type of all entities specified in the AdExtensionIdToEntityIdAssociations list.
         * @var AssociationType
         */
        public $AssociationType;
    }
}
