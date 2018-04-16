<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the respective ad extension associations by the specified campaign and ad group identifiers.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getadextensionsassociations?view=bingads-12 GetAdExtensionsAssociations Request Object
     * 
     * @uses AdExtensionsTypeFilter
     * @uses AssociationType
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
    }
}
