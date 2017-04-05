<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the ad extensions from the account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277509(v=msads.100).aspx GetAdExtensionIdsByAccountId Request Object
     * 
     * @uses AdExtensionsTypeFilter
     * @uses AssociationType
     * @used-by BingAdsCampaignManagementService::GetAdExtensionIdsByAccountId
     */
    final class GetAdExtensionIdsByAccountIdRequest
    {
        /**
         * The identifier of the account that contains the ad extensions to get.
         * @var integer
         */
        public $AccountId;

        /**
         * The types of ad extensions to get from the account.
         * @var AdExtensionsTypeFilter
         */
        public $AdExtensionType;

        /**
         * A value that filters the extensions based on whether they're associated with a specific entity type.
         * @var AssociationType
         */
        public $AssociationType;
    }
}
