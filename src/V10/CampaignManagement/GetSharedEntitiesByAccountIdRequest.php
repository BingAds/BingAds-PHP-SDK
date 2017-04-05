<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the shared entities such as negative keyword lists from the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743728(v=msads.100).aspx GetSharedEntitiesByAccountId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSharedEntitiesByAccountId
     */
    final class GetSharedEntitiesByAccountIdRequest
    {
        /**
         * The type of shared entity to get from the account's library.
         * @var string
         */
        public $SharedEntityType;
    }
}
