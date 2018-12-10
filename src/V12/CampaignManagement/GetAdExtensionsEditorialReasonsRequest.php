<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets reasons for ad extension editorial issues.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getadextensionseditorialreasons?view=bingads-12 GetAdExtensionsEditorialReasons Request Object
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
