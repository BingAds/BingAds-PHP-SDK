<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes shared entities such as negative keyword lists from the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743726(v=msads.100).aspx DeleteSharedEntities Request Object
     * 
     * @uses SharedEntity
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntities
     */
    final class DeleteSharedEntitiesRequest
    {
        /**
         * The shared entities to delete from the account's shared library, for example negative keyword lists.
         * @var SharedEntity[]
         */
        public $SharedEntities;
    }
}
