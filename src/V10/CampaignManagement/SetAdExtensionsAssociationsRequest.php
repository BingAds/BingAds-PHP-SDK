<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Associates the specified ad extensions with the respective campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn277532(v=msads.100).aspx SetAdExtensionsAssociations Request Object
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
         * The list of ad extensions to associate with campaigns or ad groups.
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
