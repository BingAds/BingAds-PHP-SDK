<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates negative keyword lists within the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743732(v=msads.110).aspx UpdateSharedEntities Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateSharedEntities
     */
    final class UpdateSharedEntitiesResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
