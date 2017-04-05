<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the respective ad extension associations by the specified campaign and ad group identifiers.
     * @link http://msdn.microsoft.com/en-us/library/dn236309(v=msads.100).aspx GetAdExtensionsAssociations Request Object
     * 
     * @uses AdExtensionsTypeFilter
     * @uses AssociationType
     * @uses AdExtensionAdditionalField
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsAssociations
     */
    final class GetAdExtensionsAssociationsRequest
    {
        /**
         * The identifier of the account that owns the extensions.
         * @var integer
         */
        public $AccountId;

        /**
         * Filters the returned associations by ad extension type.
         * @var AdExtensionsTypeFilter
         */
        public $AdExtensionType;

        /**
         * Filters the returned associations by entity type.
         * @var AssociationType
         */
        public $AssociationType;

        /**
         * The list of entity identifiers by which you may request the respective ad extension associations.
         * @var integer[]
         */
        public $EntityIds;

        /**
         * The list of additional elements that you want included within each returned AdExtension object.
         * @var AdExtensionAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
