<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified ad extensions from the account's ad extension library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getadextensionsbyids?view=bingads-13 GetAdExtensionsByIds Request Object
     * 
     * @uses AdExtensionsTypeFilter
     * @uses AdExtensionAdditionalField
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsByIds
     */
    final class GetAdExtensionsByIdsRequest
    {
        /**
         * The identifier of the account that owns the ad extensions.
         * @var integer
         */
        public $AccountId;

        /**
         * A list of ad extension identifiers.
         * @var integer[]
         */
        public $AdExtensionIds;

        /**
         * The types of ad extensions that the list of identifiers contains.
         * @var AdExtensionsTypeFilter
         */
        public $AdExtensionType;

        /**
         * Reserved for future use.
         * @var AdExtensionAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
