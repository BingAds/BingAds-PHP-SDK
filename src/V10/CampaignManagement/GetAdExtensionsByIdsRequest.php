<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the specified ad extensions from the account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277515(v=msads.100).aspx GetAdExtensionsByIds Request Object
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
         * The list of additional elements that you want included within each returned AdExtension object.
         * @var AdExtensionAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
