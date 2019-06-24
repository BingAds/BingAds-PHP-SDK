<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds negative keywords to the shared negative keyword list.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/addlistitemstosharedlist?view=bingads-13 AddListItemsToSharedList Request Object
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
