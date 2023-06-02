<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the respective ad extension associations by the specified campaign and ad group identifiers.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getadextensionsassociations?view=bingads-13 GetAdExtensionsAssociations Request Object
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
         * Reserved for future use.
         * @var AdExtensionAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
