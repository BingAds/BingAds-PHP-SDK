<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Associates the specified ad extensions with the respective campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn277532(v=msads.110).aspx SetAdExtensionsAssociations Request Object
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
