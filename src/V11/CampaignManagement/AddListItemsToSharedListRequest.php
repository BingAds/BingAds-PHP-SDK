<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds negative keywords to the shared negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743721(v=msads.110).aspx AddListItemsToSharedList Request Object
     * 
     * @uses SharedListItem
     * @uses SharedList
     * @used-by BingAdsCampaignManagementService::AddListItemsToSharedList
     */
    final class AddListItemsToSharedListRequest
    {
        /**
         * The negative keywords to add to the negative keyword list.
         * @var SharedListItem[]
         */
        public $ListItems;

        /**
         * The negative keyword list to add to the account's shared library.
         * @var SharedList
         */
        public $SharedList;
    }
}
