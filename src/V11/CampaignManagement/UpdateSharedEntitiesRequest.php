<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates negative keyword lists within the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743732(v=msads.110).aspx UpdateSharedEntities Request Object
     * 
     * @uses SharedEntity
     * @used-by BingAdsCampaignManagementService::UpdateSharedEntities
     */
    final class UpdateSharedEntitiesRequest
    {
        /**
         * The negative keyword lists to update within the account's shared library.
         * @var SharedEntity[]
         */
        public $SharedEntities;
    }
}
