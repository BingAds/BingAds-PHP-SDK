<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified ad extensions from the account's ad extension library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getadextensionsbyids?version=11 GetAdExtensionsByIds Request Object
     * 
     * @uses AdExtensionsTypeFilter
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
    }
}
