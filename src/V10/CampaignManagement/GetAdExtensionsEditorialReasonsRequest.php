<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets editorial rejection reasons for the respective ad extension and entity associations.
     * @link http://msdn.microsoft.com/en-us/library/dn236313(v=msads.100).aspx GetAdExtensionsEditorialReasons Request Object
     * 
     * @uses AdExtensionIdToEntityIdAssociation
     * @uses AssociationType
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsEditorialReasons
     */
    final class GetAdExtensionsEditorialReasonsRequest
    {
        /**
         * The identifier of the account that owns the extensions.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of ad extensions and corresponding entity associations to get.
         * @var AdExtensionIdToEntityIdAssociation[]
         */
        public $AdExtensionIdToEntityIdAssociations;

        /**
         * Filters the returned associations by entity type.
         * @var AssociationType
         */
        public $AssociationType;
    }
}
