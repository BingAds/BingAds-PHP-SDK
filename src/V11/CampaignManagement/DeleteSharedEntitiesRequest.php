<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes negative keyword lists from the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743726(v=msads.110).aspx DeleteSharedEntities Request Object
     * 
     * @uses SharedEntity
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntities
     */
    final class DeleteSharedEntitiesRequest
    {
        /**
         * The negative keyword lists to delete from the account's shared library, for example negative keyword lists.
         * @var SharedEntity[]
         */
        public $SharedEntities;
    }
}
