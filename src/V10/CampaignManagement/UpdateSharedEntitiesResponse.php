<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Updates shared entities such as negative keyword lists within the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743732(v=msads.100).aspx UpdateSharedEntities Response Object
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
