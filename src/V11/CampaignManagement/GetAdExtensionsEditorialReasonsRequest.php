<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets editorial rejection reasons for the respective ad extension and entity associations.
     * @link http://msdn.microsoft.com/en-us/library/dn236313(v=msads.110).aspx GetAdExtensionsEditorialReasons Request Object
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
