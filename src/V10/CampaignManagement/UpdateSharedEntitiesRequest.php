<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Updates shared entities such as negative keyword lists within the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743732(v=msads.100).aspx UpdateSharedEntities Request Object
     * 
     * @uses SharedEntity
     * @used-by BingAdsCampaignManagementService::UpdateSharedEntities
     */
    final class UpdateSharedEntitiesRequest
    {
        /**
         * The shared entities to update within the account's shared library, for example negative keyword lists.
         * @var SharedEntity[]
         */
        public $SharedEntities;
    }
}
