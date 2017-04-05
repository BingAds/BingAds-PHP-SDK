<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Adds list items such as negative keywords to the corresponding list.
     * @link http://msdn.microsoft.com/en-us/library/dn743721(v=msads.100).aspx AddListItemsToSharedList Request Object
     * 
     * @uses SharedListItem
     * @uses SharedList
     * @used-by BingAdsCampaignManagementService::AddListItemsToSharedList
     */
    final class AddListItemsToSharedListRequest
    {
        /**
         * An array of list items to add to the shared list, for example a list of negative keywords.
         * @var SharedListItem[]
         */
        public $ListItems;

        /**
         * The list to add to the account's shared library.
         * @var SharedList
         */
        public $SharedList;
    }
}
